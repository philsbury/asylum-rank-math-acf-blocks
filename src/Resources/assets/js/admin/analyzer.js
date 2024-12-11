import debounce from 'lodash.debounce';

class RankMathAcfBlock {
    constructor() {
        this.init();
        this.hooks();
        this.events();
    }

    /**
     * Init the class
     */
    init = () => {
        this.getContent = this.getContent.bind(this);
    }

    /**
     * Hook into Rank Math App eco-system
     */
    hooks = () => {
        wp.hooks.addFilter('rank_math_content', 'rank-math', this.getContent, 11);
    }

    /**
     * Capture events from ACF Blocks to refresh Rank Math analysis
     */
    events = () => {
        const { acf } = window;

        if (acf === undefined) {
            return;
        }

        acf.addAction('render_block_preview', debounce(() => rankMathEditor.refresh('content'), 500))
    }

    /**
     * Gather custom fields data for analysis
     *
     * @param {string} content Content to replce fields in.
     *
     * @return {string} Replaced content.
     */
    getContent = (content) => {
        const blockContent = Array.from(document.querySelectorAll('.acf-block-body')).map(el => el.innerHTML).join('');

        if (blockContent.trim() === '') {
            return content;
        }
        return blockContent;
    }


}

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        new RankMathAcfBlock();
    }, 500);
});

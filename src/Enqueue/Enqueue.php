<?php

namespace Asylum\RankMath\Enqueue;

class Enqueue
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', [$this, 'admin']);
    }

    public function admin()
    {
        // wp_enqueue_style('rank-math-acf-block-analyser-admin', RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/admin.css', [], RANK_MATH_ACF_BLOCK_ANALYSER_VERSION);
        wp_enqueue_script('rank-math-acf-block-analyser-admin', ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/analyzer.js', ['wp-hooks', 'rank-math-analyzer'], ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_VERSION, true);
    }
}

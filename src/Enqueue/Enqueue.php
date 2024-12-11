<?php

namespace Asylum\RankMath\Enqueue;

class Enqueue
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', [$this, 'admin']);
        add_action('wp_enqueue_scripts', [$this, 'assets']);
    }

    public function admin()
    {
        wp_enqueue_style('rank-math-acf-block-analyser-admin', RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/admin.css', [], RANK_MATH_ACF_BLOCK_ANALYSER_VERSION);
        wp_enqueue_script('rank-math-acf-block-analyser-admin', RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/admin.js', [], RANK_MATH_ACF_BLOCK_ANALYSER_VERSION, true);
    }

    public function assets()
    {
        wp_enqueue_style('rank-math-acf-block-analyser-forms', RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/forms.css', [], RANK_MATH_ACF_BLOCK_ANALYSER_VERSION);
        wp_enqueue_script('rank-math-acf-block-analyser-forms', RANK_MATH_ACF_BLOCK_ANALYSER_URL . 'dist/forms.js', [], RANK_MATH_ACF_BLOCK_ANALYSER_VERSION, true);
    }
}

<?php

/**
 * Plugin Name:       	 Rank Math ACF Block analyser
 * Description:       	 Add ACF block content to Rank Math data
 * Version:              0.0.2
 * Author:            	 Asylum Digital
 * Author URI:        	 https://www.asylumdigital.co.uk
 * Text Domain:       	 asylum-rank-math-acf-blocks
 * Requires Plugins:     seo-by-rank-math
 */
// , advanced-custom-fields
 if (!defined('WPINC')) {
     die;
 }

define('ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_PATH', plugin_dir_path(__FILE__));
define('ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_URL', plugin_dir_url(__FILE__));
define('ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_VERSION', '0.0.2');
define('ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_SLUG', 'asylum-rank-math-acf-blocks');

require_once('vendor/autoload.php');
require_once('src/Bootstrap.php');

function asylum_rank_math_acf_block_analyser_activate()
{
    \Asylum\RankMath\Update\Activate::activate();
}

function asylum_rank_math_acf_block_analyser_deactivate()
{
    \Asylum\RankMath\Update\Deactivate::deactivate();
}

function asylum_rank_math_acf_block_analyser_uninstall()
{
    \Asylum\RankMath\Update\Uninstall::uninstall();
}

register_activation_hook(__FILE__, 'asylum_rank_math_acf_block_analyser_activate');
register_deactivation_hook(__FILE__, 'asylum_rank_math_acf_block_analyser_deactivate');
register_uninstall_hook( __FILE__,  'asylum_rank_math_acf_block_analyser_uninstall');

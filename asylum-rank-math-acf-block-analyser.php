<?php

/**
 * Plugin Name:       	 Rank Math ACF Block analyser
 * Description:       	 Add ACF block content to Rank Math data
 * Version:           	 1.0.0
 * Author:            	 Asylum Digital
 * Author URI:        	 https://www.asylumdigital.co.uk
 * Text Domain:       	 rank-math-acf-block-analyser
 */

 if (!defined('WPINC')) {
     die;
 }

define('RANK_MATH_ACF_BLOCK_ANALYSER_PATH', plugin_dir_path(__FILE__));
define('RANK_MATH_ACF_BLOCK_ANALYSER_URL', plugin_dir_url(__FILE__));
define('RANK_MATH_ACF_BLOCK_ANALYSER_VERSION', '1.0.0');
define('RANK_MATH_ACF_BLOCK_ANALYSER_SLUG', 'rank-math-acf-block-analyser');

require_once('vendor/autoload.php');
require_once('src/Bootstrap.php');

function rank_math_acf_block_analyser_activate()
{
    \Asylum\RankMath\Update\Activate::activate();
}

function rank_math_acf_block_analyser_deactivate()
{
    \Asylum\RankMath\Update\Deactivate::deactivate();
}

function rank_math_acf_block_analyser_uninstall()
{
    \Asylum\RankMath\Update\Uninstall::uninstall();
}

register_activation_hook(__FILE__, 'rank_math_acf_block_analyser_activate');
register_deactivation_hook(__FILE__, 'rank_math_acf_block_analyser_deactivate');
register_uninstall_hook( __FILE__,  'rank_math_acf_block_analyser_uninstall');
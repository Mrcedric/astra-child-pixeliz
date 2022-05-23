<?php
/**
 * astra-child-pixeliz Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra-child-pixeliz
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_PIXELIZ_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'pixeliz-child-theme-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_PIXELIZ_VERSION, 'all' );
	wp_enqueue_script( 'pixeliz-child-theme-js', get_stylesheet_directory_uri() . '/assets/js/custom-pixeliz.js');

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
<?php
/**
 * URI Modern Campaign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uri-modern-campaign
 */

/**
 * Enqueue scripts and styles.
 */
function uri_modern_campaign_enqueues() {

	$parent_style = 'uri-modern-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'uri-modern-campaign-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'uri_modern_campaign_enqueues' );

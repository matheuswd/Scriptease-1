<?php
/**
 * Scriptease functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Scriptease
 * @since Scriptease 1.0.0
 */

function scriptease_scripts() {
	// Add the Bootstrap stylesheet to the site
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '3.3.4', false  );  
    
    // Theme stylesheet.
	wp_enqueue_style( 'scriptease-style', get_stylesheet_uri() );

	// Enqueue jQuery library used in this theme, on footer
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.js', false, '1.11.1', true );

	// Enqueue minified Bootstrap JavaScript
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, '3.3.4', true );

	// Enqueue minified Wow library to add effects to the site. Is licensed under GPL if used in GPL systems
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', false, '1.1.2', true );
    
    // Enqueue minified jQuery nicescroll
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', false, '3.6.0', true );

	// Enqueue a custom JS file
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', false, '1.0.0', true );

	// Add Animate stylesheet, used to add animation in the site.
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css',false,'1.1.3','all');
}
add_action( 'wp_enqueue_scripts', 'scriptease_scripts' );
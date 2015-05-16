<?php
/**
 *	Require Once
 */
require_once( 'includes/customizer.php' );

/**
 *	Theme Setup
 */
if( !function_exists( 'accountant_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'accountant_theme_setup' );
	function accountant_theme_setup() {
		load_theme_textdomain( 'accountant', get_template_directory() . '/languages' );
	}
}

/**
 *	Enqueue Styles
 */
if( !function_exists( 'accountant_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'accountant_enqueue_styles' );
	function accountant_enqueue_styles() {
		wp_enqueue_style( 'font-family-lora', 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' );
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
}
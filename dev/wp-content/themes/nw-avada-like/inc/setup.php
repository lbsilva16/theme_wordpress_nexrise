<?php
/**
 * Theme setup.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nw_avada_like_setup' ) ) {
	/**
	 * Register theme defaults and supports.
	 */
	function nw_avada_like_setup(): void {
		load_theme_textdomain( 'nw-avada-like', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
			'style',
			'script',
		] );
		add_theme_support( 'custom-logo', [
			'height'      => 120,
			'width'       => 120,
			'flex-width'  => true,
			'flex-height' => true,
		] );

        // Legacy header menu location removed. New location is registered in functions.php.
	}
}
add_action( 'after_setup_theme', 'nw_avada_like_setup' );

if ( ! function_exists( 'nw_avada_like_set_content_width' ) ) {
	/**
	 * Define content width for embeds.
	 */
	function nw_avada_like_set_content_width(): void {
		$GLOBALS['content_width'] = 768;
	}
}
add_action( 'after_setup_theme', 'nw_avada_like_set_content_width', 0 );

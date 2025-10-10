<?php
/**
 * Asset loading helpers.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nw_avada_like_enqueue_assets' ) ) {
	/**
	 * Enqueue main theme assets.
	 */
	function nw_avada_like_enqueue_assets(): void {
		$theme   = wp_get_theme();
		$version = $theme->get( 'Version' );
		$uri     = get_template_directory_uri();

		wp_enqueue_style( 'nw-avada-like-theme', $uri . '/assets/css/theme.css', [], $version );
		wp_enqueue_script( 'nw-avada-like-theme', $uri . '/assets/js/theme.js', [], $version, true );
	}
}

add_action( 'wp_enqueue_scripts', 'nw_avada_like_enqueue_assets' );

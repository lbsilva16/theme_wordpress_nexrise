<?php
/**
 * Funcoes principais do tema NW Avada Like.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nw_avada_like_setup' ) ) {
	/**
	 * Configura recursos de tema e menus.
	 */
	function nw_avada_like_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		] );

		register_nav_menus( [
			'primary' => __( 'Primary Menu', 'nw-avada-like' ),
		] );
	}
}
add_action( 'after_setup_theme', 'nw_avada_like_setup' );

if ( ! function_exists( 'nw_avada_like_scripts' ) ) {
	/**
	 * Enfileira estilos e scripts do tema.
	 */
	function nw_avada_like_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'nw-avada-like-style', get_stylesheet_uri(), [], $theme_version );
		wp_enqueue_style(
			'nw-avada-like-main',
			get_template_directory_uri() . '/assets/css/main.css',
			[ 'nw-avada-like-style' ],
			$theme_version
		);

		wp_enqueue_script(
			'nw-avada-like-main',
			get_template_directory_uri() . '/assets/js/main.js',
			[],
			$theme_version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'nw_avada_like_scripts' );

if ( ! function_exists( 'nw_avada_like_fallback_menu' ) ) {
	/**
	 * Fallback simples caso nenhum menu esteja atribuido.
	 */
	function nw_avada_like_fallback_menu() {
		echo '<ul class="primary-nav__list">';
		echo '<li class="menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'nw-avada-like' ) . '</a></li>';
		echo '<li class="menu-item"><a href="#why-choose-us">' . esc_html__( 'Why Choose Us', 'nw-avada-like' ) . '</a></li>';
		echo '<li class="menu-item"><a href="#packages">' . esc_html__( 'Packages', 'nw-avada-like' ) . '</a></li>';
		echo '<li class="menu-item"><a href="#faq">' . esc_html__( 'FAQ', 'nw-avada-like' ) . '</a></li>';
		echo '<li class="menu-item"><a href="#final-cta">' . esc_html__( 'Contact', 'nw-avada-like' ) . '</a></li>';
		echo '</ul>';
	}
}

require_once get_template_directory() . '/inc/customizer-sections.php';

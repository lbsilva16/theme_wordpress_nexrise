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

// Enqueue NexRise theme assets.
add_action(
	'wp_enqueue_scripts',
	function () {
		$ver = wp_get_theme()->get( 'Version' ) ?: '1.0.0';
		wp_enqueue_style( 'nx-css', get_template_directory_uri() . '/assets/css/nx.css', [], $ver );
		wp_enqueue_script( 'nx-js', get_template_directory_uri() . '/assets/js/nx.js', [], $ver, true );

		if ( is_front_page() ) {
			wp_enqueue_style(
				'nw-avada-like-faq',
				get_template_directory_uri() . '/assets/css/faq.css',
				[ 'nx-css' ],
				$ver
			);

			wp_enqueue_script(
				'nw-avada-like-faq',
				get_template_directory_uri() . '/assets/js/faq.js',
				[ 'nx-js' ],
				$ver,
				true
			);

			wp_enqueue_style(
				'nw-avada-like-packages',
				get_template_directory_uri() . '/assets/css/packages.css',
				[ 'nx-css' ],
				$ver
			);

			wp_enqueue_script(
				'nw-avada-like-packages',
				get_template_directory_uri() . '/assets/js/packages.js',
				[ 'nx-js' ],
				$ver,
				true
			);

			wp_enqueue_style(
				'nw-avada-like-final-cta',
				get_template_directory_uri() . '/assets/css/final-cta.css',
				[ 'nx-css' ],
				$ver
			);

			wp_enqueue_script(
				'nw-avada-like-final-cta',
				get_template_directory_uri() . '/assets/js/final-cta.js',
				[ 'nx-js' ],
				$ver,
				true
			);
		}
	}
);

if ( ! function_exists( 'nw_avada_like_fallback_menu' ) ) {
	/**
	 * Fallback simples caso nenhum menu esteja atribuido.
	 */
	function nw_avada_like_fallback_menu() {
		echo '<ul class="primary-nav__list">';
		echo nw_avada_like_primary_menu_markup();
		echo '</ul>';
	}
}

if ( ! function_exists( 'nw_avada_like_primary_menu_markup' ) ) {
	/**
	 * Retorna o HTML padrao dos itens do menu primario.
	 */
	function nw_avada_like_primary_menu_markup(): string {
		$base_url = home_url( '/' );
		ob_start();
		?>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url ); ?>"><?php echo esc_html__( 'Home', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#why-choose-us' ); ?>"><?php echo esc_html__( 'Why Us', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#outcomes' ); ?>"><?php echo esc_html__( 'Results', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#portfolio' ); ?>"><?php echo esc_html__( 'Portfolio', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#process' ); ?>"><?php echo esc_html__( 'Process', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item menu-item-has-children">
			<a href="<?php echo esc_url( $base_url . '#solutions' ); ?>"><?php echo esc_html__( 'Pricing', 'nw-avada-like' ); ?></a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="<?php echo esc_url( $base_url . '#packages' ); ?>">
						<div class="sub-menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 7H21L20 21H4L3 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M8 7V4C8 3.44772 8.44772 3 9 3H15C15.5523 3 16 3.44772 16 4V7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M10 11V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14 11V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<div class="sub-menu-content">
							<span class="sub-menu-title"><?php echo esc_html__( 'Packages', 'nw-avada-like' ); ?></span>
							<span class="sub-menu-desc"><?php echo esc_html__( 'Complete solutions for your business', 'nw-avada-like' ); ?></span>
						</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="<?php echo esc_url( $base_url . '#addons' ); ?>">
						<div class="sub-menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<div class="sub-menu-content">
							<span class="sub-menu-title"><?php echo esc_html__( 'Add-Ons', 'nw-avada-like' ); ?></span>
							<span class="sub-menu-desc"><?php echo esc_html__( 'Enhance your experience with extras', 'nw-avada-like' ); ?></span>
						</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="<?php echo esc_url( $base_url . '#care-plans' ); ?>">
						<div class="sub-menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 3V21H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 9L12 6L16 10L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<div class="sub-menu-content">
							<span class="sub-menu-title"><?php echo esc_html__( 'Growth Plans', 'nw-avada-like' ); ?></span>
							<span class="sub-menu-desc"><?php echo esc_html__( 'Scale your business to the next level', 'nw-avada-like' ); ?></span>
						</div>
					</a>
				</li>
			</ul>
		</li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#testimonials' ); ?>"><?php echo esc_html__( 'Testimonials', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#faq' ); ?>"><?php echo esc_html__( 'FAQ', 'nw-avada-like' ); ?></a></li>
		<li class="menu-item"><a href="<?php echo esc_url( $base_url . '#final-cta' ); ?>"><?php echo esc_html__( 'Contact', 'nw-avada-like' ); ?></a></li>
		<?php
		return trim( ob_get_clean() );
	}
}

add_filter(
	'wp_nav_menu_items',
	function ( $items, $args ) {
		if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
			return nw_avada_like_primary_menu_markup();
		}
		return $items;
	},
	10,
	2
);

// Opcional: incluir Customizer de URLs (placeholders de imagens das seções).
require_once get_template_directory() . '/inc/customizer-sections.php';

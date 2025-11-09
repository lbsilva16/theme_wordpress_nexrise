<?php
/**
 * Funcoes principais do tema NW Avada Like.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Carregar arquivo de setup do tema (contém nw_avada_like_setup, load_theme_textdomain e content_width).
require_once get_template_directory() . '/inc/setup.php';

// Carregar funções auxiliares de template (nw_avada_like_posted_on, nw_avada_like_posted_by).
require_once get_template_directory() . '/inc/template-tags.php';

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
		wp_enqueue_style(
			'nw-avada-like-footer',
			get_template_directory_uri() . '/assets/css/footer.css',
			[ 'nw-avada-like-main' ],
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

/**
 * Registrar nova localização de menu e suporte a logo, conforme guia.
 */
function register_custom_menu() {
    register_nav_menus(
        [
            'primary-menu'    => __( 'Primary Menu', 'nw-avada-like' ),
            // Novo local para o drop-down de utilidades no mobile
            'mobile_utilities' => __( 'Mobile Utilities', 'nw-avada-like' ),
        ]
    );
}
add_action( 'after_setup_theme', 'register_custom_menu' );

function theme_custom_logo_setup() {
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
}
add_action( 'after_setup_theme', 'theme_custom_logo_setup' );

// Habilitar (não interfere) o walker de edição – mantém o campo de descrição disponível nas opções de tela.
function enable_menu_description( $walker ) {
    return $walker;
}
add_filter( 'wp_edit_nav_menu_walker', 'enable_menu_description' );

// Enfileira os assets do tema NexRise.
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

        // Assets do drop-down Mobile Utilities
        wp_enqueue_style(
            'mobile-utilities-dropdown',
            get_template_directory_uri() . '/assets/css/mobile-utilities-dropdown.css',
            [ 'nx-css' ],
            $ver
        );
        wp_enqueue_script(
            'mobile-utilities-dropdown',
            get_template_directory_uri() . '/assets/js/mobile-utilities-dropdown.js',
            [ 'nx-js' ],
            $ver,
            true
        );

		// Script para página Privacy Policy
		if ( is_page( 'privacy-policy' ) || is_page( 'Privacy Policy' ) ) {
			wp_enqueue_script(
				'nw-avada-like-privacy-policy',
				get_template_directory_uri() . '/assets/js/privacy-policy.js',
				[ 'nx-js' ],
				$ver,
				true
			);
		}
	}
);

/**
 * Custom Walker para menu com dropdown e descrições.
 */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent  = str_repeat( "\t", $depth );
        $output .= "\n{$indent}<ul class=\"sub-menu\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent  = $depth ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        if ( in_array( 'menu-item-has-children', $classes, true ) ) {
            $classes[] = 'has-dropdown';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $item_id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $item_id = $item_id ? ' id="' . esc_attr( $item_id ) . '"' : '';

        $output .= $indent . '<li' . $item_id . $class_names . '>';

        $atts          = [];
        $atts['title'] = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts           = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value      = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        if ( $depth > 0 && ! empty( $item->description ) ) {
            $item_output  = $args->before;
            $item_output .= '<a' . $attributes . ' class="dropdown-item">';
            $item_output .= '<div class="dropdown-item-content">';
            $icon         = get_post_meta( $item->ID, '_menu_item_icon', true );
            $icon         = ! empty( $icon ) ? esc_html( $icon ) : '📦';
            $item_output .= '<div class="dropdown-icon">' . $icon . '</div>';
            $item_output .= '<div class="dropdown-text">';
            $item_output .= '<div class="dropdown-title">' . $args->link_before . $title . $args->link_after . '</div>';
            $item_output .= '<div class="dropdown-description">' . esc_html( $item->description ) . '</div>';
            $item_output .= '</div>';
            $item_output .= '</div>';
            $item_output .= '</a>';
            $item_output .= $args->after;
        } else {
            $item_output  = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

// Exibir campo de ícone (emoji) na edição de itens de menu.
function custom_menu_item_icon_field( $item_id, $item, $depth, $args ) {
    $icon = get_post_meta( $item_id, '_menu_item_icon', true );
    ?>
    <p class="field-icon description description-wide">
        <label for="edit-menu-item-icon-<?php echo (int) $item_id; ?>">
            <?php _e( 'Icon (emoji)', 'nw-avada-like' ); ?><br />
            <input type="text" id="edit-menu-item-icon-<?php echo (int) $item_id; ?>" class="widefat" name="menu-item-icon[<?php echo (int) $item_id; ?>]" value="<?php echo esc_attr( $icon ); ?>" />
            <span class="description"><?php _e( 'E.g.: 📦, 🔧, 📈', 'nw-avada-like' ); ?></span>
        </label>
    </p>
    <?php
}
add_action( 'wp_nav_menu_item_custom_fields', 'custom_menu_item_icon_field', 10, 4 );

// Salvar campo de ícone customizado.
function save_custom_menu_item_icon( $menu_id, $menu_item_db_id, $args ) {
    if ( isset( $_REQUEST['menu-item-icon'][ $menu_item_db_id ] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
        $icon_value = sanitize_text_field( wp_unslash( $_REQUEST['menu-item-icon'][ $menu_item_db_id ] ) ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
        update_post_meta( $menu_item_db_id, '_menu_item_icon', $icon_value );
    } else {
        delete_post_meta( $menu_item_db_id, '_menu_item_icon' );
    }
}
add_action( 'wp_update_nav_menu_item', 'save_custom_menu_item_icon', 10, 3 );

/**
 * Registrar áreas de widgets (sidebars).
 */
function nw_avada_like_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Primary Sidebar', 'nw-avada-like' ),
			'id'            => 'primary-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in the primary sidebar.', 'nw-avada-like' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'nw_avada_like_widgets_init' );

// Opcional: incluir Customizer de URLs (placeholders de imagens das seções).
require_once get_template_directory() . '/inc/customizer-sections.php';

/**
 * Adiciona o código do Zoho SalesIQ em todas as páginas.
 * O script será carregado antes do fechamento da tag </body> em todas as páginas do site.
 *
 * @package nw-avada-like
 */
function add_zoho_salesiq_chat() {
	?>
	<script>
		window.$zoho = window.$zoho || {};
		window.$zoho.salesiq = window.$zoho.salesiq || { ready: function(){} };
	</script>
	<script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siqa01e98e0e2413c5570b3e09ffa6eb4310079f0f1da3f95679d62dd1ea6a52902" defer></script>
	<?php
}
add_action( 'wp_footer', 'add_zoho_salesiq_chat', 999 );

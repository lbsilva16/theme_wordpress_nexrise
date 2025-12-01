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

	// Newsletter integration script (loaded on all pages since footer is global)
	wp_enqueue_script(
		'nw-avada-like-newsletter',
		get_template_directory_uri() . '/assets/js/newsletter.js',
		[],
		$ver,
		true
	);

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

if ( ! function_exists( 'nexrise_cookie_consent_assets' ) ) {
	/**
	 * Injeta os estilos e scripts do banner de consentimento LGPD/GDPR/CCPA.
	 */
	function nexrise_cookie_consent_assets() {
		$privacy_policy_url = esc_url( home_url( '/privacy-policy/' ) );
		?>
		<style>
			#nexrise-cookie-consent {
				position: fixed;
				bottom: 0;
				left: 0;
				right: 0;
				background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
				color: #ffffff;
				padding: 0;
				z-index: 999999;
				box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
				transform: translateY(100%);
				transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
				will-change: transform;
			}
			#nexrise-cookie-consent.show {
				transform: translateY(0);
			}
			.cookie-consent-container {
				max-width: 1200px;
				margin: 0 auto;
				padding: 25px 30px;
				display: flex;
				align-items: center;
				justify-content: space-between;
				gap: 25px;
			}
			.cookie-consent-content {
				flex: 1;
				display: flex;
				align-items: center;
				gap: 20px;
			}
			.cookie-icon {
				width: 50px;
				height: 50px;
				background: rgba(255, 255, 255, 0.2);
				border-radius: 12px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-size: 24px;
				flex-shrink: 0;
				backdrop-filter: blur(10px);
			}
			.cookie-text {
				flex: 1;
			}
			.cookie-text h3 {
				margin: 0 0 8px 0;
				font-size: 18px;
				font-weight: 600;
				color: #ffffff;
				letter-spacing: -0.3px;
			}
			.cookie-text p {
				margin: 0;
				font-size: 14px;
				line-height: 1.6;
				color: rgba(255, 255, 255, 0.95);
				font-weight: 400;
			}
			.cookie-text a {
				color: #ffffff;
				text-decoration: underline;
				font-weight: 500;
				transition: opacity 0.2s;
			}
			.cookie-text a:hover {
				opacity: 0.8;
			}
			.cookie-buttons {
				display: flex;
				gap: 12px;
				flex-shrink: 0;
			}
			.cookie-btn {
				padding: 12px 28px;
				border: none;
				border-radius: 8px;
				font-size: 14px;
				font-weight: 600;
				cursor: pointer;
				transition: all 0.3s ease;
				white-space: nowrap;
				text-transform: uppercase;
				letter-spacing: 0.5px;
			}
			.cookie-btn-accept {
				background: #ffffff;
				color: #667eea;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
			}
			.cookie-btn-accept:hover {
				transform: translateY(-2px);
				box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
			}
			.cookie-btn-decline {
				background: transparent;
				color: #ffffff;
				border: 2px solid rgba(255, 255, 255, 0.5);
			}
			.cookie-btn-decline:hover {
				background: rgba(255, 255, 255, 0.1);
				border-color: #ffffff;
			}
			.cookie-btn-settings {
				background: rgba(255, 255, 255, 0.15);
				color: #ffffff;
				backdrop-filter: blur(10px);
			}
			.cookie-btn-settings:hover {
				background: rgba(255, 255, 255, 0.25);
			}
			@media (max-width: 968px) {
				.cookie-consent-container {
					flex-direction: column;
					align-items: stretch;
					padding: 20px;
				}
				.cookie-consent-content {
					flex-direction: column;
					text-align: center;
				}
				.cookie-buttons {
					flex-direction: column;
					width: 100%;
				}
				.cookie-btn {
					width: 100%;
					padding: 14px 20px;
				}
				.cookie-text h3 {
					font-size: 16px;
				}
				.cookie-text p {
					font-size: 13px;
				}
			}
			@media (max-width: 480px) {
				.cookie-icon {
					width: 40px;
					height: 40px;
					font-size: 20px;
				}
				.cookie-consent-container {
					padding: 15px;
				}
			}
		</style>
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const banner = document.getElementById('nexrise-cookie-consent');
				if (!banner) {
					return;
				}

				const acceptButton = document.getElementById('accept-cookies');
				const declineButton = document.getElementById('decline-cookies');
				const settingsButton = document.getElementById('cookie-settings');
				const userChoice = getCookie('nexrise_cookie_consent');
				const privacyPolicyUrl = '<?php echo $privacy_policy_url; ?>';

				if (!userChoice) {
					setTimeout(function () {
						banner.classList.add('show');
					}, 500);
				}

				if (acceptButton) {
					acceptButton.addEventListener('click', function () {
						setCookie('nexrise_cookie_consent', 'accepted', 365);
						hideBanner();
						enableTracking();
					});
				}

				if (declineButton) {
					declineButton.addEventListener('click', function () {
						setCookie('nexrise_cookie_consent', 'declined', 365);
						hideBanner();
						disableTracking();
					});
				}

				if (settingsButton) {
					settingsButton.addEventListener('click', function () {
						window.location.href = privacyPolicyUrl;
					});
				}

				function setCookie(name, value, days) {
					const date = new Date();
					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					const expires = 'expires=' + date.toUTCString();
					const secureFlag = window.location.protocol === 'https:' ? ';Secure' : '';
					document.cookie = name + '=' + value + ';' + expires + ';path=/;SameSite=Strict' + secureFlag;
				}

				function getCookie(name) {
					const nameEQ = name + '=';
					const ca = document.cookie.split(';');
					for (let i = 0; i < ca.length; i++) {
						let c = ca[i];
						while (c.charAt(0) === ' ') {
							c = c.substring(1, c.length);
						}
						if (c.indexOf(nameEQ) === 0) {
							return c.substring(nameEQ.length, c.length);
						}
					}
					return null;
				}

				function hideBanner() {
					banner.classList.remove('show');
					setTimeout(function () {
						banner.style.display = 'none';
					}, 400);
				}

				function enableTracking() {
					// Integre seus scripts de analytics aqui (Google Analytics, Meta Pixel etc.).
					if (typeof gtag === 'function') {
						gtag('consent', 'update', { analytics_storage: 'granted', ad_storage: 'granted' });
					}
				}

				function disableTracking() {
					if (typeof gtag === 'function') {
						gtag('consent', 'update', { analytics_storage: 'denied', ad_storage: 'denied' });
					}
				}
			});
		</script>
		<?php
	}
}

if ( ! function_exists( 'nexrise_cookie_consent_html' ) ) {
	/**
	 * HTML do banner de consentimento.
	 */
	function nexrise_cookie_consent_html() {
		$privacy_policy_url = esc_url( home_url( '/privacy-policy/' ) );
		?>
		<div id="nexrise-cookie-consent" aria-live="polite" role="region">
			<div class="cookie-consent-container">
				<div class="cookie-consent-content">
					<div class="cookie-icon" aria-hidden="true">🍪</div>
					<div class="cookie-text">
						<h3>We Value Your Privacy</h3>
						<p>
							We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.
							<a href="<?php echo $privacy_policy_url; ?>" target="_blank" rel="noopener noreferrer">Learn more</a>
						</p>
					</div>
				</div>
				<div class="cookie-buttons" role="group" aria-label="Cookie consent actions">
					<button id="accept-cookies" class="cookie-btn cookie-btn-accept" type="button">Accept All</button>
					<button id="decline-cookies" class="cookie-btn cookie-btn-decline" type="button">Decline</button>
					<button id="cookie-settings" class="cookie-btn cookie-btn-settings" type="button">Settings</button>
				</div>
			</div>
		</div>
		<?php
	}
}
add_action( 'wp_footer', 'nexrise_cookie_consent_html', 20 );
add_action( 'wp_footer', 'nexrise_cookie_consent_assets', 21 );

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

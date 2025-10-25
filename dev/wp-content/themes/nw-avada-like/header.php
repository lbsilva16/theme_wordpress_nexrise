<?php
/**
 * Cabecalho principal do tema.
 *
 * @package nw-avada-like
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Ir para o conteudo', 'nw-avada-like' ); ?></a>
<header class="global-header" data-header>
  <div class="section-wrapper global-header__inner">
    <div class="global-header__branding">
      <?php
      $custom_logo_markup = get_custom_logo();
      if ( $custom_logo_markup ) {
        echo str_replace( 'custom-logo-link', 'custom-logo-link global-header__logo', $custom_logo_markup ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      } else {
        ?>
        <a class="global-header__logo global-header__logo--image" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( 'https://gonexrise.com/wp-content/uploads/2025/10/NEXRISE-We-Build.-You-Rise.png' ); ?>" alt="<?php esc_attr_e( 'NEXRISE - We Build. You Rise.', 'nw-avada-like' ); ?>">
        </a>
        <?php
      }
      ?>
    </div>
    <button class="global-header__toggle" type="button" aria-controls="primary-nav" aria-expanded="false">
      <span class="global-header__toggle-box" aria-hidden="true"></span>
      <span class="visually-hidden"><?php esc_html_e( 'Abrir menu', 'nw-avada-like' ); ?></span>
    </button>
    <nav id="primary-nav" class="global-header__nav" aria-label="<?php esc_attr_e( 'Navegacao principal', 'nw-avada-like' ); ?>">
      <?php
      wp_nav_menu(
        [
          'theme_location' => 'primary',
          'menu_class'     => 'primary-nav__list',
          'container'      => false,
          'fallback_cb'    => 'nw_avada_like_fallback_menu',
          'depth'          => 3,
        ]
      );
      ?>
    </nav>
    <div class="global-header__actions">
      <a class="button button--ghost" href="#faq"><?php esc_html_e( 'FAQ', 'nw-avada-like' ); ?></a>
      <a class="button button--primary" href="https://wa.me/12813744411" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WhatsApp', 'nw-avada-like' ); ?></a>
    </div>
  </div>
</header>

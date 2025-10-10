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
      <a class="global-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <!-- ESPACO PARA O LOGO: Adicione sua imagem em /assets/images/logo.png -->
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php esc_attr_e( 'Logo do Site', 'nw-avada-like' ); ?>" />
      </a>
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
      <a class="button button--ghost" href="https://avada.com/my-account/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'My Avada', 'nw-avada-like' ); ?></a>
      <a class="button button--primary" href="https://avada.com/buy/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Buy Now', 'nw-avada-like' ); ?></a>
    </div>
  </div>
</header>

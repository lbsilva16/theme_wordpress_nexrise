<?php
/**
 * Template para paginas 404.
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
  <div class="section-wrapper not-found">
    <h1 class="not-found__title"><?php esc_html_e( 'Page not found', 'nw-avada-like' ); ?></h1>
    <p class="not-found__description">
      <?php esc_html_e( 'We could not find the page you were looking for. Try searching or go back to the homepage.', 'nw-avada-like' ); ?>
    </p>
    <div class="not-found__actions">
      <?php get_search_form(); ?>
      <a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'nw-avada-like' ); ?></a>
    </div>
  </div>
</main>
<?php
get_footer();

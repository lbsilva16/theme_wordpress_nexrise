<?php
/**
 * Template para exibir paginas.
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
  <div class="section-wrapper content-layout">
    <div class="content-layout__primary">
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'site-article site-article--page' ); ?>>
            <?php the_title( '<h1 class="site-article__title">', '</h1>' ); ?>

            <div class="site-article__content">
              <?php
              the_content();

              wp_link_pages(
                [
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nw-avada-like' ),
                  'after'  => '</div>',
                ]
              );
              ?>
            </div>
          </article>

          <?php
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      else :
        ?>
        <p><?php esc_html_e( 'No content found.', 'nw-avada-like' ); ?></p>
        <?php
      endif;
      ?>
    </div>

    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
      <div class="content-layout__sidebar">
        <?php get_sidebar(); ?>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php
get_footer();

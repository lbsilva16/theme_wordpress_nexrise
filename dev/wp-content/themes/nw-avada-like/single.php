<?php
/**
 * Template para exibir posts individuais.
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
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'site-article' ); ?>>
            <header class="site-article__header">
              <?php the_title( '<h1 class="site-article__title">', '</h1>' ); ?>
              <div class="site-article__meta">
                <span class="site-article__meta-item">
                  <?php
                  printf(
                    /* translators: %s: publish date. */
                    esc_html__( 'Published on %s', 'nw-avada-like' ),
                    esc_html( get_the_date() )
                  );
                  ?>
                </span>
                <span class="site-article__meta-item">
                  <?php
                  printf(
                    /* translators: %s: author name. */
                    esc_html__( 'by %s', 'nw-avada-like' ),
                    esc_html( get_the_author() )
                  );
                  ?>
                </span>
              </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
              <figure class="site-article__thumbnail">
                <?php the_post_thumbnail( 'large' ); ?>
              </figure>
            <?php endif; ?>

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

            <footer class="site-article__footer">
              <?php
              the_tags(
                '<div class="site-article__tags"><span class="site-article__tag-label">' . esc_html__( 'Tags:', 'nw-avada-like' ) . '</span> ',
                ' ',
                '</div>'
              );
              ?>
            </footer>
          </article>

          <?php
          the_post_navigation(
            [
              'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'nw-avada-like' ) . '</span> <span class="nav-title">%title</span>',
              'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'nw-avada-like' ) . '</span> <span class="nav-title">%title</span>',
            ]
          );

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

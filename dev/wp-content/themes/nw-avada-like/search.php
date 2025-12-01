<?php
/**
 * Template para resultados de busca.
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
  <div class="section-wrapper content-layout">
    <div class="content-layout__primary">
      <header class="search-header">
        <h1 class="search-title">
          <?php
          printf(
            /* translators: %s: search query. */
            esc_html__( 'Search results for "%s"', 'nw-avada-like' ),
            esc_html( get_search_query() )
          );
          ?>
        </h1>
      </header>

      <?php if ( have_posts() ) : ?>
        <div class="search-results">
          <?php
          while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result' ); ?>>
              <?php the_title( '<h2 class="search-result__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
              <div class="search-result__excerpt">
                <?php the_excerpt(); ?>
              </div>
            </article>
            <?php
          endwhile;
          ?>
        </div>

        <?php
        the_posts_pagination(
          [
            'mid_size'  => 2,
            'prev_text' => esc_html__( 'Previous', 'nw-avada-like' ),
            'next_text' => esc_html__( 'Next', 'nw-avada-like' ),
          ]
        );
      else :
        ?>
        <div class="search-no-results">
          <p><?php esc_html_e( 'Sorry, no results matched your search.', 'nw-avada-like' ); ?></p>
          <?php get_search_form(); ?>
        </div>
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

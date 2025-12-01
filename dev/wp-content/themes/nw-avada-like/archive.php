<?php
/**
 * Template para arquivos (categorias, tags, autor, etc).
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
  <div class="section-wrapper content-layout">
    <div class="content-layout__primary">
      <header class="archive-header">
        <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
      </header>

      <?php if ( have_posts() ) : ?>
        <div class="archive-posts">
          <?php
          while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-post' ); ?>>
              <?php the_title( '<h2 class="archive-post__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

              <div class="archive-post__meta">
                <span class="archive-post__meta-item"><?php echo esc_html( get_the_date() ); ?></span>
                <span class="archive-post__meta-item"><?php echo esc_html( get_the_author() ); ?></span>
              </div>

              <div class="archive-post__excerpt">
                <?php the_excerpt(); ?>
              </div>

              <a class="archive-post__read-more" href="<?php the_permalink(); ?>">
                <?php esc_html_e( 'Continue reading', 'nw-avada-like' ); ?>
              </a>
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
        <p><?php esc_html_e( 'No posts available.', 'nw-avada-like' ); ?></p>
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

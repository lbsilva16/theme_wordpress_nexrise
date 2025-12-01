<?php
/**
 * Main template file.
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
	<div class="site-main__inner">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( is_singular() ) : ?>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php else : ?>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
						<?php endif; ?>
						<div class="entry-meta">
							<?php nw_avada_like_posted_on(); ?>
							<?php nw_avada_like_posted_by(); ?>
						</div>
					</header>

					<div class="entry-content">
						<?php
							if ( is_singular() ) {
								the_content();
								wp_link_pages(
									[
										'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'nw-avada-like' ) . '">',
										'after'  => '</nav>',
									]
								);
							} else {
								the_excerpt();
							}
						?>
					</div>
				</article>
			<?php endwhile; ?>

			<?php the_posts_pagination(
				[
					'mid_size'  => 1,
					'prev_text' => esc_html__( 'Previous', 'nw-avada-like' ),
					'next_text' => esc_html__( 'Next', 'nw-avada-like' ),
				]
			); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts found.', 'nw-avada-like' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

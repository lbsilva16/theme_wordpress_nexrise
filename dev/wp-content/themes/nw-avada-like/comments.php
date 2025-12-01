<?php
/**
 * Template de comentarios.
 *
 * @package nw-avada-like
 */

if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = absint( get_comments_number() );
			if ( 1 === $comments_number ) {
				printf(
					/* translators: %s: post title. */
					esc_html__( 'One comment on "%s"', 'nw-avada-like' ),
					esc_html( get_the_title() )
				);
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title. */
					esc_html( _nx( '%1$s comment on "%2$s"', '%1$s comments on "%2$s"', $comments_number, 'comments title', 'nw-avada-like' ) ),
					number_format_i18n( $comments_number ),
					esc_html( get_the_title() )
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				[
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 48,
				]
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			[
				'prev_text' => esc_html__( 'Previous', 'nw-avada-like' ),
				'next_text' => esc_html__( 'Next', 'nw-avada-like' ),
			]
		);
	endif;

	if ( ! comments_open() && get_comments_number() ) :
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nw-avada-like' ); ?></p>
		<?php
	endif;

	comment_form();
	?>
</div>

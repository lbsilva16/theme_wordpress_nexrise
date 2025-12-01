<?php
/**
 * Template helper tags.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nw_avada_like_posted_on' ) ) {
	/**
	 * Print the post date wrapped in a link.
	 */
	function nw_avada_like_posted_on(): void {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			__( 'Posted on %s', 'nw-avada-like' ),
			'<a href="' . esc_url( get_permalink() ) . '">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . wp_kses_post( $posted_on ) . '</span>';
	}
}

if ( ! function_exists( 'nw_avada_like_posted_by' ) ) {
	/**
	 * Print the author name linked to archive.
	 */
	function nw_avada_like_posted_by(): void {
		$byline = sprintf(
			/* translators: %s: author name. */
			__( 'by %s', 'nw-avada-like' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline">' . wp_kses_post( $byline ) . '</span>';
	}
}

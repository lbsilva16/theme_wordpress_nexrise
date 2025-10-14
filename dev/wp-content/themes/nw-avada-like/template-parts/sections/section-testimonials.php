<?php
/**
 * Testimonials section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$testimonials = [
	[
		'quote'  => __( '“They treated our launch like it was their own product. Messaging, UX, automations—everything was dialed in.”', 'nw-avada-like' ),
		'author' => __( 'Michael D. Harris, Managing Partner, Whitman & Associates', 'nw-avada-like' ),
	],
	[
		'quote'  => __( '“We saw checkout conversion jump within the first week. Their team shipped fast and caught issues before we did.”', 'nw-avada-like' ),
		'author' => __( 'Jenna Ruiz, Founder, Oak & Ember', 'nw-avada-like' ),
	],
	[
		'quote'  => __( '“Our sales reps finally have a site they can send prospects to. Lead quality is way up.”', 'nw-avada-like' ),
		'author' => __( 'Andre Phillips, COO, Miller Air & Heating', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section" id="testimonials" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Clients Talk About the Lift They See', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'Real stories from founders, marketers, and operators who needed a revenue-ready WordPress build.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-grid nx-grid--3">
			<?php foreach ( $testimonials as $testimonial ) : ?>
				<figure class="nx-card">
					<blockquote>
						<p><?php echo esc_html( $testimonial['quote'] ); ?></p>
					</blockquote>
					<figcaption class="nx-quote-author"><?php echo esc_html( $testimonial['author'] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

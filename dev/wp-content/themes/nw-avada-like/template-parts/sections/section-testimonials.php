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
		'quote'  => '&ldquo;They nailed the messaging and the site loads fast. Consultations jumped right after launch.&rdquo;',
		'author' => 'Michael D. Harris, Esq.',
	],
	[
		'quote'  => '&ldquo;Mobile checkout finally feels smooth. Sales are up and support is responsive.&rdquo;',
		'author' => 'Oak & Ember',
	],
];
?>
<section class="nx-section nx-section--testimonials" id="testimonials" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">What Clients Say</h2>
		</header>
		<div class="nx-testimonial-grid">
			<?php foreach ( $testimonials as $testimonial ) : ?>
				<figure class="nx-testimonial">
					<blockquote class="nx-testimonial__quote">
						<p><?php echo wp_kses_post( $testimonial['quote'] ); ?></p>
					</blockquote>
					<figcaption class="nx-testimonial__author"><?php echo esc_html( $testimonial['author'] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

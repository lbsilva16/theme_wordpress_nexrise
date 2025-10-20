<?php
/**
 * Testimonials section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="testimonials" class="nx-section nx-section--testimonials" style="scroll-margin-top: 96px;">
	<div class="nx-tst" data-nx-testimonials>
		<div class="nx-tst__shapes" aria-hidden="true">
			<span class="nx-tst__shape nx-tst__shape--1"></span>
			<span class="nx-tst__shape nx-tst__shape--2"></span>
			<span class="nx-tst__shape nx-tst__shape--3"></span>
		</div>
		<div class="nx-container">
			<header class="nx-tst__header reveal">
				<span class="nx-kicker nx-tst__badge"><?php esc_html_e( 'Testimonials', 'nw-avada-like' ); ?></span>
				<h2 class="nx-h2 nx-tst__title"><?php esc_html_e( 'What Our Clients Say About Working With NexRise', 'nw-avada-like' ); ?></h2>
			</header>

			<div class="nx-tst__carousel" data-nx-testimonials-viewport>
				<div class="nx-tst__track" data-nx-testimonials-track role="list" aria-live="polite">
					<article class="nx-tst__card nx-card" data-nx-testimonials-card id="testimonial-slide-1" role="group" aria-roledescription="<?php esc_attr_e( 'slide', 'nw-avada-like' ); ?>" aria-label="<?php esc_attr_e( '1 of 3', 'nw-avada-like' ); ?>" aria-hidden="false">
						<span class="nx-tst__quote-icon" aria-hidden="true"></span>
						<blockquote class="nx-tst__quote">
							<p><?php esc_html_e( '"They treated our launch like it was their own product. Messaging, UX, automations - everything was dialed in."', 'nw-avada-like' ); ?></p>
						</blockquote>
						<footer class="nx-tst__client">
							<span class="nx-tst__client-name"><?php esc_html_e( 'Michael D. Harris', 'nw-avada-like' ); ?></span>
							<span class="nx-tst__client-title"><?php esc_html_e( 'Managing Partner, Whitman & Associates', 'nw-avada-like' ); ?></span>
						</footer>
					</article>

					<article class="nx-tst__card nx-card" data-nx-testimonials-card id="testimonial-slide-2" role="group" aria-roledescription="<?php esc_attr_e( 'slide', 'nw-avada-like' ); ?>" aria-label="<?php esc_attr_e( '2 of 3', 'nw-avada-like' ); ?>" aria-hidden="true">
						<span class="nx-tst__quote-icon" aria-hidden="true"></span>
						<blockquote class="nx-tst__quote">
							<p><?php esc_html_e( '"We saw checkout conversion jump within the first week. Their team shipped fast and caught issues before we did."', 'nw-avada-like' ); ?></p>
						</blockquote>
						<footer class="nx-tst__client">
							<span class="nx-tst__client-name"><?php esc_html_e( 'Jenna Ruiz', 'nw-avada-like' ); ?></span>
							<span class="nx-tst__client-title"><?php esc_html_e( 'Founder, Oak & Ember', 'nw-avada-like' ); ?></span>
						</footer>
					</article>

					<article class="nx-tst__card nx-card" data-nx-testimonials-card id="testimonial-slide-3" role="group" aria-roledescription="<?php esc_attr_e( 'slide', 'nw-avada-like' ); ?>" aria-label="<?php esc_attr_e( '3 of 3', 'nw-avada-like' ); ?>" aria-hidden="true">
						<span class="nx-tst__quote-icon" aria-hidden="true"></span>
						<blockquote class="nx-tst__quote">
							<p><?php esc_html_e( '"Our sales reps finally have a site they can send prospects to. Lead quality is way up."', 'nw-avada-like' ); ?></p>
						</blockquote>
						<footer class="nx-tst__client">
							<span class="nx-tst__client-name"><?php esc_html_e( 'Andre Phillips', 'nw-avada-like' ); ?></span>
							<span class="nx-tst__client-title"><?php esc_html_e( 'COO, Miller Air & Heating', 'nw-avada-like' ); ?></span>
						</footer>
					</article>
				</div>
			</div>

			<nav class="nx-tst__nav" aria-label="<?php esc_attr_e( 'Testimonials navigation', 'nw-avada-like' ); ?>">
				<button type="button" class="nx-tst__button" data-nx-testimonials-prev aria-label="<?php esc_attr_e( 'Show previous testimonials', 'nw-avada-like' ); ?>">&lsaquo;</button>
				<div class="nx-tst__dots" role="tablist">
					<button type="button" class="nx-tst__dot is-active" data-nx-testimonials-dot data-index="0" role="tab" aria-selected="true" aria-controls="testimonial-slide-1">
						<span class="sr-only"><?php esc_html_e( 'Go to testimonial 1', 'nw-avada-like' ); ?></span>
					</button>
					<button type="button" class="nx-tst__dot" data-nx-testimonials-dot data-index="1" role="tab" aria-selected="false" aria-controls="testimonial-slide-2">
						<span class="sr-only"><?php esc_html_e( 'Go to testimonial 2', 'nw-avada-like' ); ?></span>
					</button>
					<button type="button" class="nx-tst__dot" data-nx-testimonials-dot data-index="2" role="tab" aria-selected="false" aria-controls="testimonial-slide-3">
						<span class="sr-only"><?php esc_html_e( 'Go to testimonial 3', 'nw-avada-like' ); ?></span>
					</button>
				</div>
				<button type="button" class="nx-tst__button" data-nx-testimonials-next aria-label="<?php esc_attr_e( 'Show next testimonials', 'nw-avada-like' ); ?>">&rsaquo;</button>
			</nav>
		</div>
	</div>
</section>

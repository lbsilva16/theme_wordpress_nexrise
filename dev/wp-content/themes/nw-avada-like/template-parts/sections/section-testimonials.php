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
<section id="testimonials" class="nx-section" style="scroll-margin-top: 96px;">
	<div class="nx-container" data-nx-slider>
		<span class="nx-kicker"><?php esc_html_e( 'Testimonials', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Clients Talk About the Lift They See', 'nw-avada-like' ); ?></h2>

		<div class="nx-slider reveal">
			<div class="nx-slider__track">
				<div class="nx-quote nx-card">
					<blockquote>
						<p><?php esc_html_e( '"They treated our launch like it was their own product. Messaging, UX, automations - everything was dialed in."', 'nw-avada-like' ); ?></p>
						<p><strong><?php esc_html_e( 'Michael D. Harris, Managing Partner, Whitman & Associates', 'nw-avada-like' ); ?></strong></p>
					</blockquote>
				</div>
				<div class="nx-quote nx-card">
					<blockquote>
						<p><?php esc_html_e( '"We saw checkout conversion jump within the first week. Their team shipped fast and caught issues before we did."', 'nw-avada-like' ); ?></p>
						<p><strong><?php esc_html_e( 'Jenna Ruiz, Founder, Oak & Ember', 'nw-avada-like' ); ?></strong></p>
					</blockquote>
				</div>
				<div class="nx-quote nx-card">
					<blockquote>
						<p><?php esc_html_e( '"Our sales reps finally have a site they can send prospects to. Lead quality is way up."', 'nw-avada-like' ); ?></p>
						<p><strong><?php esc_html_e( 'Andre Phillips, COO, Miller Air & Heating', 'nw-avada-like' ); ?></strong></p>
					</blockquote>
				</div>
			</div>
			<div class="nx-slider__nav" role="tablist" aria-label="<?php esc_attr_e( 'Testimonials navigation', 'nw-avada-like' ); ?>">
				<span class="nx-dot" role="tab" aria-selected="true" aria-controls="testimonial-slide-1"></span>
				<span class="nx-dot" role="tab" aria-selected="false" aria-controls="testimonial-slide-2"></span>
				<span class="nx-dot" role="tab" aria-selected="false" aria-controls="testimonial-slide-3"></span>
			</div>
		</div>
	</div>
</section>

<?php
/**
 * Final CTA section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="nx-section nx-section--final-cta" id="final-cta" style="scroll-margin-top: 100px;">
	<span id="cta-final" class="nx-section__anchor" aria-hidden="true"></span>
	<div class="nx-section__inner">
		<div class="nx-section__content">
			<header class="nx-section__header">
				<h2 class="nx-section__title">Ready to Build Something That Performs?</h2>
				<p class="nx-section__lead">Get a free site plan and quote tailored to your goals.</p>
			</header>
			<div class="nx-section__actions">
				<a class="nx-btn nx-btn--primary" href="#final-cta">Book a Call</a>
				<a class="nx-btn nx-btn--ghost" href="#final-cta">Request a Quote</a>
			</div>
			<p class="nx-section__contact">
				<span class="nx-section__contact-phone">(310) 555-7842</span>
				<span class="nx-section__contact-divider" aria-hidden="true">&middot;</span>
				<span class="nx-section__contact-hours">Mon&ndash;Fri, 9am&ndash;5pm PT</span>
			</p>
		</div>
		<div class="nx-section__media">
			<?php
			if ( function_exists( 'nx_render_section_image' ) ) {
				nx_render_section_image(
					'nx_img_final_cta_mockup',
					'Final call-to-action mockup',
					[
						'class'      => 'nx-section__image',
						'width'      => 960,
						'height'     => 720,
						'min_height' => 320,
					]
				);
			}
			?>
		</div>
	</div>
</section>

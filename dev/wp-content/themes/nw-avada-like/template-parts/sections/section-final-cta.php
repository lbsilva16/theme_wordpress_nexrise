<?php
/**
 * Final CTA section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$highlights = [
	__( 'Free roadmap call with a senior strategist.', 'nw-avada-like' ),
	__( 'Custom scope, investment, and timeline within 48 hours.', 'nw-avada-like' ),
	__( 'No-pressure engagement—keep the plan even if you pass.', 'nw-avada-like' ),
];
?>
<section class="nx-section" id="final-cta" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="nx-grid nx-grid--2">
			<div>
				<header class="nx-section__header">
					<h2 class="nx-h2"><?php esc_html_e( 'Ready to Launch a Revenue-Ready WordPress Site?', 'nw-avada-like' ); ?></h2>
					<p class="nx-lead"><?php esc_html_e( 'Book a strategy call and get a tailored plan covering scope, deliverables, and investment.', 'nw-avada-like' ); ?></p>
				</header>
				<ul class="nx-bullets">
					<?php foreach ( $highlights as $highlight ) : ?>
						<li><?php echo esc_html( $highlight ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="nx-actions">
					<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Schedule My Strategy Call', 'nw-avada-like' ); ?></a>
					<a class="nx-btn nx-btn--ghost" href="#faq"><?php esc_html_e( 'Review FAQs', 'nw-avada-like' ); ?></a>
				</div>
				<p class="nx-note">
					<?php
					printf(
						/* translators: 1: phone number, 2: office hours */
						esc_html__( 'Prefer email or phone? Call %1$s or message us anytime %2$s.', 'nw-avada-like' ),
						'(310) 555-7842',
						'Mon–Fri, 9am–5pm PT'
					);
					?>
				</p>
			</div>
			<div>
				<?php
				if ( function_exists( 'nx_render_section_image' ) ) {
					nx_render_section_image(
						'nx_img_final_cta_mockup',
						__( 'Website mockup and meeting agenda preview', 'nw-avada-like' ),
						[
							'class'      => '',
							'width'      => 1200,
							'height'     => 900,
							'min_height' => 360,
						]
					);
				}
				?>
			</div>
		</div>
	</div>
</section>
<div class="nx-sticky-cta">
	<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Get My Site Plan', 'nw-avada-like' ); ?></a>
</div>

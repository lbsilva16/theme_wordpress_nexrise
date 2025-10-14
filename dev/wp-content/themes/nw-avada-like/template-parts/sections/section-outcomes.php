<?php
/**
 * Outcomes section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stats = [
	[
		'value' => '+38%',
		'text'  => __( 'average increase in leads within 60 days', 'nw-avada-like' ),
	],
	[
		'value' => '90+',
		'text'  => __( 'Lighthouse Performance on key pages', 'nw-avada-like' ),
	],
	[
		'value' => '< 2.5s',
		'text'  => __( 'LCP on modern hosting', 'nw-avada-like' ),
	],
];
?>
<section id="outcomes" class="nx-section" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'Outcomes', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Outcomes You Can Report Back On', 'nw-avada-like' ); ?></h2>

		<div class="nx-grid nx-grid--2" style="align-items:center">
			<div class="reveal">
				<div class="nx-grid" style="grid-template-columns:repeat(3,1fr);gap:16px">
					<?php foreach ( $stats as $stat ) : ?>
						<div class="nx-card--grad">
							<div class="nx-card__inner">
								<div style="font-size:26px;font-weight:800"><?php echo esc_html( $stat['value'] ); ?></div>
								<div class="nx-lead" style="margin-top:6px"><?php echo esc_html( $stat['text'] ); ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<p class="nx-lead" style="margin-top:12px;color:#64748b"><?php esc_html_e( 'Results vary by niche and traffic. We align targets with you before kickoff.', 'nw-avada-like' ); ?></p>
				<div style="margin-top:16px;display:flex;gap:12px;flex-wrap:wrap">
					<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Get a Free Site Plan', 'nw-avada-like' ); ?></a>
					<a class="nx-btn nx-btn--ghost" href="#final-cta"><?php esc_html_e( 'See How We Measure', 'nw-avada-like' ); ?></a>
				</div>
			</div>
			<figure class="reveal" style="margin:0">
				<?php
				if ( function_exists( 'nx_render_section_image' ) ) {
					nx_render_section_image(
						'nx_img_performance_dashboard',
						__( 'Performance dashboard', 'nw-avada-like' ),
						[
							'class'      => '',
							'width'      => 1200,
							'height'     => 800,
							'min_height' => 320,
						]
					);
				}
				?>
			</figure>
		</div>
	</div>
</section>

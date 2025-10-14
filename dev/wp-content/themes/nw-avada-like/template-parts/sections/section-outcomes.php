<?php
/**
 * Outcomes section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$benefits = [
	__( 'Launch-ready pages tuned for lead capture and direct response.', 'nw-avada-like' ),
	__( 'Technical SEO foundations: clean architecture, schema, and redirects.', 'nw-avada-like' ),
	__( 'WCAG-conscious layouts that stay accessible on every device.', 'nw-avada-like' ),
	__( 'Analytics, CRM, and marketing stack integrations mapped before launch.', 'nw-avada-like' ),
];

$metrics = [
	[
		'stat' => __( '+52% avg. uplift', 'nw-avada-like' ),
		'copy' => __( 'Measured increase in qualified leads across recent builds.', 'nw-avada-like' ),
	],
	[
		'stat' => __( '<2.5s load time', 'nw-avada-like' ),
		'copy' => __( 'Core Web Vitals in the green on mobile and desktop.', 'nw-avada-like' ),
	],
	[
		'stat' => __( '2–5 week turnaround', 'nw-avada-like' ),
		'copy' => __( 'From kickoff to final QA for most WordPress engagements.', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section nx-section--soft" id="outcomes" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="nx-grid nx-grid--2">
			<div>
				<header class="nx-section__header">
					<h2 class="nx-h2"><?php esc_html_e( 'Outcomes You Can Report Back On', 'nw-avada-like' ); ?></h2>
					<p class="nx-lead"><?php esc_html_e( 'Strategy, design, and engineering come together so your site performs from day one.', 'nw-avada-like' ); ?></p>
				</header>
				<div class="nx-grid nx-grid--3">
					<?php foreach ( $metrics as $metric ) : ?>
						<div class="nx-card">
							<strong><?php echo esc_html( $metric['stat'] ); ?></strong>
							<p><?php echo esc_html( $metric['copy'] ); ?></p>
						</div>
					<?php endforeach; ?>
				</div>
				<ul class="nx-bullets nx-bullets--spaced">
					<?php foreach ( $benefits as $benefit ) : ?>
						<li><?php echo esc_html( $benefit ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="nx-actions">
					<a class="nx-btn nx-btn--primary" href="#packages"><?php esc_html_e( 'See Packages', 'nw-avada-like' ); ?></a>
					<a class="nx-btn nx-btn--ghost" href="#process"><?php esc_html_e( 'Review Our Process', 'nw-avada-like' ); ?></a>
				</div>
			</div>
			<div>
				<?php
				if ( function_exists( 'nx_render_section_image' ) ) {
					nx_render_section_image(
						'nx_img_performance_dashboard',
						__( 'Analytics dashboard showing launch results', 'nw-avada-like' ),
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

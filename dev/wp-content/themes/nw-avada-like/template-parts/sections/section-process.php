<?php
/**
 * Process section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$steps = [
	[
		'title'       => __( 'Discovery & Roadmap', 'nw-avada-like' ),
		'description' => __( 'We review goals, analytics, and current assets, then deliver a sitemap, conversion plan, and success metrics.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'UX, Copy, & Visual Design', 'nw-avada-like' ),
		'description' => __( 'High-fidelity layouts with persuasive messaging, proof blocks, and content direction ready for review.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Build, Integrate, & Automate', 'nw-avada-like' ),
		'description' => __( 'WordPress or WooCommerce build-out with CRM, marketing automation, payments, and analytics wired in.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Launch, QA, & Optimize', 'nw-avada-like' ),
		'description' => __( 'Performance tuning, accessibility checks, redirect mapping, and an optimization roadmap for the next 90 days.', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section" id="process" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="nx-grid nx-grid--2">
			<div>
				<header class="nx-section__header">
					<h2 class="nx-h2"><?php esc_html_e( 'Process: Fast, Transparent, No Guesswork', 'nw-avada-like' ); ?></h2>
					<p class="nx-lead"><?php esc_html_e( 'Every phase is documented in ClickUp so you always know status, owner, and next deliverable.', 'nw-avada-like' ); ?></p>
				</header>
				<div class="nx-steps">
					<?php foreach ( $steps as $step ) : ?>
						<article class="nx-step">
							<h3><?php echo esc_html( $step['title'] ); ?></h3>
							<p><?php echo esc_html( $step['description'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
				<p class="nx-note"><?php esc_html_e( 'Typical timeline: 2–5 weeks depending on complexity.', 'nw-avada-like' ); ?></p>
				<div class="nx-actions">
					<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Book a 15-Minute Intro Call', 'nw-avada-like' ); ?></a>
					<a class="nx-btn nx-btn--ghost" href="#packages"><?php esc_html_e( 'Compare Packages', 'nw-avada-like' ); ?></a>
				</div>
			</div>
			<div>
				<?php
				if ( function_exists( 'nx_render_section_image' ) ) {
					nx_render_section_image(
						'nx_img_process_visual',
						__( 'Timeline and workflow visual', 'nw-avada-like' ),
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

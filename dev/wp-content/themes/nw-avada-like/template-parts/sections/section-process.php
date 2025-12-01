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
		'title' => __( 'Discovery & Site Plan', 'nw-avada-like' ),
		'copy'  => __( 'Goals, sitemap, wireframe, estimate.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Design & Copy', 'nw-avada-like' ),
		'copy'  => __( 'On-brand UI, persuasive messaging, review and approve.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Build & Integrations', 'nw-avada-like' ),
		'copy'  => __( 'WordPress or WooCommerce, payments, CRM, analytics.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Launch & Optimize', 'nw-avada-like' ),
		'copy'  => __( 'QA, redirects, performance, training, A/B roadmap.', 'nw-avada-like' ),
	],
];
?>
<section id="process" class="nx-section" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'Process', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Process: Fast, Transparent, No Guesswork', 'nw-avada-like' ); ?></h2>
		<div class="nx-steps nx-steps--line" style="margin-top:20px">
			<?php foreach ( $steps as $step ) : ?>
				<div class="nx-step reveal">
					<strong><?php echo esc_html( $step['title'] ); ?></strong><br>
					<?php echo esc_html( $step['copy'] ); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<p class="nx-lead" style="margin-top:10px">
			<?php esc_html_e( 'Typical timeline: 2-5 weeks.', 'nw-avada-like' ); ?>
		</p>
		<div style="margin-top:16px">
			<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Book a 15-Minute Intro Call', 'nw-avada-like' ); ?></a>
		</div>
	</div>
</section>

<?php
/**
 * Why Choose Us section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reasons = [
	[
		'title'       => __( 'Conversion Roadmaps', 'nw-avada-like' ),
		'description' => __( 'We audit your funnel, define success metrics, and align stakeholders before design begins.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Revenue-Ready UI', 'nw-avada-like' ),
		'description' => __( 'Premium layouts, persuasive copy blocks, and frictionless CTAs built to turn visitors into buyers.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Technical Excellence', 'nw-avada-like' ),
		'description' => __( 'Core Web Vitals, schema markup, ADA-conscious components, and scalable WordPress architecture.', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Trusted Partnership', 'nw-avada-like' ),
		'description' => __( 'Documentation, team training, and ongoing support so you stay confident post-launch.', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section" id="why-choose-us" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Why Growth-Focused Teams Choose NexRise', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'You get a site engineered to convert leads, load fast, and scale without stress.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-grid nx-grid--2">
			<?php foreach ( $reasons as $reason ) : ?>
				<article class="nx-card nx-card--hover">
					<h3><?php echo esc_html( $reason['title'] ); ?></h3>
					<p><?php echo esc_html( $reason['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

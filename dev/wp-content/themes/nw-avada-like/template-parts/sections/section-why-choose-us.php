<?php
/**
 * Why Choose Us section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cards = [
	[
		'title' => __( 'Strategy First', 'nw-avada-like' ),
		'copy'  => __( 'Clear sitemap, persuasive messaging, and conversion flows.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Conversion Design', 'nw-avada-like' ),
		'copy'  => __( 'On-brand UI, strong CTAs, proof blocks, and offer clarity.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Speed & SEO', 'nw-avada-like' ),
		'copy'  => __( 'Core Web Vitals, clean markup, schema, and fast hosting setup.', 'nw-avada-like' ),
	],
];
?>
<section id="why-choose-us" class="nx-section nx-section--aura" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'Why choose us', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Why Growth-Focused Teams Choose NexRise', 'nw-avada-like' ); ?></h2>
		<p class="nx-lead"><?php esc_html_e( 'Strategy, conversion design, performance, and long-term support in one partner.', 'nw-avada-like' ); ?></p>

		<div class="nx-grid nx-grid--3" style="margin-top:24px">
			<?php foreach ( $cards as $card ) : ?>
				<div class="nx-card nx-card--hover reveal">
					<h3 style="margin:0 0 8px"><?php echo esc_html( $card['title'] ); ?></h3>
					<p class="nx-lead" style="margin:0"><?php echo esc_html( $card['copy'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

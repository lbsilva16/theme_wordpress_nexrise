<?php
/**
 * Portfolio section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$items = [
	[
		'field' => 'nx_img_portfolio_1',
		'label' => __( 'Whitman & Associates (Law) - +52% consultation requests', 'nw-avada-like' ),
	],
	[
		'field' => 'nx_img_portfolio_2',
		'label' => __( 'Miller Air & Heating (HVAC) - +31% booked service calls', 'nw-avada-like' ),
	],
	[
		'field' => 'nx_img_portfolio_3',
		'label' => __( 'Oak & Ember (Home Goods) - +24% checkout completion', 'nw-avada-like' ),
	],
	[
		'field' => 'nx_img_portfolio_4',
		'label' => __( 'BlueFin Fitness (Services) - 2.1x lead volume from paid traffic', 'nw-avada-like' ),
	],
];
?>
<section id="portfolio" class="nx-section nx-section--soft" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'Recent work', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Recent Launches Driving Real Revenue', 'nw-avada-like' ); ?></h2>

		<div class="nx-portfolio" style="margin-top:20px">
			<?php foreach ( $items as $item ) : ?>
				<div class="item reveal">
					<?php
					if ( function_exists( 'nx_render_section_image' ) ) {
						nx_render_section_image(
							$item['field'],
							__( 'Project preview', 'nw-avada-like' ),
							[
								'class'      => '',
								'width'      => 800,
								'height'     => 600,
								'min_height' => 260,
							]
						);
					}
					?>
					<div class="cap nx-glass"><?php echo esc_html( $item['label'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>

		<div style="margin-top:20px">
			<a class="nx-btn nx-btn--ghost" href="#final-cta"><?php esc_html_e( 'See more live sites', 'nw-avada-like' ); ?></a>
		</div>
	</div>
</section>

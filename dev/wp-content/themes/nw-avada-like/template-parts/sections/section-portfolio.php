<?php
/**
 * Portfolio section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$projects = [
	[
		'heading'     => 'Whitman & Associates (Law) &mdash; +52% consultation requests',
		'image_field' => 'nx_img_portfolio_1',
		'alt'         => 'Whitman & Associates website preview',
	],
	[
		'heading'     => 'Miller Air & Heating (HVAC) &mdash; +31% booked service calls',
		'image_field' => 'nx_img_portfolio_2',
		'alt'         => 'Miller Air & Heating website preview',
	],
	[
		'heading'     => 'Oak & Ember (Home Goods) &mdash; +24% checkout completion',
		'image_field' => 'nx_img_portfolio_3',
		'alt'         => 'Oak & Ember ecommerce website preview',
	],
	[
		'heading'     => 'BlueFin Fitness (Services) &mdash; 2.1&times; lead volume from paid traffic',
		'image_field' => 'nx_img_portfolio_4',
		'alt'         => 'BlueFin Fitness website preview',
	],
];
?>
<section class="nx-section nx-section--portfolio" id="portfolio-showcase" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Recent Work</h2>
		</header>
		<div class="nx-card-grid nx-card-grid--portfolio">
			<?php foreach ( $projects as $project ) : ?>
				<article class="nx-card nx-card--project">
					<div class="nx-card__media">
						<?php
						if ( function_exists( 'nx_render_section_image' ) ) {
							nx_render_section_image(
								$project['image_field'],
								$project['alt'],
								[
									'class'      => 'nx-card__image',
									'width'      => 960,
									'height'     => 640,
									'min_height' => 320,
								]
							);
						}
						?>
					</div>
					<div class="nx-card__body">
						<h3 class="nx-card__title"><?php echo wp_kses_post( $project['heading'] ); ?></h3>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="nx-section__actions">
			<a class="nx-btn nx-btn--primary" href="#final-cta">View Portfolio</a>
		</div>
	</div>
</section>

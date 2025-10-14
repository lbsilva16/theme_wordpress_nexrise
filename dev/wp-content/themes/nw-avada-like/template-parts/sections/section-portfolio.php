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
		'title'       => __( 'Whitman & Associates', 'nw-avada-like' ),
		'result'      => __( '+52% consultation requests', 'nw-avada-like' ),
		'category'    => __( 'Law Firm Website', 'nw-avada-like' ),
		'image_field' => 'nx_img_portfolio_1',
		'alt'         => __( 'Whitman & Associates website mockup', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Miller Air & Heating', 'nw-avada-like' ),
		'result'      => __( '+31% booked service calls', 'nw-avada-like' ),
		'category'    => __( 'HVAC Lead Gen', 'nw-avada-like' ),
		'image_field' => 'nx_img_portfolio_2',
		'alt'         => __( 'Miller Air & Heating landing page mockup', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'Oak & Ember', 'nw-avada-like' ),
		'result'      => __( '+24% checkout completion', 'nw-avada-like' ),
		'category'    => __( 'Direct-to-Consumer eCommerce', 'nw-avada-like' ),
		'image_field' => 'nx_img_portfolio_3',
		'alt'         => __( 'Oak & Ember ecommerce website mockup', 'nw-avada-like' ),
	],
	[
		'title'       => __( 'BlueFin Fitness', 'nw-avada-like' ),
		'result'      => __( '2.1× lead volume from paid campaigns', 'nw-avada-like' ),
		'category'    => __( 'Service-Based Business', 'nw-avada-like' ),
		'image_field' => 'nx_img_portfolio_4',
		'alt'         => __( 'BlueFin Fitness marketing website mockup', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section" id="portfolio-showcase" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Recent Launches Driving Real Revenue', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'High-converting WordPress builds for legal, home services, eCommerce, and expert brands.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-tiles">
			<?php foreach ( $projects as $project ) : ?>
				<article class="nx-card nx-card--hover">
					<figure class="nx-tile">
						<?php
						if ( function_exists( 'nx_render_section_image' ) ) {
							nx_render_section_image(
								$project['image_field'],
								$project['alt'],
								[
									'class'      => '',
									'width'      => 960,
									'height'     => 640,
									'min_height' => 320,
								]
							);
						}
						?>
						<figcaption>
							<strong><?php echo esc_html( $project['title'] ); ?></strong><br>
							<span><?php echo esc_html( $project['category'] ); ?></span><br>
							<em><?php echo esc_html( $project['result'] ); ?></em>
						</figcaption>
					</figure>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="nx-actions">
			<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Book a Portfolio Walkthrough', 'nw-avada-like' ); ?></a>
			<a class="nx-btn nx-btn--ghost" href="#faq"><?php esc_html_e( 'See How Engagements Work', 'nw-avada-like' ); ?></a>
		</div>
	</div>
</section>

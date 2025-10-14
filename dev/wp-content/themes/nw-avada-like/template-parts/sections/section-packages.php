<?php
/**
 * Packages section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$packages = [
	[
		'name'     => __( 'Launch Pad', 'nw-avada-like' ),
		'price'    => __( 'From $1,200', 'nw-avada-like' ),
		'summary'  => __( 'High-converting single-page experience with rapid turnaround.', 'nw-avada-like' ),
		'features' => [
			__( 'Conversion copy polish (1 round)', 'nw-avada-like' ),
			__( 'Responsive page design + animations', 'nw-avada-like' ),
			__( 'Analytics, pixels, and lead routing setup', 'nw-avada-like' ),
		],
	],
	[
		'name'     => __( 'Growth Site', 'nw-avada-like' ),
		'price'    => __( 'From $2,900', 'nw-avada-like' ),
		'summary'  => __( '5–8 page marketing site built to educate, nurture, and convert.', 'nw-avada-like' ),
		'features' => [
			__( 'Conversion strategy workshop & sitemap', 'nw-avada-like' ),
			__( 'Service, about, resources, and blog templates', 'nw-avada-like' ),
			__( 'On-page SEO, schema, and blog setup', 'nw-avada-like' ),
		],
	],
	[
		'name'     => __( 'Commerce Engine', 'nw-avada-like' ),
		'price'    => __( 'From $4,900', 'nw-avada-like' ),
		'summary'  => __( 'WooCommerce storefront optimized for high-intent buyers.', 'nw-avada-like' ),
		'features' => [
			__( 'Product, category, and landing page templates', 'nw-avada-like' ),
			__( 'Checkout optimization & payment gateways', 'nw-avada-like' ),
			__( 'Email automation, CRM, and fulfillment setup', 'nw-avada-like' ),
		],
	],
];
?>
<section class="nx-section" id="packages" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Packages Geared for ROI', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'Pick the lane that matches your goals—then we tailor scope, integrations, and team enablement.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-pricing">
			<?php foreach ( $packages as $package ) : ?>
				<article class="nx-price">
					<h3><?php echo esc_html( $package['name'] ); ?></h3>
					<p class="amt"><?php echo esc_html( $package['price'] ); ?></p>
					<p><?php echo esc_html( $package['summary'] ); ?></p>
					<ul>
						<?php foreach ( $package['features'] as $feature ) : ?>
							<li><?php echo esc_html( $feature ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="nx-btn nx-btn--primary" href="#final-cta"><?php esc_html_e( 'Request Scope & Timeline', 'nw-avada-like' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
		<p class="nx-note"><?php esc_html_e( 'Final investment depends on integrations, content volume, and compliance requirements. Flexible payment plans available.', 'nw-avada-like' ); ?></p>
	</div>
</section>

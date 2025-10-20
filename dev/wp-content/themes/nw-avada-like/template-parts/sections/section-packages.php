<?php
/**
 * Packages section with modern pricing layout.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$packages = [
	[
		'title'    => esc_html__( 'Landing Page', 'nw-avada-like' ),
		'price'    => esc_html__( '$1,200', 'nw-avada-like' ),
		'subtitle' => esc_html__( 'Complete One-Page Website Designed to Convert', 'nw-avada-like' ),
		'cta'      => [
			'label'   => esc_html__( 'Request a Timeline', 'nw-avada-like' ),
			'href'    => '#final-cta',
			'variant' => 'secondary',
		],
		'features' => [
			esc_html__( 'Discovery session to understand business goals, audience, and structure', 'nw-avada-like' ),
			esc_html__( 'Persuasive, on-brand copywriting', 'nw-avada-like' ),
			esc_html__( 'Competitor and keyword research', 'nw-avada-like' ),
			esc_html__( 'SEO-optimized content', 'nw-avada-like' ),
			esc_html__( 'Modern, responsive layout (desktop, tablet, mobile)', 'nw-avada-like' ),
			esc_html__( 'Brand-aligned colors, fonts, and visuals', 'nw-avada-like' ),
			esc_html__( 'Lead capture form with email notifications', 'nw-avada-like' ),
			esc_html__( 'Fast loading, secure, and SEO-ready structure', 'nw-avada-like' ),
			esc_html__( 'Domain and SSL setup', 'nw-avada-like' ),
			esc_html__( 'Professional Email Account Setup', 'nw-avada-like' ),
			esc_html__( 'Timeline: 1-2 weeks', 'nw-avada-like' ),
			esc_html__( 'Deliverable: Fully functional, conversion-optimized landing page', 'nw-avada-like' ),
		],
	],
	[
		'title'      => esc_html__( 'Multi-Page Website', 'nw-avada-like' ),
		'price'      => esc_html__( '$2,900', 'nw-avada-like' ),
		'subtitle'   => esc_html__( 'Essentials (up to 20 pages)', 'nw-avada-like' ),
		'is_featured'=> true,
		'badge'      => esc_html__( 'Most Popular', 'nw-avada-like' ),
		'cta'        => [
			'label' => esc_html__( 'Start My Site', 'nw-avada-like' ),
			'href'  => '#final-cta',
		],
		'features'   => [
			esc_html__( 'A complete, SEO-optimized, multi-page website designed to elevate your brand and generate consistent leads', 'nw-avada-like' ),
			esc_html__( 'Discovery session to understand business goals, audience, and structure', 'nw-avada-like' ),
			esc_html__( 'Persuasive, on-brand copywriting', 'nw-avada-like' ),
			esc_html__( 'Competitor and keyword research', 'nw-avada-like' ),
			esc_html__( 'On-page SEO optimization (titles, meta, image alt tags, schema)', 'nw-avada-like' ),
			esc_html__( 'Modern, responsive layout (desktop, tablet, mobile)', 'nw-avada-like' ),
			esc_html__( 'Brand-aligned colors, fonts, and visuals', 'nw-avada-like' ),
			esc_html__( 'Lead capture form with email notifications', 'nw-avada-like' ),
			esc_html__( 'Fast loading, secure, and SEO-ready structure', 'nw-avada-like' ),
			esc_html__( 'Blog setup and category structure', 'nw-avada-like' ),
			esc_html__( 'Domain and SSL setup', 'nw-avada-like' ),
			esc_html__( 'Google Analytics & Search Console setup', 'nw-avada-like' ),
			esc_html__( 'Professional Email Account Setup', 'nw-avada-like' ),
			esc_html__( 'Typical Timeline: 2-4 weeks', 'nw-avada-like' ),
			esc_html__( 'Deliverable: Fully functional, multi-page website ready to grow your business', 'nw-avada-like' ),
		],
	],
	[
		'title'    => esc_html__( 'E-commerce Website', 'nw-avada-like' ),
		'price'    => esc_html__( '$4,900', 'nw-avada-like' ),
		'subtitle' => esc_html__( 'Core (up to 100 products)', 'nw-avada-like' ),
		'cta'      => [
			'label'   => esc_html__( 'Request a Quote', 'nw-avada-like' ),
			'href'    => '#final-cta',
			'variant' => 'secondary',
		],
		'features' => [
			esc_html__( 'A powerful, sales-ready online store built on WordPress + WooCommerce - optimized for conversions, performance, and growth', 'nw-avada-like' ),
			esc_html__( 'Discovery session to understand your products, target market, and goals', 'nw-avada-like' ),
			esc_html__( 'Competitor analysis and e-commerce strategy outline', 'nw-avada-like' ),
			esc_html__( 'Store architecture and navigation plan (categories, collections, filters)', 'nw-avada-like' ),
			esc_html__( 'Modern, responsive layout (desktop, tablet, mobile)', 'nw-avada-like' ),
			esc_html__( 'Optimized product grids, filters, and call-to-action placements', 'nw-avada-like' ),
			esc_html__( 'Product page design focused on clarity, trust, and conversions', 'nw-avada-like' ),
			esc_html__( 'Shopping cart and secure checkout setup', 'nw-avada-like' ),
			esc_html__( 'Integration with major payment gateways', 'nw-avada-like' ),
			esc_html__( 'Tax, shipping, and inventory management setup', 'nw-avada-like' ),
			esc_html__( 'Account registration, guest checkout, and email confirmations', 'nw-avada-like' ),
			esc_html__( 'Marketing & Conversion Tools', 'nw-avada-like' ),
			esc_html__( 'Google Analytics, Facebook Pixel, and conversion tracking setup', 'nw-avada-like' ),
			esc_html__( 'Blog setup and category structure', 'nw-avada-like' ),
			esc_html__( 'Typical Timeline: 3-6 weeks', 'nw-avada-like' ),
			esc_html__( 'Deliverable: Fully functional, sales-ready online store with up to 100 products', 'nw-avada-like' ),
		],
	],
];
?>
<section id="packages" class="nx-section packages-modern" data-packages>
	<div class="nx-container">
		<header class="packages-modern__header">
			<span class="packages-modern__badge"><?php esc_html_e( 'PACKAGES', 'nw-avada-like' ); ?></span>
			<h2 class="packages-modern__title"><?php esc_html_e( 'Website Packages & Pricing', 'nw-avada-like' ); ?></h2>
		</header>

		<div class="packages-modern__grid">
			<?php foreach ( $packages as $index => $package ) : ?>
				<?php
				$card_classes = [
					'packages-modern__card',
					'reveal',
				];

				if ( ! empty( $package['is_featured'] ) ) {
					$card_classes[] = 'is-featured';
				}

				if ( ! empty( $package['badge'] ) ) {
					$card_classes[] = 'has-badge';
				}
				?>
				<article class="<?php echo esc_attr( implode( ' ', $card_classes ) ); ?>" data-card-index="<?php echo esc_attr( $index ); ?>">
					<?php if ( ! empty( $package['badge'] ) ) : ?>
						<span class="packages-modern__popular"><?php echo esc_html( $package['badge'] ); ?></span>
					<?php endif; ?>

					<header class="packages-modern__card-header">
						<h3 class="packages-modern__card-title"><?php echo esc_html( $package['title'] ); ?></h3>
						<p class="packages-modern__card-price"><?php echo esc_html( $package['price'] ); ?></p>
						<?php if ( ! empty( $package['subtitle'] ) ) : ?>
							<p class="packages-modern__card-subtitle"><?php echo esc_html( $package['subtitle'] ); ?></p>
						<?php endif; ?>
					</header>

					<?php if ( ! empty( $package['features'] ) ) : ?>
						<ul class="packages-modern__features">
							<?php foreach ( $package['features'] as $feature ) : ?>
								<li class="packages-modern__feature"><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php if ( ! empty( $package['cta'] ) ) : ?>
						<?php
						$cta_classes = [
							'packages-modern__cta',
						];

						if ( ! empty( $package['cta']['variant'] ) ) {
							$cta_classes[] = 'packages-modern__cta--' . sanitize_html_class( $package['cta']['variant'] );
						}
						?>
						<a class="<?php echo esc_attr( implode( ' ', $cta_classes ) ); ?>" href="<?php echo esc_url( $package['cta']['href'] ); ?>">
							<?php echo esc_html( $package['cta']['label'] ); ?>
						</a>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>

		<p class="packages-modern__hosting-note">
			<?php esc_html_e( 'Reliable hosting is required for all websites - starting at $20/month, based on your site\'s features and traffic volume.', 'nw-avada-like' ); ?>
		</p>
	</div>
</section>

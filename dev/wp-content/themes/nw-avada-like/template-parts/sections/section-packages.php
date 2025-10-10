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
		'name'        => 'Landing Page',
		'price'       => 'from $1,200',
		'description' => 'Conversion-focused, copy assist, analytics setup, 1 round of revisions.',
	],
	[
		'name'        => 'Business Website',
		'price'       => 'from $2,900',
		'description' => '5&ndash;8 pages, services, blog, intake/booking, on-page SEO basics.',
	],
	[
		'name'        => 'Online Store (WooCommerce)',
		'price'       => 'from $4,900',
		'description' => 'Product templates, Stripe/PayPal, tax &amp; shipping, checkout optimization.',
	],
];
?>
<section class="nx-section nx-section--packages" id="packages" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Clear Packages, Built Around Your Goals</h2>
		</header>
		<div class="nx-card-grid nx-card-grid--packages">
			<?php foreach ( $packages as $package ) : ?>
				<article class="nx-card nx-card--package">
					<h3 class="nx-card__title"><?php echo esc_html( $package['name'] ); ?></h3>
					<p class="nx-card__price"><?php echo esc_html( $package['price'] ); ?></p>
					<p class="nx-card__description"><?php echo wp_kses_post( $package['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
		<p class="nx-section__note">Note: Final price depends on scope and integrations. Payment plans available.</p>
		<div class="nx-section__actions">
			<a class="nx-btn nx-btn--primary" href="#final-cta">Get a Tailored Quote</a>
		</div>
	</div>
</section>

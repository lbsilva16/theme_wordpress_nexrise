<?php
/**
 * Care plans section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$plans = [
	[
		'name'     => __( 'Essential Care', 'nw-avada-like' ),
		'price'    => __( '$79/mo', 'nw-avada-like' ),
		'summary'  => __( 'Perfect for brochure and landing page sites that need reliable upkeep.', 'nw-avada-like' ),
		'features' => [
			__( 'Weekly core, plugin, and theme updates', 'nw-avada-like' ),
			__( 'Daily off-site backups with 30-day retention', 'nw-avada-like' ),
			__( 'Security, uptime, and broken link monitoring', 'nw-avada-like' ),
		],
	],
	[
		'name'     => __( 'Growth Care', 'nw-avada-like' ),
		'price'    => __( '$149/mo', 'nw-avada-like' ),
		'summary'  => __( 'Ideal for sites with active campaigns and continuous publishing.', 'nw-avada-like' ),
		'features' => [
			__( 'Everything in Essential', 'nw-avada-like' ),
			__( '2 content or design requests per month', 'nw-avada-like' ),
			__( 'Monthly site speed and technical SEO report', 'nw-avada-like' ),
		],
	],
	[
		'name'     => __( 'Scale Care', 'nw-avada-like' ),
		'price'    => __( '$249/mo', 'nw-avada-like' ),
		'summary'  => __( 'For revenue-critical sites that need a dedicated web partner.', 'nw-avada-like' ),
		'features' => [
			__( 'Everything in Growth', 'nw-avada-like' ),
			__( 'Priority support with same-day response', 'nw-avada-like' ),
			__( 'Quarterly CRO and funnel optimization workshop', 'nw-avada-like' ),
		],
	],
];
?>
<section class="nx-section nx-section--soft" id="care-plans" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Keep It Fast, Secure, and Converting', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'Choose the level of support your marketing team needs—then scale up or down anytime.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-pricing">
			<?php foreach ( $plans as $plan ) : ?>
				<article class="nx-price">
					<h3><?php echo esc_html( $plan['name'] ); ?></h3>
					<p class="amt"><?php echo esc_html( $plan['price'] ); ?></p>
					<p><?php echo esc_html( $plan['summary'] ); ?></p>
					<ul>
						<?php foreach ( $plan['features'] as $feature ) : ?>
							<li><?php echo esc_html( $feature ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="nx-btn nx-btn--ghost" href="#final-cta"><?php esc_html_e( 'Talk Through Support Options', 'nw-avada-like' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

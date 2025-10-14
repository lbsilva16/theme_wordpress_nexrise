<?php
/**
 * Add-ons section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$addons = [
	[
		'title' => __( 'Booking & Scheduling', 'nw-avada-like' ),
		'copy'  => __( 'Calendly, Acuity, SavvyCal, HoneyBook, or custom intake flows.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'CRM & Automation', 'nw-avada-like' ),
		'copy'  => __( 'HubSpot, Zoho, ActiveCampaign, GoHighLevel, and bespoke webhook logic.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Payments & Subscriptions', 'nw-avada-like' ),
		'copy'  => __( 'Stripe, PayPal, Authorize.net, tax automation, memberships, and billing portals.', 'nw-avada-like' ),
	],
	[
		'title' => __( 'Conversion Tools', 'nw-avada-like' ),
		'copy'  => __( 'Reviews, UGC widgets, quizzes, chat, multilingual, and personalization.', 'nw-avada-like' ),
	],
];
?>
<section class="nx-section nx-section--soft" id="addons" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<header class="nx-section__header">
			<h2 class="nx-h2"><?php esc_html_e( 'Need More Firepower? Plug In Add-Ons Anytime', 'nw-avada-like' ); ?></h2>
			<p class="nx-lead"><?php esc_html_e( 'Pick the integrations that accelerate sales, marketing, ops, or customer success.', 'nw-avada-like' ); ?></p>
		</header>
		<div class="nx-grid nx-grid--2">
			<?php foreach ( $addons as $addon ) : ?>
				<article class="nx-card">
					<h3><?php echo esc_html( $addon['title'] ); ?></h3>
					<p><?php echo esc_html( $addon['copy'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

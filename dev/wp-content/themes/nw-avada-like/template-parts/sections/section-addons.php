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
	'Calendly',
	'HubSpot/Zoho CRM',
	'Stripe/PayPal',
	'TaxJar/Avalara',
	'Klaviyo/Mailchimp',
	'Subscriptions',
	'Memberships',
	'Reviews',
	'Wishlist',
	'Live Chat',
	'Translations',
];
?>
<section class="nx-section nx-section--addons" id="addons" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Add Power Features When You Need Them</h2>
		</header>
		<ul class="nx-chip-list" role="list">
			<?php foreach ( $addons as $addon ) : ?>
				<li class="nx-chip-list__item">
					<span class="nx-chip"><?php echo esc_html( $addon ); ?></span>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

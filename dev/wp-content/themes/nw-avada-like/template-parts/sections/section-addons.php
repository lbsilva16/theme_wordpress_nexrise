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
	__( 'Calendly and scheduling flows', 'nw-avada-like' ),
	__( 'HubSpot, Zoho, ActiveCampaign', 'nw-avada-like' ),
	__( 'Stripe, PayPal, Authorize.net', 'nw-avada-like' ),
	__( 'Subscriptions and memberships', 'nw-avada-like' ),
	__( 'Tax automation with TaxJar or Avalara', 'nw-avada-like' ),
	__( 'Klaviyo, Mailchimp, Drip', 'nw-avada-like' ),
	__( 'Product reviews and UGC widgets', 'nw-avada-like' ),
	__( 'Live chat and chatbots', 'nw-avada-like' ),
	__( 'Wishlist and loyalty', 'nw-avada-like' ),
	__( 'Translations and localization', 'nw-avada-like' ),
];
?>
<section id="addons" class="nx-section" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'Add-ons', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Enhance Your Site Anytime with Powerful Add-Ons', 'nw-avada-like' ); ?></h2>
		<p class="nx-lead"><?php esc_html_e( 'Stack integrations that accelerate sales, marketing, ops, and customer success.', 'nw-avada-like' ); ?></p>

		<ul class="nx-chip-list" role="list">
			<?php foreach ( $addons as $addon ) : ?>
				<li class="reveal">
					<span class="nx-chip">
						<span aria-hidden="true" class="nx-chip__icon">+</span>
						<?php echo esc_html( $addon ); ?>
					</span>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<style>
  /* Add-ons: alinhar com padrão das demais seções e melhorar responsividade */
  #addons .nx-container{ text-align:center; }
  #addons .nx-lead{ margin:0 auto; }
  #addons .nx-chip-list{ justify-content:center; }
  @media (max-width: 560px){
    #addons .nx-chip{ padding:8px 12px; font-size:14px; }
  }
</style>

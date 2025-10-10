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
		'name'        => 'Essential',
		'price'       => '$79/mo',
		'description' => '&mdash; updates, backups, security, uptime monitoring.',
	],
	[
		'name'        => 'Growth',
		'price'       => '$149/mo',
		'description' => '&mdash; Essential + 2 content requests/mo + speed checks.',
	],
	[
		'name'        => 'Scale',
		'price'       => '$249/mo',
		'description' => '&mdash; Growth + priority support + quarterly CRO review.',
	],
];
?>
<section class="nx-section nx-section--care-plans" id="care-plans" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Keep It Fast, Secure, and Up to Date</h2>
		</header>
		<div class="nx-card-grid nx-card-grid--plans">
			<?php foreach ( $plans as $plan ) : ?>
				<article class="nx-card nx-card--plan">
					<h3 class="nx-card__title"><?php echo esc_html( $plan['name'] ); ?></h3>
					<p class="nx-card__price"><?php echo esc_html( $plan['price'] ); ?></p>
					<p class="nx-card__description"><?php echo wp_kses_post( $plan['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="nx-section__actions">
			<a class="nx-btn nx-btn--ghost" href="#final-cta">Compare Plans</a>
		</div>
	</div>
</section>

<?php
/**
 * Why Choose Us section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reasons = [
	[
		'title'       => 'Strategy First',
		'description' => 'Clear sitemap, persuasive messaging, and conversion flows.',
	],
	[
		'title'       => 'Conversion Design',
		'description' => 'On-brand UI, strong CTAs, proof blocks, and offer clarity.',
	],
	[
		'title'       => 'Speed & SEO',
		'description' => 'Core Web Vitals, clean markup, schema, and fast hosting setup.',
	],
	[
		'title'       => 'Ownership & Support',
		'description' => 'You own the site; we train your team and stay on call.',
	],
];
?>
<section class="nx-section nx-section--why-choose-us" id="why-choose-us" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Why Businesses Choose NexRise</h2>
		</header>
		<div class="nx-card-grid nx-card-grid--quarters">
			<?php foreach ( $reasons as $reason ) : ?>
				<article class="nx-card nx-card--reason">
					<h3 class="nx-card__title"><?php echo esc_html( $reason['title'] ); ?></h3>
					<p class="nx-card__description"><?php echo esc_html( $reason['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

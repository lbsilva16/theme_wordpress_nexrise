<?php
/**
 * Outcomes section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stats = [
	'+38% average increase in leads within 60 days',
	'90+ Lighthouse Performance on key pages',
	'< 2.5s LCP on modern hosting',
];
?>
<section class="nx-section nx-section--outcomes" id="outcomes" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<div class="nx-section__content">
			<header class="nx-section__header">
				<h2 class="nx-section__title">Built for Speed, Clarity, and Conversions</h2>
			</header>
			<ul class="nx-stats-list">
				<?php foreach ( $stats as $stat ) : ?>
					<li class="nx-stats-list__item">
						<span class="nx-stats-list__value"><?php echo esc_html( $stat ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
			<p class="nx-section__note">Note: Results vary by niche and traffic. We align targets with you before kickoff.</p>
		</div>
		<div class="nx-section__media">
			<?php
			if ( function_exists( 'nx_render_section_image' ) ) {
				nx_render_section_image(
					'nx_img_performance_dashboard',
					'Performance dashboard interface',
					[
						'class'      => 'nx-section__image',
						'width'      => 960,
						'height'     => 720,
						'min_height' => 320,
					]
				);
			}
			?>
		</div>
	</div>
</section>

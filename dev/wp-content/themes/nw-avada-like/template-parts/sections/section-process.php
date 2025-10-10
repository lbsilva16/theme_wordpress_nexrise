<?php
/**
 * Process section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$steps = [
	[
		'title'       => 'Discovery & Site Plan',
		'description' => '&ndash; goals, sitemap, wireframe, estimate.',
	],
	[
		'title'       => 'Design & Copy',
		'description' => '&ndash; on-brand UI, persuasive messaging, review/approve.',
	],
	[
		'title'       => 'Build & Integrations',
		'description' => '&ndash; WordPress/WooCommerce, payments, CRM, analytics.',
	],
	[
		'title'       => 'Launch & Optimize',
		'description' => '&ndash; QA, redirects, performance, training, A/B roadmap.',
	],
];
?>
<section class="nx-section nx-section--process" id="process" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<div class="nx-section__content">
			<header class="nx-section__header">
				<h2 class="nx-section__title">Our Process (Fast. Clear. No Guesswork.)</h2>
			</header>
			<ol class="nx-step-list" role="list">
				<?php foreach ( $steps as $step ) : ?>
					<li class="nx-step-list__item">
						<h3 class="nx-step-list__title"><?php echo esc_html( $step['title'] ); ?></h3>
						<p class="nx-step-list__description"><?php echo wp_kses_post( $step['description'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
			<p class="nx-section__note">Note: Typical timeline: 2&ndash;5 weeks.</p>
			<div class="nx-section__actions">
				<a class="nx-btn nx-btn--primary" href="#final-cta">Book a 15-Minute Intro Call &rarr;</a>
			</div>
		</div>
		<div class="nx-section__media">
			<?php
			if ( function_exists( 'nx_render_section_image' ) ) {
				nx_render_section_image(
					'nx_img_process_visual',
					'Process visualization mockup',
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

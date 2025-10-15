<?php
/**
 * Outcomes section (Results).
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$counters = [
	[
		'target' => 1000,
		'suffix' => '+',
		'label'  => __( 'Clients Worldwide', 'nw-avada-like' ),
		'random' => true,
	],
	[
		'target' => 9,
		'suffix' => '+ Years',
		'label'  => __( 'of Real-World Experience', 'nw-avada-like' ),
	],
	[
		'target' => 100,
		'suffix' => '%',
		'label'  => __( 'Client Satisfaction Rate', 'nw-avada-like' ),
	],
];
?>
<section id="outcomes" class="results-section" style="scroll-margin-top: 96px;">
	<div class="results-container">
		<div class="section-header">
			<div class="section-label"><?php esc_html_e( 'Results', 'nw-avada-like' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'NexRise in Numbers', 'nw-avada-like' ); ?></h2>
			<p class="section-subtitle">
				<?php esc_html_e( 'Real results, proven experience, and global trust. Our numbers speak for themselves.', 'nw-avada-like' ); ?>
			</p>
		</div>

		<div class="results-grid" data-nx-results-grid>
			<?php foreach ( $counters as $counter ) : ?>
				<div class="result-card">
					<div
						class="result-number"
						data-target="<?php echo esc_attr( (int) $counter['target'] ); ?>"
						data-suffix="<?php echo esc_attr( $counter['suffix'] ); ?>"
						<?php echo ! empty( $counter['random'] ) ? 'data-random="true"' : ''; ?>
					>
						<?php echo esc_html( '0' . $counter['suffix'] ); ?>
					</div>
					<div class="result-label"><?php echo esc_html( $counter['label'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="cta-container">
			<a href="#final-cta" class="cta-button"><?php esc_html_e( 'Get a Free Site Plan', 'nw-avada-like' ); ?></a>
			<a href="#final-cta" class="cta-button secondary"><?php esc_html_e( 'See How We Measure', 'nw-avada-like' ); ?></a>

			<div class="live-indicator">
				<span class="live-dot" aria-hidden="true"></span>
				<span><?php esc_html_e( 'Each project is unique-but our commitment to results never changes.', 'nw-avada-like' ); ?></span>
			</div>
		</div>
	</div>
</section>

<?php
/**
 * Final CTA section (Next Steps).
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$feature_items = [
	__( 'Project scope, structure, and key deliverables', 'nw-avada-like' ),
	__( 'Transparent investment options with no hidden fees', 'nw-avada-like' ),
	__( 'Estimated timeline - typically 2 to 5 weeks', 'nw-avada-like' ),
	__( 'Expert recommendations to maximize performance and ROI', 'nw-avada-like' ),
	__( 'No pressure - no contracts required.', 'nw-avada-like' ),
];

$whatsapp_number  = '12813744411';
$whatsapp_message = rawurlencode(
	__( 'Hello NexRise! I would like to schedule a Strategy Call to discuss my WordPress website project.', 'nw-avada-like' )
);
$whatsapp_url = sprintf(
	'https://wa.me/%1$s?text=%2$s',
	rawurlencode( $whatsapp_number ),
	$whatsapp_message
);
?>
<section id="final-cta" class="nx-section nx-next-steps" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="nx-next-steps__card">
			<span class="nx-next-steps__label" data-nx-animate="true">
				<?php esc_html_e( 'Next steps', 'nw-avada-like' ); ?>
			</span>

			<div class="nx-next-steps__grid">
				<div class="nx-next-steps__content">
					<h2 class="nx-next-steps__title" data-nx-animate="true">
						<?php esc_html_e( 'Ready to Launch a High-Performing WordPress Website?', 'nw-avada-like' ); ?>
					</h2>

					<p class="nx-next-steps__description" data-nx-animate="true">
						<?php esc_html_e( 'Partner with NexRise, a global web design agency specialized in creating conversion-focused, SEO-optimized WordPress websites that turn visitors into paying customers.', 'nw-avada-like' ); ?>
					</p>

					<p class="nx-next-steps__description" data-nx-animate="true" style="animation-delay: 0.15s;">
						<?php esc_html_e( 'Book your free Strategy Call today and receive a personalized roadmap covering:', 'nw-avada-like' ); ?>
					</p>

					<ul class="nx-next-steps__list">
						<?php foreach ( $feature_items as $index => $item ) : ?>
							<li
								data-nx-animate="true"
								style="animation-delay: <?php echo esc_attr( number_format( 0.25 + ( 0.1 * (int) $index ), 2, '.', '' ) ); ?>s;"
							>
								<?php echo esc_html( $item ); ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<p class="nx-next-steps__description" data-nx-animate="true" style="animation-delay: 0.75s;">
						<?php esc_html_e( "Even if you decide not to move forward, you'll still keep your full strategy plan.", 'nw-avada-like' ); ?>
					</p>

					<div class="nx-next-steps__actions" data-nx-animate="true" style="animation-delay: 0.85s;">
						<a
							class="nx-btn nx-btn--primary"
							href="<?php echo esc_url( $whatsapp_url ); ?>"
							target="_blank"
							rel="noopener"
							data-nx-next-steps-schedule="true"
							data-nx-whatsapp-url="<?php echo esc_attr( $whatsapp_url ); ?>"
						>
							<?php esc_html_e( 'Schedule My Strategy Call', 'nw-avada-like' ); ?>
						</a>
						<a
							class="nx-btn nx-btn--ghost"
							href="#faq"
							data-nx-next-steps-faq="true"
						>
							<?php esc_html_e( 'Review FAQs', 'nw-avada-like' ); ?>
						</a>
					</div>

					<p class="nx-next-steps__contact" data-nx-animate="true" style="animation-delay: 1.05s;">
						<?php
							printf(
								/* translators: 1: WhatsApp number, 2: availability */
								esc_html__( 'Prefer text, chat, or WhatsApp? Message us anytime at %1$s, chat with us directly on our website, or email info@gonexrise.com. We\'re available %2$s.', 'nw-avada-like' ),
								'+1 (281) 374-4411',
								__( 'Mon-Fri, 9am-5pm (Available Worldwide)', 'nw-avada-like' )
							);
						?>
					</p>
				</div>

				<div class="nx-next-steps__media">
					<div class="nx-next-steps__frame" data-nx-animate="true">
						<div class="nx-next-steps__workspace">
							<span class="nx-next-steps__workspace-icon" aria-hidden="true" data-nx-animate="true">💻</span>
							<span class="nx-next-steps__snippet nx-next-steps__snippet--top" data-nx-animate="true">
								<?php
								echo wp_kses_post(
									sprintf(
										'%s<br />%s',
										esc_html__( '<WordPress />', 'nw-avada-like' ),
										esc_html__( 'Revenue Ready ✓', 'nw-avada-like' )
									)
								);
								?>
							</span>
							<span class="nx-next-steps__snippet nx-next-steps__snippet--bottom" data-nx-animate="true">
								<?php
								echo wp_kses_post(
									sprintf(
										'%s<br />%s',
										esc_html__( 'Launch: 48h', 'nw-avada-like' ),
										esc_html__( 'Success: 100%', 'nw-avada-like' )
									)
								);
								?>
							</span>
						</div>
					</div>

					<span class="nx-next-steps__floating nx-next-steps__floating--top" data-nx-animate="true">
						<?php esc_html_e( '🚀 Fast Launch', 'nw-avada-like' ); ?>
					</span>
					<span class="nx-next-steps__floating nx-next-steps__floating--bottom" data-nx-animate="true">
						<?php esc_html_e( '✨ Premium Quality', 'nw-avada-like' ); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

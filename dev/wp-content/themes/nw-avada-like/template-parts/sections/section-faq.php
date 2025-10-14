<?php
/**
 * FAQ section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$faqs = [
	[
		'question' => __( 'How long does it take to launch?', 'nw-avada-like' ),
		'answer'   => __( 'Most builds go live within 2-5 weeks. We lock milestones, owner, and review windows during kickoff so there are no surprises.', 'nw-avada-like' ),
	],
	[
		'question' => __( 'Will you help with copy and positioning?', 'nw-avada-like' ),
		'answer'   => __( 'Absolutely. Our strategists produce conversion-focused copy, then your team reviews and approves before we move into build-out.', 'nw-avada-like' ),
	],
	[
		'question' => __( 'Can you migrate our existing site without downtime?', 'nw-avada-like' ),
		'answer'   => __( 'Yes. We handle backups, staging, redirects, DNS updates, and QA so the transition is smooth for both SEO and visitors.', 'nw-avada-like' ),
	],
	[
		'question' => __( 'What about hosting and security?', 'nw-avada-like' ),
		'answer'   => __( 'We work with your provider or recommend high-performance hosting, then configure SSL, caching, WAF, and monitoring.', 'nw-avada-like' ),
	],
	[
		'question' => __( 'Is training included after launch?', 'nw-avada-like' ),
		'answer'   => __( 'Every engagement includes recorded walkthroughs, SOPs, and a live training session so your team can manage content confidently.', 'nw-avada-like' ),
	],
	[
		'question' => __( 'What if we need updates later?', 'nw-avada-like' ),
		'answer'   => __( 'Pick a care plan for ongoing improvements or request ad-hoc support. We stay available as your retained web team.', 'nw-avada-like' ),
	],
];
?>
<section id="faq" class="nx-section nx-section--soft" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<span class="nx-kicker"><?php esc_html_e( 'FAQ', 'nw-avada-like' ); ?></span>
		<h2 class="nx-h2"><?php esc_html_e( 'Frequently Asked Questions', 'nw-avada-like' ); ?></h2>
		<p class="nx-lead"><?php esc_html_e( 'Transparent answers before you book a call. Need something else? Reach out and we will add it.', 'nw-avada-like' ); ?></p>
		<?php foreach ( $faqs as $index => $faq ) : ?>
			<details class="reveal" <?php echo 0 === $index ? 'open' : ''; ?>>
				<summary><?php echo esc_html( $faq['question'] ); ?></summary>
				<p><?php echo esc_html( $faq['answer'] ); ?></p>
			</details>
		<?php endforeach; ?>
	</div>
</section>

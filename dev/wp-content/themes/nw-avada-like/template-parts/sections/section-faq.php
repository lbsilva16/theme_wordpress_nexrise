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
		'question' => 'How long does it take?',
		'answer'   => 'Most projects launch within 2&ndash;5 weeks. We confirm deliverables, feedback windows, and launch date during kickoff.',
	],
	[
		'question' => 'Can you write the copy?',
		'answer'   => 'Yes. Our strategists produce persuasive messaging, and you review every word before build-out.',
	],
	[
		'question' => 'Do you migrate my old site?',
		'answer'   => 'We handle full migrations, including domain updates, redirects, and content imports without downtime.',
	],
	[
		'question' => 'What about hosting?',
		'answer'   => 'We work with your host or recommend fast, secure options. We configure caching, SSL, and backups for launch.',
	],
	[
		'question' => 'Is training included?',
		'answer'   => 'Every launch includes recorded walkthroughs plus live training so your team can update content confidently.',
	],
	[
		'question' => 'What if I need changes later?',
		'answer'   => 'Choose a care plan for ongoing improvements or request one-off updates. We stay on call as your growth partner.',
	],
];
?>
<section class="nx-section nx-section--faq" id="faq" style="scroll-margin-top: 100px;">
	<div class="nx-section__inner">
		<header class="nx-section__header">
			<h2 class="nx-section__title">Frequently Asked Questions</h2>
		</header>
		<div class="nx-accordion">
			<?php foreach ( $faqs as $index => $faq ) : ?>
				<details class="nx-accordion__item" <?php echo 0 === $index ? 'open' : ''; ?>>
					<summary class="nx-accordion__summary">
						<span class="nx-accordion__question"><?php echo esc_html( $faq['question'] ); ?></span>
					</summary>
					<div class="nx-accordion__content">
						<p><?php echo wp_kses_post( $faq['answer'] ); ?></p>
					</div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

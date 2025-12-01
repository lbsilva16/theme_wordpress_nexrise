<?php
/**
 * Why Choose Us section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cards = [
	[
		'title' => __( 'Strategy First', 'nw-avada-like' ),
		'copy'  => __( 'We start with a clear strategy — defining your sitemap, crafting persuasive copy, and optimizing every step of the user journey.', 'nw-avada-like' ),
		'icon'  => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path></svg>',
	],
	[
		'title' => __( 'Conversion Design', 'nw-avada-like' ),
		'copy'  => __( 'We design on-brand interfaces with bold CTAs, social proof, and irresistible offers that turn visitors into customers.', 'nw-avada-like' ),
		'icon'  => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path><path d="M9 21V9"></path></svg>',
	],
	[
		'title' => __( 'Speed & SEO', 'nw-avada-like' ),
		'copy'  => __( 'Lightning-fast websites built for Core Web Vitals, clean code, SEO schema, and optimized hosting — all tuned for top Google performance.', 'nw-avada-like' ),
		'icon'  => '<svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>',
	],
];

$allowed_svg_tags = [
	'svg'      => [
		'viewBox'     => true,
		'aria-hidden' => true,
	],
	'path'     => [
		'd' => true,
	],
	'rect'     => [
		'x'      => true,
		'y'      => true,
		'width'  => true,
		'height' => true,
		'rx'     => true,
	],
	'polyline' => [
		'points' => true,
	],
];
?>
<section id="why-choose-us" class="nx-section nx-section--aura why-choose-section" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="why-choose-us__inner">
			<span class="nx-kicker"><?php esc_html_e( 'Why choose us', 'nw-avada-like' ); ?></span>
			<h2 class="nx-h2 why-choose-us__title"><?php esc_html_e( 'Strategy, high-converting design, SEO performance, and ongoing partnership — all in one place.', 'nw-avada-like' ); ?></h2>

			<div class="why-choose-us__cards">
				<?php foreach ( $cards as $index => $card ) : ?>
					<article class="why-choose-us__card" data-card-index="<?php echo esc_attr( $index ); ?>">
						<span class="why-choose-us__icon" aria-hidden="true">
							<?php echo wp_kses( $card['icon'], $allowed_svg_tags ); ?>
						</span>
						<h3 class="why-choose-us__card-title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="why-choose-us__card-description"><?php echo esc_html( $card['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<style>
		#why-choose-us.why-choose-section {
			padding: min(6vw, 96px) 0;
		}

		#why-choose-us .why-choose-us__inner {
			max-width: 1280px;
			margin: 0 auto;
			text-align: center;
		}

		#why-choose-us .why-choose-us__title {
			margin: 16px auto 48px;
			max-width: 880px;
			color: var(--color-text-primary);
			line-height: 1.3;
			letter-spacing: -0.6px;
		}

		#why-choose-us .why-choose-us__cards {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: clamp(20px, 3vw, 36px);
			perspective: 1200px;
		}

		#why-choose-us .why-choose-us__card {
			position: relative;
			padding: clamp(28px, 4vw, 48px) clamp(24px, 3.5vw, 40px);
			background: var(--color-surface-panel);
			border-radius: 20px;
			box-shadow: 0 18px 36px rgba(15, 23, 42, 0.08);
			transition:
				box-shadow 280ms ease,
				transform 280ms ease,
				opacity 320ms ease;
			overflow: hidden;
			opacity: 0;
			--parallax-translate-x: 0px;
			--parallax-translate-y: 0px;
			--tilt-rotate-x: 0deg;
			--tilt-rotate-y: 0deg;
			--card-lift: 0px;
			transform: translate3d(var(--parallax-translate-x), calc(var(--card-lift) + var(--parallax-translate-y) + 24px), 0) rotateX(var(--tilt-rotate-x)) rotateY(var(--tilt-rotate-y));
		}

		#why-choose-us .why-choose-us__card::before {
			content: '';
			position: absolute;
			inset: 0;
			pointer-events: none;
			border-radius: inherit;
			background:
				linear-gradient(120deg, rgba(79, 70, 229, 0.08) 0%, rgba(20, 184, 166, 0.12) 100%);
			opacity: 0;
			transition: opacity 240ms ease;
		}

		#why-choose-us .why-choose-us__card::after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 4px;
			background: linear-gradient(90deg, var(--color-grad-start), var(--color-grad-end));
			transform-origin: left;
			transform: scaleX(0);
			transition: transform 280ms ease;
		}

		#why-choose-us .why-choose-us__card:hover,
		#why-choose-us .why-choose-us__card:focus-visible {
			--card-lift: -12px;
			box-shadow: 0 26px 45px rgba(79, 70, 229, 0.22);
		}

		#why-choose-us .why-choose-us__card:hover::before,
		#why-choose-us .why-choose-us__card:focus-visible::before {
			opacity: 1;
		}

		#why-choose-us .why-choose-us__card:hover::after,
		#why-choose-us .why-choose-us__card:focus-visible::after {
			transform: scaleX(1);
		}

		#why-choose-us .why-choose-us__card.is-visible {
			opacity: 1;
			transform: translate3d(var(--parallax-translate-x), calc(var(--card-lift) + var(--parallax-translate-y)), 0) rotateX(var(--tilt-rotate-x)) rotateY(var(--tilt-rotate-y));
		}

		#why-choose-us .why-choose-us__icon {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 64px;
			height: 64px;
			margin-bottom: 28px;
			border-radius: 16px;
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
			box-shadow: 0 12px 24px rgba(79, 70, 229, 0.28);
			transition: transform 280ms ease;
		}

		#why-choose-us .why-choose-us__card:hover .why-choose-us__icon,
		#why-choose-us .why-choose-us__card:focus-visible .why-choose-us__icon {
			transform: rotateY(180deg);
		}

		#why-choose-us .why-choose-us__icon svg {
			width: 32px;
			height: 32px;
			display: block;
			stroke: var(--color-text-inverse);
			stroke-width: 2;
			fill: none;
			stroke-linecap: round;
			stroke-linejoin: round;
		}

		#why-choose-us .why-choose-us__card-title {
			margin-bottom: 20px;
			font-size: clamp(20px, 2vw, 26px);
			font-family: var(--font-display);
			font-weight: 700;
			color: var(--color-text-primary);
		}

		#why-choose-us .why-choose-us__card-description {
			margin: 0;
			font-size: clamp(16px, 1.4vw, 18px);
			line-height: 1.7;
			color: var(--color-text-secondary);
			font-weight: 500;
		}

		@media (max-width: 1024px) {
			#why-choose-us .why-choose-us__title {
				margin-bottom: 40px;
			}
		}

		@media (max-width: 768px) {
			#why-choose-us.why-choose-section {
				padding: 72px 0;
			}

			#why-choose-us .why-choose-us__inner {
				text-align: left;
			}

			#why-choose-us .why-choose-us__title {
				font-size: clamp(28px, 7vw, 34px);
				text-align: left;
			}

			#why-choose-us .why-choose-us__cards {
				grid-template-columns: 1fr;
			}
		}

		@media (max-width: 480px) {
			#why-choose-us .why-choose-us__title {
				letter-spacing: -0.4px;
			}

			#why-choose-us .why-choose-us__card {
				padding: 32px 24px;
			}
		}

		@media (prefers-reduced-motion: reduce) {
			#why-choose-us .why-choose-us__card,
			#why-choose-us .why-choose-us__icon {
				transition: none;
				transform: none !important;
			}

			#why-choose-us .why-choose-us__card::after {
				transition: none;
			}
		}
	</style>

	<script>
		(function () {
			const section = document.getElementById('why-choose-us');

			if (!section) {
				return;
			}

			const cards = Array.from(section.querySelectorAll('.why-choose-us__card'));

			if (cards.length === 0) {
				return;
			}

			const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

			const revealCards = () => {
				cards.forEach((card) => card.classList.add('is-visible'));
			};

			if (!prefersReducedMotion && 'IntersectionObserver' in window) {
				const observer = new IntersectionObserver(
					(entries) => {
						entries.forEach((entry) => {
							if (entry.isIntersecting) {
								entry.target.classList.add('is-visible');
								observer.unobserve(entry.target);
							}
						});
					},
					{
						threshold: 0.25,
						rootMargin: '0px 0px -80px 0px',
					}
				);

				cards.forEach((card) => observer.observe(card));
			} else {
				revealCards();
			}

			if (prefersReducedMotion) {
				return;
			}

			let animationFrame = null;

			const resetParallax = () => {
				cards.forEach((card) => {
					card.style.setProperty('--parallax-translate-x', '0px');
					card.style.setProperty('--parallax-translate-y', '0px');
				});
			};

			const updateParallax = (event) => {
				const ratioX = event.clientX / window.innerWidth - 0.5;
				const ratioY = event.clientY / window.innerHeight - 0.5;

				cards.forEach((card, index) => {
					const depth = (index + 1) * 4;
					card.style.setProperty('--parallax-translate-x', `${ratioX * depth * 6}px`);
					card.style.setProperty('--parallax-translate-y', `${ratioY * depth * 6}px`);
				});
			};

			const handleMouseMove = (event) => {
				if (animationFrame) {
					cancelAnimationFrame(animationFrame);
				}

				animationFrame = requestAnimationFrame(() => updateParallax(event));
			};

			section.addEventListener('mousemove', handleMouseMove);
			section.addEventListener('mouseleave', resetParallax);

			cards.forEach((card) => {
				card.addEventListener('mousemove', (event) => {
					const rect = card.getBoundingClientRect();
					const offsetX = event.clientX - rect.left;
					const offsetY = event.clientY - rect.top;
					const rotateY = ((offsetX / rect.width) - 0.5) * 16;
					const rotateX = ((offsetY / rect.height) - 0.5) * -12;

					card.style.setProperty('--tilt-rotate-x', `${rotateX}deg`);
					card.style.setProperty('--tilt-rotate-y', `${rotateY}deg`);
				});

				card.addEventListener('mouseleave', () => {
					card.style.setProperty('--tilt-rotate-x', '0deg');
					card.style.setProperty('--tilt-rotate-y', '0deg');
				});
			});
		})();
	</script>
</section>

<?php
/**
 * Care plans section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="care-plans" class="nx-section nx-section--soft care-plans-modern" style="scroll-margin-top: 96px;">
	<div class="nx-container">
		<div class="care-plans-modern__surface">
			<div class="floating-shapes" aria-hidden="true">
				<div class="shape" data-shape="1"></div>
				<div class="shape" data-shape="2"></div>
				<div class="shape" data-shape="3"></div>
			</div>

			<div class="pricing-section">
				<div class="section-header">
					<div class="badge"><?php esc_html_e( 'Growth Plans', 'nw-avada-like' ); ?></div>
					<h2 class="pricing-section__title"><?php esc_html_e( 'Marketing, Social & SEO Plans', 'nw-avada-like' ); ?></h2>
					<p class="subtitle"><?php esc_html_e( "Choose the plan that fits your goals \xE2\x80\x94 and let's start growing your traffic, sales, and brand visibility today.", 'nw-avada-like' ); ?></p>
				</div>

				<div class="pricing-grid">
					<div class="pricing-card">
						<h3 class="plan-name"><?php esc_html_e( 'Essential Plan', 'nw-avada-like' ); ?></h3>
						<div class="plan-price">
							<span class="currency"><?php esc_html_e( '$', 'nw-avada-like' ); ?></span>
							<span><?php esc_html_e( '500', 'nw-avada-like' ); ?></span>
							<span class="period"><?php esc_html_e( '/month', 'nw-avada-like' ); ?></span>
						</div>
						<ul class="features-list">
							<li><?php esc_html_e( 'Initial business analysis', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Campaign setup and strategy', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( '2 ad campaigns (copy + creative)', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Weekly performance reports', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( "Social media management \xE2\x80\x93 up to 2 platforms", 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Up to 12 posts / month', 'nw-avada-like' ); ?></li>
							<li><?php echo wp_kses_post( 'On-page SEO for 10 pages<br />(Ad spend not included)' ); ?></li>
						</ul>
						<button class="cta-button cta-secondary" type="button" data-scroll-target="#final-cta">
							<span><?php esc_html_e( 'Compare Plans', 'nw-avada-like' ); ?></span>
						</button>
					</div>

					<div class="pricing-card featured">
						<div class="popular-badge"><?php esc_html_e( 'Most Popular', 'nw-avada-like' ); ?></div>
						<h3 class="plan-name"><?php esc_html_e( 'Growth Plan', 'nw-avada-like' ); ?></h3>
						<div class="plan-price">
							<span class="currency"><?php esc_html_e( '$', 'nw-avada-like' ); ?></span>
							<span><?php esc_html_e( '800', 'nw-avada-like' ); ?></span>
							<span class="period"><?php esc_html_e( '/month', 'nw-avada-like' ); ?></span>
						</div>
						<ul class="features-list">
							<li><?php esc_html_e( 'Full business and audience audit', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( '4 ad campaigns (copy + creative)', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Weekly performance reports', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( "Social media management \xE2\x80\x93 up to 3 platforms", 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Up to 20 posts / month', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'On-page SEO for 20 pages', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( '(Ad spend not included)', 'nw-avada-like' ); ?></li>
						</ul>
						<button class="cta-button cta-primary" type="button" data-scroll-target="#final-cta">
							<span><?php esc_html_e( 'Talk With Us', 'nw-avada-like' ); ?></span>
						</button>
					</div>

					<div class="pricing-card">
						<h3 class="plan-name"><?php esc_html_e( 'Scale Plan', 'nw-avada-like' ); ?></h3>
						<div class="plan-price">
							<span class="currency"><?php esc_html_e( '$', 'nw-avada-like' ); ?></span>
							<span><?php esc_html_e( '1,000', 'nw-avada-like' ); ?></span>
							<span class="period"><?php esc_html_e( '/month', 'nw-avada-like' ); ?></span>
						</div>
						<ul class="features-list">
							<li><?php esc_html_e( 'Advanced strategy + competitor research', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( '4 active ad campaigns (copy, creative, A/B testing)', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Weekly + monthly insight reports', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( "Social media management \xE2\x80\x93 up to 4 platforms", 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Up to 30 posts / month (incl. reels or stories)', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( 'Full SEO optimization for 30 pages (on-page + content)', 'nw-avada-like' ); ?></li>
							<li><?php esc_html_e( '(Ad spend not included)', 'nw-avada-like' ); ?></li>
						</ul>
						<button class="cta-button cta-secondary" type="button" data-scroll-target="#final-cta">
							<span><?php esc_html_e( 'Plan With Us', 'nw-avada-like' ); ?></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style>
		#care-plans.care-plans-modern {
			position: relative;
			isolation: isolate;
			padding-block: clamp(72px, 8vw, 120px);
		}

		#care-plans .care-plans-modern__surface {
			position: relative;
			padding: clamp(40px, 6vw, 88px);
			border-radius: clamp(24px, 5vw, 40px);
			background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark));
			box-shadow: 0 32px 90px rgba(79, 70, 229, 0.25);
			overflow: hidden;
		}

		#care-plans .pricing-section {
			position: relative;
			z-index: 1;
			max-width: 1200px;
			margin: 0 auto;
			color: var(--color-text-inverse);
		}

		#care-plans .section-header {
			text-align: center;
			margin-bottom: clamp(40px, 5vw, 72px);
			animation: fadeInDown 900ms ease-out both;
		}

		#care-plans .pricing-section__title {
			font-family: var(--font-display);
			font-weight: 800;
			font-size: clamp(32px, 4vw, 52px);
			line-height: 1.15;
			letter-spacing: -1px;
			color: inherit;
			margin-bottom: 20px;
		}

		#care-plans .badge {
			display: inline-flex;
			align-items: center;
			gap: 10px;
			padding: 10px 28px;
			border-radius: 999px;
			font-size: 14px;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 1px;
			background: rgba(255, 255, 255, 0.24);
			color: var(--color-text-inverse);
			backdrop-filter: blur(8px);
			animation: pulse 2.6s infinite;
		}

		#care-plans .subtitle {
			max-width: 760px;
			margin: 0 auto;
			font-size: clamp(16px, 2vw, 20px);
			line-height: 1.6;
			color: rgba(248, 250, 252, 0.92);
		}

		#care-plans .pricing-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: clamp(24px, 4vw, 40px);
		}

		#care-plans .pricing-card {
			position: relative;
			padding: clamp(32px, 4vw, 48px);
			background: var(--color-surface-panel);
			border-radius: 28px;
			box-shadow: 0 22px 60px rgba(15, 23, 42, 0.18);
			transition: transform 320ms cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 320ms ease, opacity 320ms ease;
			overflow: hidden;
			color: var(--color-text-primary);
			opacity: 0;
			--cp-translate-y: 40px;
			--cp-rotate-x: 0deg;
			--cp-rotate-y: 0deg;
			--cp-scale: 1;
			transform: perspective(1000px) translate3d(0, var(--cp-translate-y, 40px), 0) rotateX(var(--cp-rotate-x, 0deg)) rotateY(var(--cp-rotate-y, 0deg)) scale(var(--cp-scale, 1));
		}

		#care-plans .pricing-card::before {
			content: '';
			position: absolute;
			inset: 0;
			background: linear-gradient(90deg, rgba(79, 70, 229, 0.08), rgba(99, 102, 241, 0.16));
			opacity: 0;
			transition: opacity 320ms ease;
			pointer-events: none;
		}

		#care-plans .pricing-card::after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 5px;
			background: linear-gradient(90deg, var(--color-grad-start), var(--color-grad-end));
			transform-origin: left;
			transform: scaleX(0);
			transition: transform 320ms ease;
		}

		#care-plans .pricing-card:hover,
		#care-plans .pricing-card:focus-within {
			box-shadow: 0 30px 86px rgba(15, 23, 42, 0.24);
			--cp-translate-y: -15px;
			--cp-scale: 1.02;
		}

		#care-plans .pricing-card:hover::before,
		#care-plans .pricing-card:focus-within::before {
			opacity: 1;
		}

		#care-plans .pricing-card:hover::after,
		#care-plans .pricing-card:focus-within::after {
			transform: scaleX(1);
		}

		#care-plans .pricing-card.is-visible {
			opacity: 1;
			--cp-translate-y: 0px;
		}

		#care-plans .pricing-card .plan-name {
			font-size: clamp(22px, 3vw, 28px);
			font-weight: 700;
			margin-bottom: 18px;
			color: inherit;
		}

		#care-plans .pricing-card .plan-price {
			display: flex;
			align-items: baseline;
			gap: 8px;
			font-size: clamp(36px, 4vw, 48px);
			font-weight: 800;
			color: var(--color-primary);
			margin-bottom: clamp(24px, 3vw, 32px);
		}

		#care-plans .pricing-card .plan-price .currency {
			font-size: clamp(24px, 2.7vw, 32px);
		}

		#care-plans .pricing-card .plan-price .period {
			font-size: clamp(16px, 2vw, 18px);
			font-weight: 500;
			color: var(--color-text-secondary);
		}

		#care-plans .pricing-card .features-list {
			list-style: none;
			margin-bottom: clamp(28px, 4vw, 36px);
		}

		#care-plans .pricing-card .features-list li {
			display: flex;
			align-items: flex-start;
			gap: 12px;
			border-bottom: 1px solid rgba(15, 23, 42, 0.08);
			padding: 14px 0;
			font-size: 16px;
			line-height: 1.6;
			color: var(--color-text-secondary);
			opacity: 0;
			transform: translateX(-16px);
			animation: fadeInLeft 600ms ease-out forwards;
		}

		#care-plans .pricing-card .features-list li::before {
			content: '✓';
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 24px;
			height: 24px;
			border-radius: 999px;
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
			color: #ffffff;
			font-weight: 700;
			flex-shrink: 0;
			margin-top: 2px;
		}

		#care-plans .pricing-card .features-list li:nth-child(1) { animation-delay: 420ms; }
		#care-plans .pricing-card .features-list li:nth-child(2) { animation-delay: 520ms; }
		#care-plans .pricing-card .features-list li:nth-child(3) { animation-delay: 620ms; }
		#care-plans .pricing-card .features-list li:nth-child(4) { animation-delay: 720ms; }
		#care-plans .pricing-card .features-list li:nth-child(5) { animation-delay: 820ms; }
		#care-plans .pricing-card .features-list li:nth-child(6) { animation-delay: 920ms; }
		#care-plans .pricing-card .features-list li:nth-child(7) { animation-delay: 1020ms; }

		#care-plans .pricing-card .cta-button {
			position: relative;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 100%;
			padding: 18px 32px;
			border-radius: 999px;
			font-size: 16px;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 1px;
			cursor: pointer;
			overflow: hidden;
			transition: transform 260ms ease, box-shadow 260ms ease, color 260ms ease, background 260ms ease;
		}

		#care-plans .pricing-card .cta-button span {
			position: relative;
			z-index: 2;
		}

		#care-plans .pricing-card .cta-button::before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 0;
			height: 0;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.24);
			transform: translate(-50%, -50%);
			transition: width 460ms ease, height 460ms ease;
			z-index: 1;
		}

		#care-plans .pricing-card .cta-button:hover::before,
		#care-plans .pricing-card .cta-button:focus-visible::before {
			width: 320px;
			height: 320px;
		}

		#care-plans .pricing-card .cta-button:hover,
		#care-plans .pricing-card .cta-button:focus-visible {
			transform: translateY(-3px);
			box-shadow: 0 18px 40px rgba(79, 70, 229, 0.32);
		}

		#care-plans .cta-button.cta-primary {
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
			color: #ffffff;
		}

		#care-plans .cta-button.cta-secondary {
			background: #ffffff;
			color: var(--color-primary);
			border: 2px solid rgba(255, 255, 255, 0.5);
		}

		#care-plans .cta-button.cta-secondary:hover,
		#care-plans .cta-button.cta-secondary:focus-visible {
			background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.35));
			color: #ffffff;
			box-shadow: 0 16px 36px rgba(15, 23, 42, 0.2);
		}

		#care-plans .pricing-card.featured {
			background: linear-gradient(135deg, rgba(255, 255, 255, 0.16), rgba(236, 233, 255, 0.28));
			color: #ffffff;
			--cp-scale: 1.04;
			box-shadow: 0 28px 95px rgba(79, 70, 229, 0.45);
		}

		#care-plans .pricing-card.featured:hover,
		#care-plans .pricing-card.featured:focus-within {
			--cp-scale: 1.07;
		}

		#care-plans .pricing-card.featured::before {
			background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.12));
		}

		#care-plans .pricing-card.featured .plan-name,
		#care-plans .pricing-card.featured .plan-price {
			color: #ffffff;
		}

		#care-plans .pricing-card.featured .plan-price .period {
			color: rgba(255, 255, 255, 0.85);
		}

		#care-plans .pricing-card.featured .features-list li {
			color: rgba(255, 255, 255, 0.95);
			border-bottom-color: rgba(255, 255, 255, 0.35);
		}

		#care-plans .pricing-card.featured .features-list li::before {
			background: #ffffff;
			color: var(--color-primary);
		}

		#care-plans .pricing-card.featured .cta-button {
			background: #ffffff;
			color: var(--color-primary);
		}

		#care-plans .pricing-card.featured .cta-button:hover,
		#care-plans .pricing-card.featured .cta-button:focus-visible {
			background: #ffd700;
			color: #333333;
			transform: translateY(-4px) scale(1.04);
			box-shadow: 0 20px 48px rgba(255, 215, 0, 0.28);
		}

		#care-plans .popular-badge {
			position: absolute;
			top: 20px;
			right: 20px;
			padding: 8px 18px;
			border-radius: 999px;
			background: #ffd700;
			color: #333333;
			font-size: 12px;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			animation: bounce 2.2s infinite;
		}

		#care-plans .floating-shapes {
			position: absolute;
			inset: 0;
			z-index: 0;
			pointer-events: none;
			overflow: hidden;
		}

		#care-plans .shape {
			position: absolute;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.16);
			filter: blur(0);
			transform: translate3d(0, 0, 0);
		}

		#care-plans .shape[data-shape="1"] {
			width: 180px;
			height: 180px;
			top: -60px;
			left: -40px;
			animation: float 18s ease-in-out infinite;
			animation-delay: 0s;
		}

		#care-plans .shape[data-shape="2"] {
			width: 260px;
			height: 260px;
			bottom: -90px;
			right: -60px;
			animation: float 22s ease-in-out infinite;
			animation-delay: 3s;
		}

		#care-plans .shape[data-shape="3"] {
			width: 140px;
			height: 140px;
			top: 40%;
			left: 65%;
			animation: float 24s ease-in-out infinite;
			animation-delay: 6s;
		}

		#care-plans .ripple {
			position: absolute;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.35);
			transform: scale(0);
			animation: ripple 600ms ease-out forwards;
			pointer-events: none;
			z-index: 1;
			opacity: 0.75;
		}

		@keyframes fadeInDown {
			from {
				opacity: 0;
				transform: translateY(-48px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes fadeInLeft {
			from {
				opacity: 0;
				transform: translateX(-18px);
			}

			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		@keyframes pulse {
			0%, 100% {
				transform: scale(1);
			}
			50% {
				transform: scale(1.05);
			}
		}

		@keyframes bounce {
			0%, 100% {
				transform: translateY(0);
			}
			50% {
				transform: translateY(-8px);
			}
		}

		@keyframes float {
			0%, 100% {
				transform: translateY(0) scale(1);
			}
			50% {
				transform: translateY(-40px) scale(1.05);
			}
		}

		@keyframes ripple {
			from {
				transform: scale(0);
				opacity: 0.8;
			}
			to {
				transform: scale(1.2);
				opacity: 0;
			}
		}

		@media (max-width: 900px) {
			#care-plans .pricing-grid {
				grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
			}
		}

		@media (max-width: 768px) {
			#care-plans .care-plans-modern__surface {
				padding: clamp(32px, 9vw, 56px);
			}

			#care-plans .pricing-card,
			#care-plans .pricing-card.featured {
				--cp-scale: 1;
			}

			#care-plans .pricing-card:hover,
			#care-plans .pricing-card:focus-within {
				--cp-translate-y: -10px;
			}
		}

		@media (max-width: 600px) {
			#care-plans .section-header {
				margin-bottom: 48px;
			}

			#care-plans .pricing-card {
				padding: clamp(28px, 9vw, 40px);
			}

			#care-plans .popular-badge {
				right: 16px;
				top: 16px;
			}
		}
	</style>

	<script>
		(() => {
			const section = document.getElementById('care-plans');

			if (!section) {
				return;
			}

			const shapes = section.querySelectorAll('.shape');
			const cards = section.querySelectorAll('.pricing-card');
			const buttons = section.querySelectorAll('.cta-button');
			const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

			const revealCards = () => {
				requestAnimationFrame(() => {
					cards.forEach((card) => card.classList.add('is-visible'));
				});
			};

			if ('IntersectionObserver' in window && !prefersReducedMotion.matches) {
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
						rootMargin: '0px 0px -10% 0px',
					}
				);

				cards.forEach((card) => observer.observe(card));
			} else {
				revealCards();
			}

			if (!prefersReducedMotion.matches) {
				const updateShapes = () => {
					const rect = section.getBoundingClientRect();
					const progress = Math.min(1, Math.max(0, 1 - rect.top / (window.innerHeight + rect.height)));

					shapes.forEach((shape, index) => {
						const depth = (index + 1) * 18;
						const translateY = progress * depth * 1.5;
						const rotate = progress * depth * 0.4;

						shape.style.transform = `translateY(${translateY}px) rotate(${rotate}deg)`;
					});
				};

				updateShapes();
				window.addEventListener('scroll', updateShapes, { passive: true });

				cards.forEach((card) => {
					card.addEventListener('mousemove', (event) => {
						const rect = card.getBoundingClientRect();
						const offsetX = event.clientX - rect.left;
						const offsetY = event.clientY - rect.top;
						const rotateY = ((offsetX / rect.width) - 0.5) * 12;
						const rotateX = ((offsetY / rect.height) - 0.5) * -8;

						card.style.setProperty('--cp-rotate-x', `${rotateX.toFixed(2)}deg`);
						card.style.setProperty('--cp-rotate-y', `${rotateY.toFixed(2)}deg`);
					});

					card.addEventListener('mouseleave', () => {
						card.style.setProperty('--cp-rotate-x', '0deg');
						card.style.setProperty('--cp-rotate-y', '0deg');
					});
				});
			}

			buttons.forEach((button) => {
				button.addEventListener('click', (event) => {
					const rect = button.getBoundingClientRect();
					const ripple = document.createElement('span');
					const size = Math.max(rect.width, rect.height);
					const x = event.clientX - rect.left - size / 2;
					const y = event.clientY - rect.top - size / 2;

					ripple.className = 'ripple';
					ripple.style.width = `${size}px`;
					ripple.style.height = `${size}px`;
					ripple.style.left = `${x}px`;
					ripple.style.top = `${y}px`;

					button.appendChild(ripple);
					setTimeout(() => ripple.remove(), 600);

					const target = button.getAttribute('data-scroll-target');

					if (!target) {
						return;
					}

					const targetElement = document.querySelector(target);

					if (targetElement) {
						targetElement.scrollIntoView({
							behavior: prefersReducedMotion.matches ? 'auto' : 'smooth',
							block: 'start',
						});
					} else {
						window.location.href = target;
					}
				});
			});
		})();
	</script>
</section>

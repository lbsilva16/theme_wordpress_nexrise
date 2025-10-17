<?php
/**
 * Portfolio section.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cards = [
	[
		'image'        => 'http://localhost:8000/wp-content/uploads/2025/10/Power-your-business-with-a-NexRise-website.png',
		'image_alt'    => __( 'J&C Funeral Home website preview', 'nw-avada-like' ),
		'overlay_title'       => __( 'J&C Funeral Home', 'nw-avada-like' ),
		'overlay_description' => __( 'A dignified and compassionate online presence for a trusted funeral home.', 'nw-avada-like' ),
		'title'       => __( 'J&C Funeral Home', 'nw-avada-like' ),
		'description' => __( 'Elegant website design honoring memories with respect and dignity. Features online obituaries, service planning, and family resources.', 'nw-avada-like' ),
		'tags'        => [
			__( 'WordPress', 'nw-avada-like' ),
			__( 'Responsive', 'nw-avada-like' ),
			__( 'SEO Optimized', 'nw-avada-like' ),
		],
	],
	[
		'image'        => 'http://localhost:8000/wp-content/uploads/2025/10/They-trusted-NexRise.-Now-its-your-turn.png',
		'image_alt'    => __( 'ArteCas Furniture website preview', 'nw-avada-like' ),
		'overlay_title'       => __( 'ArteCas Furniture', 'nw-avada-like' ),
		'overlay_description' => __( 'Showcase stunning furniture collections with an immersive visual experience.', 'nw-avada-like' ),
		'title'       => __( 'ArteCas Furniture', 'nw-avada-like' ),
		'description' => __( 'Modern e-commerce platform featuring custom furniture designs with 3D product visualization and seamless checkout experience.', 'nw-avada-like' ),
		'tags'        => [
			__( 'E-commerce', 'nw-avada-like' ),
			__( 'Custom Design', 'nw-avada-like' ),
			__( 'High Performance', 'nw-avada-like' ),
		],
	],
	[
		'image'        => 'http://localhost:8000/wp-content/uploads/2025/10/NexRise-This-could-be-your-website.-Lets-make-it-real.png',
		'image_alt'    => __( 'Little Paws PetShop website preview', 'nw-avada-like' ),
		'overlay_title'       => __( 'Little Paws PetShop', 'nw-avada-like' ),
		'overlay_description' => __( 'Vibrant online store for pet lovers with advanced inventory management.', 'nw-avada-like' ),
		'title'       => __( 'Little Paws PetShop', 'nw-avada-like' ),
		'description' => __( 'Complete pet care marketplace with product catalog, grooming service bookings, and customer loyalty program integration.', 'nw-avada-like' ),
		'tags'        => [
			__( 'WooCommerce', 'nw-avada-like' ),
			__( 'Booking System', 'nw-avada-like' ),
			__( 'Mobile First', 'nw-avada-like' ),
		],
	],
	[
		'image'        => 'http://localhost:8000/wp-content/uploads/2025/10/Your-business-deserves-a-website-like-this.-Built-by-NexRise.png',
		'image_alt'    => __( 'Lilies Fashion Store website preview', 'nw-avada-like' ),
		'overlay_title'       => __( 'Lilies Fashion Store', 'nw-avada-like' ),
		'overlay_description' => __( 'Trendy fashion destination with personalized shopping experience.', 'nw-avada-like' ),
		'title'       => __( 'Lilies Fashion Store', 'nw-avada-like' ),
		'description' => __( 'Sophisticated fashion e-commerce with campaign landing pages, size guides, wishlist functionality, and social media integration.', 'nw-avada-like' ),
		'tags'        => [
			__( 'Fashion', 'nw-avada-like' ),
			__( 'Dynamic', 'nw-avada-like' ),
			__( 'Conversion Focused', 'nw-avada-like' ),
		],
	],
];
?>
<section id="portfolio" class="nx-section nx-section--soft nx-nr-portfolio-section" style="scroll-margin-top: 96px;">
	<div class="nx-nr-portfolio-section__floating" aria-hidden="true">
		<span class="nx-nr-portfolio-section__shape nx-nr-portfolio-section__shape--one"></span>
		<span class="nx-nr-portfolio-section__shape nx-nr-portfolio-section__shape--two"></span>
		<span class="nx-nr-portfolio-section__shape nx-nr-portfolio-section__shape--three"></span>
	</div>
	<div class="nx-container nx-nr-portfolio">
		<header class="nx-nr-portfolio__header">
			<span class="nx-kicker nx-nr-portfolio__badge"><?php esc_html_e( 'Recent Work', 'nw-avada-like' ); ?></span>
			<h2 class="nx-h2 nx-nr-portfolio__title"><?php esc_html_e( 'Real Websites. Real Growth.', 'nw-avada-like' ); ?></h2>
			<p class="nx-nr-portfolio__subtitle"><?php esc_html_e( 'Transforming businesses with stunning, high-performance websites that drive results and exceed expectations.', 'nw-avada-like' ); ?></p>
		</header>

		<div class="nx-nr-portfolio__grid">
			<?php foreach ( $cards as $index => $card ) : ?>
				<article class="nx-nr-portfolio__card" data-card-index="<?php echo esc_attr( $index ); ?>">
					<div class="nx-nr-portfolio__media">
						<img class="nx-nr-portfolio__image" src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo esc_attr( $card['image_alt'] ); ?>" loading="lazy" decoding="async" />
						<div class="nx-nr-portfolio__overlay">
							<div class="nx-nr-portfolio__overlay-content">
								<h3 class="nx-nr-portfolio__overlay-title"><?php echo esc_html( $card['overlay_title'] ); ?></h3>
								<p class="nx-nr-portfolio__overlay-description"><?php echo esc_html( $card['overlay_description'] ); ?></p>
							</div>
						</div>
					</div>
					<div class="nx-nr-portfolio__body">
						<h3 class="nx-nr-portfolio__card-title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="nx-nr-portfolio__description"><?php echo esc_html( $card['description'] ); ?></p>
						<div class="nx-nr-portfolio__tags">
							<?php foreach ( $card['tags'] as $tag ) : ?>
								<span class="nx-nr-portfolio__tag"><?php echo esc_html( $tag ); ?></span>
							<?php endforeach; ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="nx-nr-portfolio__cta">
			<button class="nx-nr-portfolio__button" type="button" onclick="window.location.href='#final-cta';">
				<?php esc_html_e( 'Start Your Own Project', 'nw-avada-like' ); ?>
				<span class="nx-nr-portfolio__button-arrow" aria-hidden="true">→</span>
			</button>
		</div>
	</div>

	<style>
		#portfolio.nx-nr-portfolio-section {
			--nx-max: 1320px;
			position: relative;
			overflow: hidden;
			padding: clamp(80px, 12vw, 120px) 0;
			background: linear-gradient(135deg, rgba(79, 70, 229, 0.08), rgba(20, 184, 166, 0.12));
		}

		#portfolio .nx-nr-portfolio {
			position: relative;
			z-index: 1;
			max-width: min(1280px, 94vw);
		}

		#portfolio .nx-nr-portfolio__header {
			text-align: center;
			margin-bottom: clamp(48px, 9vw, 96px);
		}

		#portfolio .nx-nr-portfolio__badge {
			display: inline-block;
			padding: 0;
			border-radius: 0;
			background: transparent;
			border: 0;
			color: var(--color-grad-start);
			font-weight: 700;
			letter-spacing: 0.18em;
			text-transform: uppercase;
			font-size: 0.85rem;
			backdrop-filter: none;
			animation: nrFadeInDown 0.8s ease both;
		}

		#portfolio .nx-nr-portfolio__title {
			margin: 24px auto 16px;
			max-width: 780px;
			color: var(--color-surface-light);
			font-family: var(--font-display);
			font-weight: 700;
			line-height: 1.15;
			text-shadow: 0 14px 40px rgba(15, 23, 42, 0.25);
			animation: nrFadeInUp 1s ease both;
		}

		#portfolio .nx-nr-portfolio__subtitle {
			margin: 0 auto;
			max-width: 720px;
			color: rgba(15, 23, 42, 0.72);
			font-size: clamp(1rem, 2vw, 1.2rem);
			line-height: 1.7;
			animation: nrFadeInUp 1.2s ease both;
		}

		#portfolio .nx-nr-portfolio__grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: clamp(24px, 4vw, 40px);
			margin-top: clamp(48px, 8vw, 72px);
		}

		#portfolio .nx-nr-portfolio__card {
			position: relative;
			display: flex;
			flex-direction: column;
			border-radius: 24px;
			overflow: hidden;
			background: var(--color-surface-panel);
			box-shadow: 0 20px 60px rgba(15, 23, 42, 0.22);
			transition:
				transform 0.55s cubic-bezier(0.34, 1.56, 0.64, 1),
				box-shadow 0.45s ease,
				opacity 0.45s ease;
			opacity: 0;
			--nr-parallax-x: 0px;
			--nr-parallax-y: 0px;
			--nr-hover-translate: 0px;
			--nr-scale: 0.96;
			transform: translate3d(var(--nr-parallax-x), calc(32px + var(--nr-parallax-y) + var(--nr-hover-translate)), 0) scale(var(--nr-scale));
		}

		#portfolio .nx-nr-portfolio__card.is-visible {
			opacity: 1;
			--nr-scale: 1;
			transform: translate3d(var(--nr-parallax-x), calc(var(--nr-parallax-y) + var(--nr-hover-translate)), 0) scale(var(--nr-scale));
		}

		#portfolio .nx-nr-portfolio__card.is-hover {
			--nr-hover-translate: -16px;
			--nr-scale: 1.03;
			box-shadow: 0 26px 70px rgba(15, 23, 42, 0.32);
			z-index: 2;
		}

		#portfolio .nx-nr-portfolio__media {
			position: relative;
			height: clamp(240px, 30vw, 340px);
			overflow: hidden;
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
		}

		#portfolio .nx-nr-portfolio__image {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.7s cubic-bezier(0.34, 1.56, 0.64, 1);
			filter: brightness(0.98);
		}

		#portfolio .nx-nr-portfolio__card.is-hover .nx-nr-portfolio__image {
			transform: scale(1.12) rotate(1.5deg);
			filter: brightness(1.06);
		}

		#portfolio .nx-nr-portfolio__overlay {
			position: absolute;
			inset: 0;
			display: flex;
			align-items: flex-end;
			padding: 30px;
			background: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(15, 23, 42, 0.75) 100%);
			opacity: 0;
			transition: opacity 0.45s ease;
		}

		#portfolio .nx-nr-portfolio__card.is-hover .nx-nr-portfolio__overlay {
			opacity: 1;
		}

		#portfolio .nx-nr-portfolio__overlay-content {
			transform: translateY(18px);
			transition: transform 0.45s ease;
		}

		#portfolio .nx-nr-portfolio__card.is-hover .nx-nr-portfolio__overlay-content {
			transform: translateY(0);
		}

		#portfolio .nx-nr-portfolio__overlay-title {
			margin: 0 0 10px;
			color: #ffffff;
			font-size: 1.35rem;
			font-weight: 700;
			text-shadow: 0 2px 12px rgba(15, 23, 42, 0.5);
		}

		#portfolio .nx-nr-portfolio__overlay-description {
			margin: 0;
			color: rgba(255, 255, 255, 0.9);
			font-size: 0.98rem;
			line-height: 1.6;
		}

		#portfolio .nx-nr-portfolio__body {
			padding: clamp(24px, 4vw, 32px);
			display: flex;
			flex-direction: column;
			gap: 16px;
			background: #ffffff;
		}

		#portfolio .nx-nr-portfolio__card-title {
			margin: 0;
			color: var(--color-text-primary);
			font-family: var(--font-display);
			font-size: 1.45rem;
			font-weight: 700;
			transition: color 0.3s ease;
		}

		#portfolio .nx-nr-portfolio__card.is-hover .nx-nr-portfolio__card-title {
			color: var(--color-grad-start);
		}

		#portfolio .nx-nr-portfolio__description {
			margin: 0;
			color: var(--color-text-secondary);
			font-size: 0.98rem;
			line-height: 1.7;
		}

		#portfolio .nx-nr-portfolio__tags {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
		}

		#portfolio .nx-nr-portfolio__tag {
			display: inline-flex;
			align-items: center;
			gap: 6px;
			padding: 6px 16px;
			border-radius: 999px;
			font-size: 0.85rem;
			font-weight: 600;
			letter-spacing: 0.4px;
			color: #ffffff;
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
			transition: transform 0.3s ease;
			will-change: transform;
		}

		#portfolio .nx-nr-portfolio__card.is-hover .nx-nr-portfolio__tag {
			transform: translateY(-3px);
		}

		#portfolio .nx-nr-portfolio__cta {
			margin-top: clamp(56px, 10vw, 80px);
			text-align: center;
		}

		#portfolio .nx-nr-portfolio__button {
			display: inline-flex;
			align-items: center;
			gap: 12px;
			padding: 20px 44px;
			border-radius: 50px;
			font-size: 1.06rem;
			font-weight: 700;
			font-family: var(--font-display);
			color: var(--color-grad-start);
			background: #ffffff;
			border: none;
			cursor: pointer;
			box-shadow: 0 14px 40px rgba(15, 23, 42, 0.2);
			transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease, background 0.4s ease, color 0.4s ease;
			animation: nrPulse 2.4s ease infinite;
		}

		#portfolio .nx-nr-portfolio__button:hover {
			transform: translateY(-6px) scale(1.04);
			background: linear-gradient(135deg, var(--color-grad-start), var(--color-grad-end));
			color: #ffffff;
			box-shadow: 0 20px 60px rgba(15, 23, 42, 0.28);
		}

		#portfolio .nx-nr-portfolio__button-arrow {
			font-size: 1.25rem;
			transition: transform 0.3s ease;
		}

		#portfolio .nx-nr-portfolio__button:hover .nx-nr-portfolio__button-arrow {
			transform: translateX(8px);
		}

		#portfolio .nx-nr-portfolio-section__floating {
			position: absolute;
			inset: 0;
			pointer-events: none;
			z-index: 0;
			overflow: hidden;
		}

		#portfolio .nx-nr-portfolio-section__shape {
			position: absolute;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.22);
			box-shadow: 0 40px 120px rgba(79, 70, 229, 0.18);
			animation: nrFloat 20s ease-in-out infinite;
		}

		#portfolio .nx-nr-portfolio-section__shape--one {
			width: 320px;
			height: 320px;
			top: -160px;
			left: -120px;
			animation-delay: 0s;
		}

		#portfolio .nx-nr-portfolio-section__shape--two {
			width: 220px;
			height: 220px;
			right: -60px;
			top: 46%;
			animation-delay: 6s;
		}

		#portfolio .nx-nr-portfolio-section__shape--three {
			width: 160px;
			height: 160px;
			left: 18%;
			bottom: 12%;
			animation-delay: 10s;
		}

		@keyframes nrFadeInDown {
			from {
				opacity: 0;
				transform: translateY(-24px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes nrFadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes nrFloat {
			0%,
			100% {
				transform: translateY(0) rotate(0deg);
			}

			50% {
				transform: translateY(-32px) rotate(180deg);
			}
		}

		@keyframes nrPulse {
			0%,
			100% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.04);
			}
		}

		@media (max-width: 992px) {
			#portfolio .nx-nr-portfolio__title {
				font-size: clamp(2.25rem, 6vw, 3.4rem);
			}

			#portfolio .nx-nr-portfolio__media {
				height: clamp(220px, 40vw, 320px);
			}
		}

		@media (min-width: 1200px) {
			#portfolio .nx-nr-portfolio__grid {
				grid-template-columns: repeat(4, minmax(0, 1fr));
				gap: 32px;
			}
		}

		@media (max-width: 768px) {
			#portfolio.nx-nr-portfolio-section {
				padding: clamp(64px, 14vw, 80px) 0;
			}

			#portfolio .nx-nr-portfolio__grid {
				grid-template-columns: 1fr;
				gap: 28px;
			}

			#portfolio .nx-nr-portfolio__badge {
				padding: 10px 24px;
				letter-spacing: 2px;
				font-size: 0.75rem;
			}

			#portfolio .nx-nr-portfolio__card {
				--nr-scale: 1;
			}
		}

		@media (max-width: 480px) {
			#portfolio .nx-nr-portfolio__body {
				padding: 24px;
			}

			#portfolio .nx-nr-portfolio__card-title {
				font-size: 1.3rem;
			}

			#portfolio .nx-nr-portfolio__description {
				font-size: 0.94rem;
			}

			#portfolio .nx-nr-portfolio__button {
				padding: 16px 32px;
				font-size: 0.98rem;
			}
		}

		@media (prefers-reduced-motion: reduce) {
			#portfolio .nx-nr-portfolio__badge,
			#portfolio .nx-nr-portfolio__title,
			#portfolio .nx-nr-portfolio__subtitle,
			#portfolio .nx-nr-portfolio__card,
			#portfolio .nx-nr-portfolio__image,
			#portfolio .nx-nr-portfolio__overlay,
			#portfolio .nx-nr-portfolio__overlay-content,
			#portfolio .nx-nr-portfolio__tag,
			#portfolio .nx-nr-portfolio__button {
				animation: none !important;
				transition: none !important;
			}

			#portfolio .nx-nr-portfolio__card {
				opacity: 1;
				transform: none !important;
			}

			#portfolio .nx-nr-portfolio__card.is-hover {
				--nr-hover-translate: 0;
				--nr-scale: 1;
			}

			#portfolio .nx-nr-portfolio-section__shape {
				animation: none;
			}
		}
	</style>

	<script>
		(function () {
			const section = document.querySelector('#portfolio.nx-nr-portfolio-section');

			if (!section) {
				return;
			}

			const cards = Array.from(section.querySelectorAll('.nx-nr-portfolio__card'));

			if (cards.length === 0) {
				return;
			}

			const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

			const revealCard = (card) => {
				card.classList.add('is-visible');
			};

			if (!prefersReducedMotion && 'IntersectionObserver' in window) {
				const observer = new IntersectionObserver(
					(entries, obs) => {
						entries.forEach((entry) => {
							if (entry.isIntersecting) {
								revealCard(entry.target);
								obs.unobserve(entry.target);
							}
						});
					},
					{ threshold: 0.25, rootMargin: '0px 0px -80px 0px' }
				);

				cards.forEach((card) => observer.observe(card));
			} else {
				cards.forEach(revealCard);
			}

			if (prefersReducedMotion) {
				return;
			}

			const grid = section.querySelector('.nx-nr-portfolio__grid');

			if (!grid) {
				return;
			}

			let animationFrameId = null;

			const resetParallax = () => {
				if (animationFrameId) {
					cancelAnimationFrame(animationFrameId);
					animationFrameId = null;
				}

				cards.forEach((card) => {
					card.style.setProperty('--nr-parallax-x', '0px');
					card.style.setProperty('--nr-parallax-y', '0px');
				});
			};

			const updateParallax = (event) => {
				const rect = grid.getBoundingClientRect();

				if (rect.width === 0 || rect.height === 0) {
					return;
				}

				const offsetX = (event.clientX - rect.left) / rect.width - 0.5;
				const offsetY = (event.clientY - rect.top) / rect.height - 0.5;

				cards.forEach((card, index) => {
					const depth = (index + 1) * 4;
					card.style.setProperty('--nr-parallax-x', `${offsetX * depth * 6}px`);
					card.style.setProperty('--nr-parallax-y', `${offsetY * depth * 6}px`);
				});
			};

			const handlePointerMove = (event) => {
				if (animationFrameId) {
					cancelAnimationFrame(animationFrameId);
				}

				animationFrameId = requestAnimationFrame(() => updateParallax(event));
			};

			grid.addEventListener('pointermove', handlePointerMove);
			grid.addEventListener('pointerleave', resetParallax);

			cards.forEach((card) => {
				card.addEventListener('mouseenter', () => {
					card.classList.add('is-hover');
				});

				card.addEventListener('mouseleave', () => {
					card.classList.remove('is-hover');
				});
			});
		})();
	</script>
</section>

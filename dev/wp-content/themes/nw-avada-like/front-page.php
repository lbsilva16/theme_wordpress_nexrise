<?php
/**
 * Template da pagina inicial.
 *
 * @package nw-avada-like
 */

get_header();
?>
<main id="main-content" class="site-main">
  <section class="hero" data-hero>
    <div class="section-wrapper hero__inner">
      <div class="hero__content">
        <p class="hero__eyebrow"><?php esc_html_e( 'Trusted by entrepreneurs and small businesses across the US', 'nw-avada-like' ); ?></p>
        <h1 class="hero__title">
          <?php esc_html_e( 'We Build Websites That Sell', 'nw-avada-like' ); ?>
        </h1>

        <p class="hero__subtitle"><?php esc_html_e( 'From WordPress premium themes to fully custom development - we design, build, and launch websites that grow your business.', 'nw-avada-like' ); ?></p>

        <!-- Grid de servicos 2x2 -->
        <div class="hero__services-grid">
          <div class="hero__service">
            <span class="hero__service-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />
                <path d="M12 3c3 3 3 15 0 18m9-9H3m15.5 4.5c-2.5-1-5.5-1-8 0m8-9c-2.5 1-5.5 1-8 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <span><?php esc_html_e( 'Website Development', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9.75 3L4.5 13.5h6l-1.5 7.5L19.5 9h-6l1.5-6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span><?php esc_html_e( 'Fast & Secure', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 5h14l-1.2 8.4a3 3 0 0 1-3 2.6H9.5a3 3 0 0 1-3-2.3L5 4H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="9.5" cy="19" r="1.5" stroke="currentColor" stroke-width="1.5" />
                <circle cx="17.5" cy="19" r="1.5" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>
            <span><?php esc_html_e( 'Online Stores (eCommerce)', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M5 17L10.5 11.5l3 3L21 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 7h6v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5 5h4v4H5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                <path d="M5 21h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <span><?php esc_html_e( 'SEO Optimized', 'nw-avada-like' ); ?></span>
          </div>
        </div>

        <!-- Botoes lado a lado -->
        <div class="hero__actions">
          <a class="button button--primary button--large" href="#cta-final"><?php esc_html_e( 'Get My Website Today', 'nw-avada-like' ); ?></a>
          <a class="button button--ghost button--large" href="#faq"><?php esc_html_e( 'Request a Free Quote', 'nw-avada-like' ); ?></a>
        </div>
      </div>
      <div class="hero__media">
        <div class="hero-media-slider" data-hero-media-slider>
          <div class="hero-media-slider__viewport">
            <div class="hero-media-slider__track" style="transform: translateX(0%);">
              <div class="hero-media-slider__slide is-active" aria-hidden="false">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image-1.png" alt="Hero Image 1" class="hero__media-image">
              </div>
              <div class="hero-media-slider__slide" aria-hidden="true">
                <!-- Substitua o src abaixo pela sua segunda imagem -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image-2.png" alt="Hero Image 2" class="hero__media-image">
              </div>
            </div>
          </div>
          <div class="hero-media-slider__dots" role="tablist" aria-label="Hero media slider navigation">
            <button class="hero-media-slider__dot is-active" role="tab" aria-selected="true" aria-controls="hero-media-slide-1" data-slide="0"><span class="visually-hidden">Slide 1</span></button>
            <button class="hero-media-slider__dot" role="tab" aria-selected="false" aria-controls="hero-media-slide-2" data-slide="1"><span class="visually-hidden">Slide 2</span></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portfolio" id="portfolio">
    <div class="section-wrapper portfolio__inner">
      <header class="section-heading">
        <h2><?php esc_html_e( 'From Law Firms to Online Stores - We Design for Growth.', 'nw-avada-like' ); ?></h2>
        <p><?php esc_html_e( 'Custom landing pages and eCommerce websites built to grow your business.', 'nw-avada-like' ); ?></p>
      </header>
      <div class="portfolio__images">
        <div class="container-imagem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/law-firm-landing.png" alt="Law Firm Landing Page">
        </div>
        <div class="container-imagem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hvac-landing.png" alt="HVAC Landing Page">
        </div>
        <div class="container-imagem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ecommerce-website.jpg" alt="E-commerce Website">
        </div>
      </div>
    </div>
  </section>


  <?php
  get_template_part( 'template-parts/sections/section-why-choose-us' );
  get_template_part( 'template-parts/sections/section-outcomes' );
  get_template_part( 'template-parts/sections/section-portfolio' );
  get_template_part( 'template-parts/sections/section-process' );
  get_template_part( 'template-parts/sections/section-packages' );
  get_template_part( 'template-parts/sections/section-addons' );
  get_template_part( 'template-parts/sections/section-care-plans' );
  get_template_part( 'template-parts/sections/section-testimonials' );
  get_template_part( 'template-parts/sections/section-faq' );
  get_template_part( 'template-parts/sections/section-final-cta' );
  ?>
</main>
<?php
get_footer();

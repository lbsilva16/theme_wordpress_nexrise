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
        
        <p class="hero__subtitle"><?php esc_html_e( 'From WordPress premium themes to fully custom development ??" we design, build, and launch websites that grow your business.', 'nw-avada-like' ); ?></p>
        
        <!-- Grid de servi�os 2x2 -->
        <div class="hero__services-grid">
          <div class="hero__service">
            <span class="hero__service-icon">?YO?</span>
            <span><?php esc_html_e( 'Website Development', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon">?s?</span>
            <span><?php esc_html_e( 'Fast & Secure', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon">?Y>'</span>
            <span><?php esc_html_e( 'Online Stores (eCommerce)', 'nw-avada-like' ); ?></span>
          </div>
          <div class="hero__service">
            <span class="hero__service-icon">?Y"^</span>
            <span><?php esc_html_e( 'SEO Optimized', 'nw-avada-like' ); ?></span>
          </div>
        </div>
        
        <!-- Bot�es lado a lado -->
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
                <img src="http://localhost:8000/wp-content/uploads/2025/10/create-your-website-with-professionals.png" alt="Hero Image 1" class="hero__media-image">
              </div>
              <div class="hero-media-slider__slide" aria-hidden="true">
                <!-- Substitua o src abaixo pela sua segunda imagem -->
                <img src="http://localhost:8000/wp-content/uploads/2025/10/Imagem-banner.png" alt="Hero Image 2" class="hero__media-image">
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
        <h2><?php esc_html_e( 'From Law Firms to Online Stores ??" We Design for Growth.', 'nw-avada-like' ); ?></h2>
        <p><?php esc_html_e( 'Custom landing pages and eCommerce websites built to grow your business.', 'nw-avada-like' ); ?></p>
      </header>
      <div class="portfolio__images">
        <div class="container-imagem">
          <img src="http://localhost:8000/wp-content/uploads/2025/10/NexRise-??"-Build-Your-Law-Firm-Landing-Page.png" alt="Law Firm Landing Page">
        </div>
        <div class="container-imagem">
          <img src="http://localhost:8000/wp-content/uploads/2025/10/NexRise-??"-Build-Your-HVAC-Landing-Page.png" alt="HVAC Landing Page">
        </div>
        <div class="container-imagem">
          <img src="http://localhost:8000/wp-content/uploads/2025/10/NexRise-We-build-e-commerce-websites-that-turn-your-passion-into-profit-scaled.jpg" alt="E-commerce Website">
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
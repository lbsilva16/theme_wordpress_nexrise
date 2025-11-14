<?php
/**
 * Template do rodape.
 *
 * @package nw-avada-like
 */

?>
<footer class="nexrise-footer">
  <div class="nexrise-footer__content">
    <div class="nexrise-footer__grid">
      <div class="nexrise-footer__brand">
        <div class="nexrise-footer__logo-container">
          <div class="nexrise-footer__logo">
            <?php
            if ( has_custom_logo() ) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              echo wp_get_attachment_image( $custom_logo_id, 'full', false, [ 'class' => 'nexrise-footer__logo-image' ] );
            } else {
              ?>
              <img src="<?php echo esc_url( 'https://gonexrise.com/wp-content/uploads/2025/10/NEXRISE-We-Build.-You-Rise.png' ); ?>" alt="<?php esc_attr_e( 'NEXRISE - We Build. You Rise.', 'nw-avada-like' ); ?>">
              <?php
            }
            ?>
          </div>
          <div>
            <div class="nexrise-footer__logo-text"><?php esc_html_e( 'NEXRISE', 'nw-avada-like' ); ?></div>
            <div class="nexrise-footer__logo-tagline"><?php esc_html_e( 'We build. You Rise.', 'nw-avada-like' ); ?></div>
          </div>
        </div>
        <p class="nexrise-footer__brand-description">
          <?php esc_html_e( 'We build high-performing WordPress websites and online stores that drive real results.', 'nw-avada-like' ); ?>
        </p>
        <div class="nexrise-footer__contact-info">
          <div class="nexrise-footer__contact-item">
            <span class="nexrise-footer__contact-label">Phone:</span>
            <a href="https://wa.me/12813744411" target="_blank" rel="noopener noreferrer" class="nexrise-footer__contact-link">+1 (281) 374-4411</a>
          </div>
          <div class="nexrise-footer__contact-item">
            <span class="nexrise-footer__contact-label">Email:</span>
            <a href="mailto:info@gonexrise.com" class="nexrise-footer__contact-link">info@gonexrise.com</a>
          </div>
          <div class="nexrise-footer__contact-item">
            <span class="nexrise-footer__contact-label">Address:</span>
            <span class="nexrise-footer__contact-text">Houston, Texas</span>
          </div>
        </div>
      </div>

      <div class="nexrise-footer__section">
        <h3 class="nexrise-footer__section-title"><?php esc_html_e( 'About NexRise', 'nw-avada-like' ); ?></h3>
        <ul class="nexrise-footer__menu">
          <li><a href="<?php echo esc_url( home_url( '/#why-choose-us' ) ); ?>"><?php esc_html_e( 'Why Us', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#outcomes' ) ); ?>"><?php esc_html_e( 'Results', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#process' ) ); ?>"><?php esc_html_e( 'Process', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( 'https://www.gonexrise.com/privacy-policy/' ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Privacy Policy', 'nw-avada-like' ); ?></a></li>
        </ul>
      </div>

      <div class="nexrise-footer__section">
        <h3 class="nexrise-footer__section-title"><?php esc_html_e( 'Get Started', 'nw-avada-like' ); ?></h3>
        <ul class="nexrise-footer__menu">
          <li><a href="<?php echo esc_url( home_url( '/#packages' ) ); ?>"><?php esc_html_e( 'Pricing', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>"><?php esc_html_e( 'Testimonials', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'FAQ', 'nw-avada-like' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#final-cta' ) ); ?>"><?php esc_html_e( 'Contact', 'nw-avada-like' ); ?></a></li>
        </ul>
      </div>

      <div class="nexrise-footer__section">
        <h3 class="nexrise-footer__section-title"><?php esc_html_e( 'Stay Updated', 'nw-avada-like' ); ?></h3>
        <div class="nexrise-footer__newsletter-box">
          <p class="nexrise-footer__newsletter-text">
            <?php esc_html_e( 'Get our latest tips on web design, SEO, and digital marketing - straight to your inbox. No spam, just strategies that work.', 'nw-avada-like' ); ?>
          </p>
          <form id="nexrise-newsletter-form" class="nexrise-footer__form" action="#" method="post">
            <div class="nexrise-footer__email-input-wrapper">
              <label class="visually-hidden" for="nexrise-footer-email"><?php esc_html_e( 'Enter your email', 'nw-avada-like' ); ?></label>
              <input class="nexrise-footer__email-input" type="email" id="nexrise-footer-email" name="CONTACT_EMAIL" placeholder="<?php esc_attr_e( 'Enter your email', 'nw-avada-like' ); ?>" required>
            </div>
            <button class="nexrise-footer__subscribe-btn" type="submit"><?php esc_html_e( 'Subscribe Now', 'nw-avada-like' ); ?></button>
            <div id="newsletter-message" style="margin-top:10px;font-size:14px;"></div>
          </form>
          <!-- Iframe oculto para submissão do formulário Zoho -->
          <iframe name="_zcSignup" id="_zcSignup" style="display:none;width:0;height:0;border:0;" title="Zoho Campaigns Signup"></iframe>
        </div>
      </div>
    </div>

    <div class="nexrise-footer__social-section">
      <h3 class="nexrise-footer__section-title"><?php esc_html_e( 'Connect With Us', 'nw-avada-like' ); ?></h3>
      <div class="nexrise-footer__social-icons">
        <a href="#linkedin" class="nexrise-footer__social-icon" aria-label="<?php esc_attr_e( 'LinkedIn', 'nw-avada-like' ); ?>">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
          </svg>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61582002900539" class="nexrise-footer__social-icon" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'nw-avada-like' ); ?>">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
          </svg>
        </a>
        <a href="https://www.instagram.com/gonexrise/" class="nexrise-footer__social-icon" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'nw-avada-like' ); ?>">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
          </svg>
        </a>
        <a href="#youtube" class="nexrise-footer__social-icon" aria-label="<?php esc_attr_e( 'YouTube', 'nw-avada-like' ); ?>">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
          </svg>
        </a>
      </div>
    </div>

    <div class="nexrise-footer__bottom">
      &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'NexRise. All rights reserved', 'nw-avada-like' ); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

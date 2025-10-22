<?php
/**
 * Template do rodape.
 *
 * @package nw-avada-like
 */

?>
<footer class="site-footer">
  <div class="site-footer__primary">
    <div class="section-wrapper site-footer__grid">
      <div class="site-footer__column site-footer__column--brand">
        <a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <!-- ESPACO PARA O LOGO DO RODAPE: utilize /assets/images/logo-footer.png -->
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2025/10/NEXRISE-We-Build.-You-Rise.png' ) ); ?>" alt="NEXRISE - We Build. You Rise.">
        </a>
        <p class="site-footer__description"><?php esc_html_e( 'Build anything, launch everywhere. Avada gives you the creative control to design experiences that convert.', 'nw-avada-like' ); ?></p>
      </div>
      <div class="site-footer__column">
        <h3 class="site-footer__title"><?php esc_html_e( 'Product', 'nw-avada-like' ); ?></h3>
        <ul class="site-footer__menu">
          <li><a href="#features"><?php esc_html_e( 'Features', 'nw-avada-like' ); ?></a></li>
          <li><a href="#builder"><?php esc_html_e( 'Builder', 'nw-avada-like' ); ?></a></li>
          <li><a href="#benefits"><?php esc_html_e( 'Use Cases', 'nw-avada-like' ); ?></a></li>
          <li><a href="https://avada.com/changelog/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Release Notes', 'nw-avada-like' ); ?></a></li>
        </ul>
      </div>
      <div class="site-footer__column">
        <h3 class="site-footer__title"><?php esc_html_e( 'Resources', 'nw-avada-like' ); ?></h3>
        <ul class="site-footer__menu">
          <li><a href="https://avada.com/documentation/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Help Center', 'nw-avada-like' ); ?></a></li>
          <li><a href="https://avada.com/tutorials/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Tutorials', 'nw-avada-like' ); ?></a></li>
          <li><a href="https://avada.com/blog/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Blog', 'nw-avada-like' ); ?></a></li>
          <li><a href="https://avada.com/community/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Community', 'nw-avada-like' ); ?></a></li>
        </ul>
      </div>
      <div class="site-footer__column site-footer__column--newsletter">
        <h3 class="site-footer__title"><?php esc_html_e( 'Stay in the loop', 'nw-avada-like' ); ?></h3>
        <p class="site-footer__description"><?php esc_html_e( 'Insights, product updates, and design inspiration straight to your inbox.', 'nw-avada-like' ); ?></p>
        <form class="site-footer__form" action="#" method="post">
          <label class="visually-hidden" for="footer-email"><?php esc_html_e( 'Digite seu email', 'nw-avada-like' ); ?></label>
          <input class="site-footer__input" type="email" id="footer-email" name="footer-email" placeholder="<?php esc_attr_e( 'Seu email', 'nw-avada-like' ); ?>" required>
          <button class="button button--primary button--small" type="submit"><?php esc_html_e( 'Subscribe', 'nw-avada-like' ); ?></button>
        </form>
      </div>
    </div>
  </div>
  <div class="site-footer__bottom">
    <div class="section-wrapper site-footer__bottom-inner">
      <p class="site-footer__copyright">
        &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Avada Holdings LLC. All rights reserved.', 'nw-avada-like' ); ?>
      </p>
      <div class="site-footer__social">
        <a class="site-footer__social-link" href="https://facebook.com/ThemeFusion" target="_blank" rel="noopener noreferrer">
          <span class="visually-hidden"><?php esc_html_e( 'Facebook', 'nw-avada-like' ); ?></span>
          <span aria-hidden="true">&#x1F426;</span>
        </a>
        <a class="site-footer__social-link" href="https://x.com/Theme_Fusion" target="_blank" rel="noopener noreferrer">
          <span class="visually-hidden"><?php esc_html_e( 'X (Twitter)', 'nw-avada-like' ); ?></span>
          <span aria-hidden="true">&#x1F426;</span>
        </a>
        <a class="site-footer__social-link" href="https://www.youtube.com/user/ThemeFusion" target="_blank" rel="noopener noreferrer">
          <span class="visually-hidden"><?php esc_html_e( 'YouTube', 'nw-avada-like' ); ?></span>
          <span aria-hidden="true">&#x25B6;</span>
        </a>
        <a class="site-footer__social-link" href="https://www.instagram.com/themefusion/" target="_blank" rel="noopener noreferrer">
          <span class="visually-hidden"><?php esc_html_e( 'Instagram', 'nw-avada-like' ); ?></span>
          <span aria-hidden="true">&#x1F33C;</span>
        </a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
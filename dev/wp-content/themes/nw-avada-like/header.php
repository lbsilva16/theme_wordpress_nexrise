<?php
/**
 * Cabecalho principal do tema.
 *
 * @package nw-avada-like
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Ir para o conteudo', 'nw-avada-like' ); ?></a>
<header class="header-menu">
    <div class="logo">
        <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
        }
        ?>
    </div>

    <button class="mobile-menu-toggle" onclick="toggleMenu()" aria-label="Toggle Menu">☰</button>

    <div class="nav-container" id="navContainer">
        <nav aria-label="<?php esc_attr_e( 'Navegacao principal', 'nw-avada-like' ); ?>">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
                'walker'         => class_exists( 'Custom_Walker_Nav_Menu' ) ? new Custom_Walker_Nav_Menu() : null,
            ] );
            ?>
        </nav>

        <div class="button-container">
            <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>" class="btn-faq">FAQ</a>
            <a href="https://wa.me/12813744411" target="_blank" class="btn-whatsapp" rel="noopener noreferrer">WhatsApp</a>
        </div>
    </div>
</header>

<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    /* ===== HEADER MENU STYLES ===== */
    .header-menu { background: rgba(255, 255, 255, 0.98); padding: 20px 60px; display: grid; grid-template-columns: 200px 1fr auto; align-items: center; gap: 40px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); position: sticky; top: 0; z-index: 1000; width: 100%; }
    .logo { font-size: 24px; font-weight: bold; color: #5e72e4; display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
    .logo a { color: #5e72e4; text-decoration: none; display: flex; align-items: center; gap: 10px; }
    .logo img { max-height: 64px; width: auto; }

    .nav-container { display: flex; align-items: center; justify-content: space-between; gap: 40px; flex: 1; }
    nav { flex: 1; }

    .nav-menu { display: flex; gap: 35px; list-style: none; align-items: center; justify-content: flex-start; margin: 0; padding: 0; }
    .nav-menu > li { position: relative; }
    .nav-menu a { color: #2d3748; text-decoration: none; font-weight: 500; font-size: 15px; transition: all 0.3s ease; position: relative; padding: 8px 0; display: flex; align-items: center; gap: 5px; }
    .nav-menu > li > a::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #667eea, #764ba2); transition: width 0.3s ease; }
    .nav-menu a:hover { color: #667eea; }
    .nav-menu > li > a:hover::after { width: 100%; }

    /* Ícone dropdown para itens com submenu */
    .menu-item-has-children > a::before { content: '▼'; font-size: 10px; margin-left: 5px; transition: transform 0.3s ease; }
    .menu-item-has-children:hover > a::before { transform: rotate(180deg); }

    /* Submenu Moderno */
    .sub-menu { position: absolute; top: 100%; left: 50%; transform: translateX(-50%) translateY(20px); background: white; border-radius: 16px; padding: 12px; min-width: 280px; opacity: 0; visibility: hidden; transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15); margin-top: 10px; list-style: none; }
    .menu-item-has-children:hover .sub-menu { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0); }
    .sub-menu::before { content: ''; position: absolute; top: -8px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 12px solid transparent; border-right: 12px solid transparent; border-bottom: 12px solid white; filter: drop-shadow(0 -3px 3px rgba(0, 0, 0, 0.05)); }
    .sub-menu li { margin: 0; }
    .sub-menu a { display: block; padding: 16px 20px; border-radius: 12px; transition: all 0.3s ease; position: relative; overflow: hidden; margin-bottom: 6px; }
    .sub-menu li:last-child a { margin-bottom: 0; }
    .sub-menu a::before { content: ''; position: absolute; left: 0; top: 0; height: 100%; width: 4px; background: linear-gradient(135deg, #667eea, #764ba2); transform: scaleY(0); transition: transform 0.3s ease; }
    .sub-menu a:hover::before { transform: scaleY(1); }
    .sub-menu a:hover { background: linear-gradient(135deg, rgba(102, 126, 234, 0.08), rgba(118, 75, 162, 0.08)); transform: translateX(8px); }

    .button-container { display: flex; gap: 15px; align-items: center; flex-shrink: 0; justify-self: end; }
    .btn-faq { padding: 12px 28px; border: 2px solid #667eea; background: transparent; color: #667eea; font-size: 15px; font-weight: 600; border-radius: 50px; cursor: pointer; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; text-decoration: none; display: inline-block; }
    .btn-faq::before { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: linear-gradient(135deg, #667eea, #764ba2); transition: all 0.5s ease; transform: translate(-50%, -50%); z-index: -1; }
    .btn-faq:hover { color: white; border-color: #667eea; transform: translateY(-3px); box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4); }
    .btn-faq:hover::before { width: 300px; height: 300px; }
    .btn-faq:active { transform: translateY(-1px); }

    .btn-whatsapp { padding: 14px 32px; background: linear-gradient(135deg, #25D366, #128C7E); color: white; font-size: 15px; font-weight: 600; border: none; border-radius: 50px; cursor: pointer; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3); text-decoration: none; display: inline-flex; align-items: center; gap: 10px; }
    .btn-whatsapp::before { content: '💬'; font-size: 18px; animation: bounce 2s infinite; }
    .btn-whatsapp::after { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(255, 255, 255, 0.3); transition: all 0.6s ease; transform: translate(-50%, -50%); }
    .btn-whatsapp:hover { transform: translateY(-4px) scale(1.05); box-shadow: 0 15px 40px rgba(37, 211, 102, 0.5); }
    .btn-whatsapp:hover::after { width: 300px; height: 300px; }
    .btn-whatsapp:active { transform: translateY(-2px) scale(1.03); }
    @keyframes bounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-5px); } }
    .btn-whatsapp { animation: pulse 3s infinite; }
    @keyframes pulse { 0% { box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3); } 50% { box-shadow: 0 4px 25px rgba(37, 211, 102, 0.6); } 100% { box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3); } }

    .mobile-menu-toggle { display: none; background: none; border: none; font-size: 28px; cursor: pointer; color: #667eea; }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 1400px) { .header-menu { padding: 20px 40px; grid-template-columns: 180px 1fr auto; gap: 30px; } .nav-menu { gap: 25px; } .nav-container { gap: 30px; } }
    @media (max-width: 1024px) { .header-menu { grid-template-columns: 1fr auto; padding: 20px 30px; } .logo img { max-height: 56px; } .nav-menu { gap: 20px; } .sub-menu { min-width: 240px; } }
    @media (max-width: 768px) {
        .mobile-menu-toggle { display: block; }
        .header-menu { grid-template-columns: 1fr auto; justify-content: space-between; gap: 0; }
        .nav-container { display: none; grid-column: 1 / -1; width: 100%; flex-direction: column; gap: 0; }
        .nav-container.active { display: flex; }
        nav { width: 100%; }
        .nav-menu { flex-direction: column; gap: 0; padding-top: 20px; width: 100%; justify-content: flex-start; }
        .nav-menu > li { width: 100%; text-align: left; padding: 12px 0; border-bottom: 1px solid rgba(0, 0, 0, 0.05); }
        .sub-menu { position: static; transform: none; margin-top: 10px; margin-bottom: 10px; box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.05); }
        .sub-menu::before { display: none; }
        .menu-item-has-children:hover .sub-menu { transform: none; }
        .button-container { width: 100%; justify-content: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0, 0, 0, 0.05); }
    }
    @media (max-width: 480px) { .header-menu { padding: 15px 20px; } .logo { font-size: 20px; } .logo img { max-height: 48px; } .btn-faq, .btn-whatsapp { padding: 10px 20px; font-size: 14px; } }
</style>

<script>
    function toggleMenu() {
        const navContainer = document.getElementById('navContainer');
        if (navContainer) {
            navContainer.classList.toggle('active');
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.nav-menu a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    var el = document.getElementById('navContainer');
                    if (el) el.classList.remove('active');
                }
            });
        });
    });
</script>

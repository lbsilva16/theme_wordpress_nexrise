# Auditoria de Limpeza

## Antes
- Arquivo `demo-content.xml` com dados de exemplo.
- Pasta `bin/` com scripts para gerar demo e screenshot.
- Pasta `block-patterns/` com padroes pre-montados de landing page.
- Pasta `parts/` com secoes hero/cta/testimonials usadas apenas na demo.
- Arquivo `templates/landing-no-chrome.php` dedicado a pagina promocional.
- Pastas `vendor/`, `assets/dist/` e `assets/src/` com build e assets da demo.
- `functions.php` carregava modulos extras (customizer, filters, widgets) ligados a demo.
- `front-page.php` dependia das secoes de demo (`parts/*`).
- README antigo descrevia scripts de build da demo.

## Depois
- Removidos XMLs, scripts e pastas de demo do tema (`bin`, `block-patterns`, `parts`, `templates`, `vendor`, `assets/dist`, `assets/src`).
- Recriada estrutura minima (style.css, functions.php, header/footer/index/front-page, assets/css|js|images, inc, languages).
- Novos `setup.php` e `enqueue.php` cuidam apenas de suportes e assets essenciais.
- Templates simplificados com loop padrao, links acessiveis e sem conteudo promocional.
- `theme.css` e `theme.js` limpos servindo de ponto de partida para estilos/scripts futuros.
- `screenshot.png`, `README.md` e `nw-avada-like.pot` atualizados para refletir o estado atual.

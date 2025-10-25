# NW Avada Like Theme

## Overview

NW Avada Like is a sales-focused WordPress theme inspired by the Avada layout. It implements modular template parts, custom sections for the homepage, and WordPress best practices for security, accessibility, and performance.

## Requirements

- WordPress 5.0 or newer
- PHP 7.4 or newer
- MySQL 5.6 / MariaDB 10.1 or newer

## Installation

1. Copy the `nw-avada-like` folder to `wp-content/themes/` in your WordPress installation.
2. In the WordPress admin dashboard, navigate to Appearance → Themes and activate “NW Avada Like”.
3. Assign a primary navigation menu (Appearance → Menus) and configure the widgets you want to display in the “Primary Sidebar” area.
4. Set a custom logo (Appearance → Customize → Site Identity) to display brand imagery in the header and footer.

## Features

- Home page with modular sections resolved through `template-parts/sections`.
- Mandatory templates for posts, pages, archives, search results, 404 errors, comments, and sidebar handling.
- Asset loading centralized in `inc/enqueue.php`, with conditional scripts for the homepage.
- Gutenberg editor styles (`assets/css/editor.css`) for a closer match between the editor and the front-end.
- Sidebar and widget support via `inc/setup.php`.
- Newsletter form protected with a nonce placeholder for future integration.

## Development

- Styles live in `style.css` and `assets/css/*.css` files. New structural styles for default templates are at the bottom of `style.css`.
- PHP helpers are organized under the `inc/` directory.
- When adding new sections or template parts, follow the established naming convention (`template-parts/sections/section-name.php`).

## Customization Tips

- Replace or extend the images inside `assets/images/` to match production branding.
- Update copy and call-to-actions inside the templates to match your offerings.
- Register additional widget areas by extending the `nw_avada_like_widgets_init()` function in `inc/setup.php`.

## License

Released under the GNU General Public License v2 or later.

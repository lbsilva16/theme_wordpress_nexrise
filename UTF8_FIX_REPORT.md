# UTF8_FIX_REPORT

## Changes Applied
- Updated theme nw-avada-like header to emit UTF-8 meta and viewport tags before wp_head().
- Normalized all theme PHP/CSS/JS files to UTF-8 (no BOM), removed trailing closing tags, and enforced single newline endings.
- Added `AddDefaultCharset utf-8` to `.htaccess` at the WordPress root.
- Set DB_CHARSET to utf8mb4 and DB_COLLATE to empty string in wp-config.php.
- Converted WordPress database and wp_* tables to utf8mb4_unicode_ci via Docker MySQL.

## DB variables
```
character_set_client	utf8mb3
character_set_connection	utf8mb3
character_set_database	utf8mb4
character_set_filesystem	binary
character_set_results	utf8mb3
character_set_server	utf8mb4
character_set_system	utf8mb3
character_sets_dir	/usr/share/mysql/charsets/
collation_connection	utf8mb3_general_ci
collation_database	utf8mb4_unicode_ci
collation_server	utf8mb4_unicode_ci
```

## Table collations
```
wp_term_taxonomy	utf8mb4_unicode_ci
wp_commentmeta	utf8mb4_unicode_ci
wp_postmeta	utf8mb4_unicode_ci
wp_term_relationships	utf8mb4_unicode_ci
wp_users	utf8mb4_unicode_ci
wp_posts	utf8mb4_unicode_ci
wp_terms	utf8mb4_unicode_ci
wp_options	utf8mb4_unicode_ci
wp_usermeta	utf8mb4_unicode_ci
wp_links	utf8mb4_unicode_ci
wp_termmeta	utf8mb4_unicode_ci
wp_comments	utf8mb4_unicode_ci
```

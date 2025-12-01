<?php
/**
 * Template da sidebar.
 *
 * @package nw-avada-like
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>
<aside id="secondary" class="sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside>

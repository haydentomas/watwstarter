<?php
/**
 * watwstarter bootstrap
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/** Core theme setup & supports */
require_once get_template_directory() . '/inc/setup.php';

/** Front-end assets (CSS/JS) */
require_once get_template_directory() . '/inc/assets.php';

/** Block editor (fonts, editor-only assets) */
require_once get_template_directory() . '/inc/editor.php';

/** Woocommerce */
require_once get_template_directory() . '/inc/woocommerce.php';

/** Widgets / sidebars (keep for now) */
require_once get_template_directory() . '/inc/widgets.php';

/** Template helpers (from Underscores) */
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/template-functions.php';

/** Customizer (kept; you’ll extend later) */
require_once get_template_directory() . '/inc/customizer.php';

/** Optional extras kept for now */
require_once get_template_directory() . '/inc/custom-header.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once get_template_directory() . '/inc/jetpack.php';
}

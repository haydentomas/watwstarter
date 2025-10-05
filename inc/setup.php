<?php
/**
 * Theme setup: supports, menus, HTML5, etc.
 */

add_action( 'after_setup_theme', function () {

	load_theme_textdomain( 'watwstarter', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( [
		'primary' => esc_html__( 'Primary Menu', 'watwstarter' ),
	] );

	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	// Modern niceties
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'editor-styles' ); // enables loading editor CSS files via enqueue hook

	// Common but optional
	add_theme_support( 'custom-logo', [
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	] );
} );

/**
 * Content width (for embeds/media)
 * Priority 0 to make it visible to later callbacks.
 */
add_action( 'after_setup_theme', function () {
	$GLOBALS['content_width'] = apply_filters( 'watwstarter_content_width', 720 );
}, 0 );

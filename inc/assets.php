<?php
/**
 * Front-end styles & scripts
 */

function watwstarter_scripts() {
	// Tailwind CSS (or fallback to style.css)
	$tailwind_rel  = '/src/output.css';
	$tailwind_file = get_template_directory() . $tailwind_rel;
	$tailwind_url  = get_template_directory_uri() . $tailwind_rel;

	if ( file_exists( $tailwind_file ) ) {
		wp_enqueue_style( 'watwstarter-tailwind', $tailwind_url, [], filemtime( $tailwind_file ) );
	} else {
		wp_enqueue_style(
			'watwstarter-style',
			get_stylesheet_uri(),
			[],
			defined( '_S_VERSION' ) ? _S_VERSION : wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data( 'watwstarter-style', 'rtl', 'replace' );
	}

	// Default Underscores navigation script (optional)
	$nav_rel  = '/js/navigation.js';
	$nav_file = get_template_directory() . $nav_rel;
	if ( file_exists( $nav_file ) ) {
		wp_enqueue_script( 'watwstarter-navigation', get_template_directory_uri() . $nav_rel, [], filemtime( $nav_file ), true );
	}

	// ESM bundle if present
	$bundle = file_exists( get_template_directory() . '/dist/bundle.min.js' )
		? '/dist/bundle.min.js'
		: ( file_exists( get_template_directory() . '/dist/bundle.js' ) ? '/dist/bundle.js' : '' );

	if ( $bundle ) {
		$abs = get_template_directory() . $bundle;
		wp_enqueue_script( 'watwstarter-bundle', get_template_directory_uri() . $bundle, [], filemtime( $abs ), true );
		if ( function_exists( 'wp_script_add_data' ) ) {
			wp_script_add_data( 'watwstarter-bundle', 'type', 'module' );
		}
	}

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'watwstarter_scripts', 5 );

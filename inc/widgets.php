<?php
/**
 * Classic widget areas (kept for now).
 * Remove this file + bootstrap require if you don’t use sidebars.
 */

add_action( 'widgets_init', function () {
	register_sidebar( [
		'name'          => esc_html__( 'Sidebar', 'watwstarter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'watwstarter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	] );
} );

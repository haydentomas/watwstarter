<?php
/**
 * Block editor assets (fonts only, no Tailwind)
 */

add_action( 'enqueue_block_editor_assets', function () {
	$rel  = 'src/editor-fonts.css';          // relative to theme root
	$file = get_theme_file_path( $rel );

	if ( file_exists( $file ) ) {
		wp_enqueue_style(
			'watwstarter-editor-fonts',
			get_theme_file_uri( $rel ),
			[],
			filemtime( $file )                 // cache-bust when you change it
		);
	}
} );

<?php

function tldr_child_enqueue_styles() {

	$dependencies = array(
		'tldr-fontawesome',
		'tldr-reset',
		'tldr-bootstrap',
		'tldr-screen',
	);
    wp_enqueue_style( 'tldr_child-style', get_stylesheet_directory_uri() . '/style.css', $dependencies );

/*
	$print_dependencies = array(
		'tldr-print',
	);
    wp_enqueue_style( 'tldr_child-print', get_stylesheet_directory_uri() . '/print.css', $print_dependencies );
*/

}
add_action( 'wp_enqueue_scripts', 'tldr_child_enqueue_styles' );

?>

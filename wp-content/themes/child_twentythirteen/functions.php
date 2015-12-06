<?php
function get_parent_theme_css() {
	wp_enqueue_style( 'Christines_rockin_theme', get_template_directory_uri() .'/style.css' );
	wp_enqueue_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Fjalla+One|Roboto+Slab:300,700,400' );
}
add_action( 'wp_enqueue_scripts', 'get_parent_theme_css' );

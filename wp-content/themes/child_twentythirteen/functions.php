<?php

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Mountains+of+Christmas:700|Montserrat:700', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

<?php


function add_theme_assets() {
	wp_enqueue_style('bulma', get_template_directory_uri() . "/assets/bulma/css/bulma.min.css");
	//wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js");
}

add_action( 'wp_enqueue_scripts', 'add_theme_assets' );
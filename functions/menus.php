<?php

function register_menus() {
	register_nav_menus(array(
		'top' => __('Top Menu', 'gutentest')
	));
}

add_action('after_setup_theme', 'register_menus', 0);

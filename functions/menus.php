<?php

function register_menus() {
	register_nav_menus(array(
		'top' => __('Top Menu', 'gutentest')
	));
}

add_action('after_setup_theme', 'register_menus', 0);

/*function be_arrows_in_menus( $item_output, $item, $depth, $args ) {

	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<i class="fas fa-angle-down"></i>' : '<i class="fas fa-angle-right"></i>';
		$item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4 ); */
<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Food_One
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function food_one_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}


	// if(is_front_page()){
	// 	$classes[] = 'no-sidebar';
	// }



	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1') || is_front_page() || is_page('carrito') || is_checkout() || is_singular('product')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'food_one_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function food_one_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'food_one_pingback_header');

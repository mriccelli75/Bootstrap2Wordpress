<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package bootstrap to wordpress
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function bootstrap2wordpress_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'bootstrap2wordpress_jetpack_setup' );

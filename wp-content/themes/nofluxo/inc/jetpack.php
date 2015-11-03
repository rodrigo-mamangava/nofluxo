<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package noFluxo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function nofluxo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'nofluxo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function nofluxo_jetpack_setup
add_action( 'after_setup_theme', 'nofluxo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function nofluxo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function nofluxo_infinite_scroll_render

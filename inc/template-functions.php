<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Rezoto
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rezoto_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	global $post;
	$rezoto_page_layout = 'no-sidebar';
	if( is_page( $post ) ) {
		$rezoto_page_layout = ( get_post_meta( $post->ID, 'rezoto_page_layout', true ) ) ? get_post_meta( $post->ID, 'rezoto_page_layout', true ) : 'no-sidebar';
	} elseif( is_archive() || is_home() ) {
		$rezoto_page_layout = get_theme_mod( 'rezoto_blog_sidebar_layout', 'no-sidebar' );

		$blog_layout = get_theme_mod( 'rezoto_blog_layout', 'layout1' );
		$classes[] = 'blog-' . esc_attr($blog_layout);
	} elseif( is_search() || is_single() ) {
		$rezoto_page_layout = 'right-sidebar';
	}
	$classes[] = $rezoto_page_layout;

	return $classes;
}
add_filter( 'body_class', 'rezoto_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rezoto_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rezoto_pingback_header' );

<?php
/*
@package WordPress
@subpackage Beyond Basics
@author Bruno Bichet <bruno.bichet@gmail.com>
@version 0.3
@since Version 0.1
*/
 
/*
Note: 
By using this child theme functions.php file (see http://codex.wordpress.org/Theme_Development and
http://codex.wordpress.org/Child_Themes), you can override the original functions
wrapped in a if function_exists() condition by defining them first here.
*/
 
/*
TOC:
basics_link_cat()		Display a link to the given category
*/
 
/**
 * Display a link to the category specified to show more posts from it (mainly used within home.php)
 */
function basics_link_cat($category) {
	if  ( get_option( 'category_base' ) ) {
		$category_base = get_option('category_base');
	} else {
		$category_base = 'category';
	}
	$category_link = '/' . $category_base . '/' . $category;
	$link = sprintf( __( '<a href="%1$s" title="%2$s">%2$s <mark>%3$s</mark> &#8599;</a>', 'basics' ),
	esc_url( $category_link ),
	__( 'Read all posts from the category', 'basics' ),
	$category
	);
	return $link;
}
/**
 * Test in progress
 */
function basics_link_cat2() {
	global $args;
	if  ( get_option( 'category_base' ) ) {
		$category_base = get_option('category_base');
	} else {
		$category_base = 'category';
	}
	$category = $args['category_name'];
	$category_link = '/' . $category_base . '/' . $category;
	$link = sprintf( __( '<a href="%1$s" title="%2$s">%2$s (%3$s)</a>', 'basics' ),
	esc_url( $category_link ),
	__( 'Read all posts from this category &#8599;', 'basics' ),
	$category
	);
	return $link;
}
/**
 * Test in progress
 */
function basics_link_cat3() {
	 global $wp_rewrite;
	// Get the ID of the current category
	$category_id = get_the_category();
	// Get the URL of this category
	$category_link = get_category_link( $category_id );
	// Print a link to this category
	$link = sprintf( __( '<a href="%1$s" title="%2$s">%2$s</a>', 'basics' ),
	esc_url( $category_link ),
	__( 'Read all posts from this category &#8599;', 'basics' )
	);
	return $link;
}
?>
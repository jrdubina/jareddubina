<?php
/**
 * Hannari Pink functions and definitions
 *
 * @package Hannari Pink
 */
 
add_action( 'wp_enqueue_scripts', 'hannari_pink_enqueue_styles' );
function hannari_pink_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
?>
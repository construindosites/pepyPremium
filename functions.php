<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
 
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

function hello_elementor_admin_menu() {
    add_menu_page(
            'Construindo Sites',
            'pepyPremium',
            'manage_options',
            'https://pepy.link/tema-help',
            '',
            '',
            999
    );
    
}
add_action('admin_menu', 'hello_elementor_admin_menu');

if ( is_admin() ) {
	require 'class-tgm-plugin-activation.php';
	require 'rec.php';
} 

function hello_elementor_gutenberg_suport (){

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme','hello_elementor_gutenberg_suport' );

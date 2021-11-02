<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
//menu pepyPremium
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

//Plugins de ouro
if ( is_admin() ) {
	require 'class-tgm-plugin-activation.php';
	require 'rec.php';
} 

//Suporte ao Gutenberg
function hello_elementor_gutenberg_suport (){

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme','hello_elementor_gutenberg_suport' );

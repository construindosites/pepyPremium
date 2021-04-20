<?php
/**
 * Child functions and definitions.
 */

/**
 * Process single location
 *
 * @return void
 */
function cb_child_process_location( $location = null ) {

	if ( ! function_exists( 'jet_theme_core' ) ) {
		return false;
	}
	if( ! defined( 'ELEMENTOR_VERSION' ) ) {
		return false;
	}

	$done = jet_theme_core()->locations->do_location( $location );

	return $done;

}

function hello_elementor_admin_menu() {
    add_menu_page(
            'Escola Elementor',
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


function hello_elementor_widgets_init() {
		register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'hello_elementor' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'hello_elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Sidebar 2', 'hello_elementor' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'hello_elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Sidebar 3', 'hello_elementor' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'hello_elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hello_elementor_widgets_init' );

function hello_elementor_gutenberg_suport (){

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'align-wide' );

}

add_action( 'after_setup_theme','hello_elementor_gutenberg_suport' );
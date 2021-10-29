<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for child theme Hello Elementor Child
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_stylesheet_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'hello_elementor_child_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function hello_elementor_child_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		
		array(
			'name'      => 'Elementor Templete Builder',
			'slug'      => 'header-footer-elementor',
			'required'  => true,
		),
		array(
			'name'      => 'e-addons',
			'slug'      => 'e-addons-for-elementor',
			'source'    => 'https://github.com/nerds-farm/e-addons-for-elementor/archive/master.zip',
            		'required'  => true,
		),
		array(
			'name'      => 'e-addons EDITOR',
			'slug'      => 'e-addons-editor',
			'source'    => 'https://github.com/nerds-farm/e-addons-editor/archive/refs/heads/master.zip',
            		'required'  => true,
		),
		array(
			'name'      => 'e-addons TWIG',
			'slug'      => 'e-addons-twig',
			'source'    => 'https://github.com/nerds-farm/e-addons-twig/archive/refs/heads/main.zip',
            		'required'  => false,
		),
		array(
			'name'      => 'e-addons Query Posts',
			'slug'      => 'e-addons-query-posts',
			'source'    => 'https://github.com/nerds-farm/e-addons-query-posts/archive/refs/heads/master.zip',
            		'required'  => false,
		),
		array(
			'name'      => 'e-addons TEMPLATE',
			'slug'      => 'e-addons-template',
			'source'    => 'https://github.com/nerds-farm/e-addons-template/archive/refs/heads/master.zip',
            		'required'  => false,
		),
		array(
			'name'      => 'Qi Addons For Elementor',
			'slug'      => 'qi-addons-for-elementor',
			'required'  => false,
		),
		array(
			'name'      => 'Fluent Forms',
			'slug'      => 'fluentform',
			'required'  => false,
		),
		array(
			'name'      => 'JetSticky For Elementor',
			'slug'      => 'jetsticky-for-elementor',
			'source'    => 'https://github.com/Crocoblock/jet-widgets/archive/refs/heads/master.zip',
			'required'  => false,
		),
		array(
			'name'      => 'Gerenciador de barra lateral leve',
			'slug'      => 'sidebar-manager',
			'required'  => false,
		),
		array(
			'name'      => 'Custom Fonts',
			'slug'      => 'custom-fonts',
			'required'  => false,
		),
		array(
			'name'      => 'AddToAny Share Buttons',
			'slug'      => 'add-to-any',
			'required'  => false,
		),
		array(
			'name'      => 'Rank Math – SEO Plugin for WordPress',
			'slug'      => 'seo-by-rank-math',
			'required'  => false,
		),
		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		/*array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),
            */
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'hello-elementor-child',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

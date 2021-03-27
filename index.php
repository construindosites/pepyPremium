<?php
/**
 * The site's entry point.
 *
 * loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

if ( is_singular() ) {
	if ( ! cb_child_process_location( 'single' ) ) {
		get_template_part( 'template/single' );
	}
} elseif ( is_archive() || is_home() ) {
	if ( ! cb_child_process_location( 'archive' ) ) {
		get_template_part( 'template/archive' );
	}
} elseif ( is_search() ) {
	if ( ! cb_child_process_location( 'archive' ) ) {
		get_template_part( 'template/search' );
	}
} else {
	if ( ! cb_child_process_location( 'single' ) ) {
		get_template_part( 'template/404' );
	}
}

get_footer();

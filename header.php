<?php
/**
 * The template for displaying the header.
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( ! cb_child_process_location( 'header' ) ) {
	get_template_part( 'template/header' );
}
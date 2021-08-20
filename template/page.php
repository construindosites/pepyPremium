<?php 
/*
*
* Templete Name: Elementor Templete Extra
*
* @package HelloElementor
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main class="pepy">
 <?php while ( have_posts() ) :	the_post(); the_content(); ?>
</main>

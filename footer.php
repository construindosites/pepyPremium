<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! cb_child_process_location( 'footer' ) ) {
	get_template_part( 'template/footer' );
}
?>

<?php wp_footer(); ?>

</body>
</html>

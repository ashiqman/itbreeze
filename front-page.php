<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ITbreeze
 */

get_header();
?>

<!-- Slider Start -->
<?php echo get_template_part('inc/template','slider');?>
<!-- Slider End -->


<!-- Box content Start -->
<?php echo get_template_part('inc/template', 'box'); ?>
<!-- End Box content  -->



<div class="container">
	<div class="row">

		<!-- Box content Start -->
		<?php echo get_template_part('inc/template', 'facilities'); ?>
		<!-- End Box content  -->

		<!-- Box content Start -->
		<?php echo get_template_part('inc/template', 'courses'); ?>
		<!-- End Box content  -->

	</div>
<?php

get_footer();

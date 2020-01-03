<?php
/**

 Template Name: Courses
 */

get_header();
?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
		 </div>
		 
		<?php get_template_part('template-parts/content', 'course');?>

		</div><!-- row -->
	</div><!-- container -->

<?php
get_footer();

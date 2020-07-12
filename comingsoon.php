<?php 
	/* Template Name: Coming Soon */
?>

<?php get_header(); ?>

<section class="background-comingsoon">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
	?>

</section>


<?php
get_sidebar();
get_footer();
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Scroll_Deals
 */

get_header();
if ( is_front_page() ) :
				get_template_part( 'template-parts/content', "top" );
				// endif;
?>
<div class="container">
	<div class="row">
	<main id="primary" class="site-main col-md-9">

		<?php
		// if ( have_posts() ) :

			// if ( is_front_page() ) :
				get_template_part( 'template-parts/content', "home" );

			// endif;

			/* Start the Loop */
			// while ( have_posts() ) :
			// 	the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			// endwhile;

			// the_posts_navigation();


		?>

</main>
	<!-- #main -->

<?php
get_sidebar();
?>
</div>
</div>
<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
// get_footer();

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 * @since _s 1.0
 */
$product_category = $_GET['wpsc_product_category'];
UI::ajaxheader(); ?>
<script>
	//added in page.php
	//addToBodyClass("page-white");
</script>
<!-- using page.php -->
		<div id='single-post'>
			<div class='post-wrap'>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>



				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php 
UI::ajaxfooter(); ?>
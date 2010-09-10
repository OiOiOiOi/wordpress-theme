<?php
/**
 * The template for displaying Tag Archive pages.
 */

get_header(); ?>

		<div class="container">
			<div class="container_inner">
				<div id="mainContent">
				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

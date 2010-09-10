<?php
/**
 * The template for displaying Category Archive pages.
 */

get_header(); ?>

	<div class="container">
		<div class="container_inner">
			<div id="mainContent">
				<h1 class="page-title"><?php
					printf( single_cat_title( '', false ). __( ' at %s'), '<span> ABC' . '</span>'.' Tech' );
				?></h1>
				<div id="left-column">
					<div id="content">
						<?php
							if ( ! empty( $category_description ) )
								echo '<div class="archive-meta">' . $category_description . '</div>';

						/* Run the loop for the category page to output the posts.
						 * If you want to overload this in a child theme then include a file
						 * called loop-category.php and that will be used instead.
						 */
						get_template_part( 'loop', 'category' );
						?>
					</div>
			</div><!-- #left-column -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

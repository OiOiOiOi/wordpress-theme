<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

		<div class="container">
			<div class="container_inner">
				<div id="mainContent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
					<div id="left-column">
						<div id="content">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<div class="entry-content">
									<?php the_content(); ?>
									<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
									<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
								</div><!-- .entry-content -->
							</div><!-- #post-## -->
							<?php comments_template( '', true ); ?>

<?php endwhile; ?>
						</div>
					</div>
					<?php get_sidebar(); ?>
					<?php get_footer(); ?>



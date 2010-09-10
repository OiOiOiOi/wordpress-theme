<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 */

get_header(); ?>

		<div class="container">
			<div class="container_inner">
				<div id="mainContent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
						<div id="content">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-content">
									<?php the_content(); ?>
									<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
									<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
								</div><!-- .entry-content -->
							</div><!-- #post-## -->
							<div class="clearfix"></div>
							<?php comments_template( '', true ); ?>

<?php endwhile; ?>					
						</div>
					</div>
					<div class="clearfix"></div>					
				</div>
			</div>	
</div>				
				<?php get_footer(); ?>



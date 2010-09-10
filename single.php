<?php
/**
 * The Template for displaying all single posts.
 *
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
							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>	
							</div><!-- .entry-content -->
							<div id="nav-below" class="navigation">
								<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> %title' ); ?></div>
								<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></div>
								<div class="clearfix"></div>
							</div><!-- #nav-below -->
							<p class="entry-meta"><?php get_posted_on(); ?></p>		
						<?php comments_template( '', true ); ?>
						</div>
					</div>
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

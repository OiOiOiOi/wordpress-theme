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
					<h1 class="entry-title"><?php _e( 'Not Found' ); ?></h1>
					<div id="left-column">
						<div class="entry-content">
							<p><?php _e( 'Apologies, but the page you requested could not be found.' ); ?></p>
						</div><!-- .entry-content -->
					</div><!-- #post-0 -->
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



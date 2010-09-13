<?php
/**
 * The home template file.
 */

get_header(); ?>

		<div class="container">
			<div class="container_inner">
				<div id="mainContent">			
					<img title="abctech" src="http://www.abctech-thailand.com/wp-content/themes/perspective/images/perspective.jpg" height="138"/>
					<h1 class="title">Welcome to <span>ABC</span> Tech 's home on the Internet.</h1>
					<div id="left-column">
						<ul id="intro">
<?php 
/*loop for query child page which we want to show*/
	$page_id = wt_get_ID_by_page_name('about');
	query_posts( array( 'post_type' => 'page','post_parent' => $page_id ) );
	while ( have_posts() ) : the_post(); ?>	
							<li id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
								<?php the_post_thumbnail(array(76,40), array('class' => 'img-left'));?> 
								<h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
								</li>
<?php endwhile; ?>
<?php 
/**reset query*/
wp_reset_query();?>
						</ul>
					</div>
					<div id="right-column">
						<div class="sidebox">
							<h3>Available Jobs at <span>ABC</span> Tech</h3>
							<ul class="jobs">
							<?php 
							query_posts('category_name=Jobs');
							while ( have_posts() ) : the_post(); ?>
								<li id="post-<?php the_ID(); ?>><span class="date"><?php get_the_date();?></span><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'jobs %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
							<?php endwhile; 														?>
							</ul>
							<p class="align-right">
							<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Jobs' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
<!-- Print a link to this category -->
<a class="see-all" href="<?php echo $category_link; ?>" title="view all jobs in abctech">See all available jobs</a>

							</p>
							<?php
							/**reset query*/
							wp_reset_query();?>
						</div>
						<div class="techno">
							<h3>Our technology</h3>
							<ul class="partner">
								<?php wp_list_bookmarks('title_li=&categorize=0&category_name=tech&show_image=1&limit=6&orderby=rand'); ?>
							</ul>
						</div>
					</div>
				</div><!-- end #mainContent -->
				<div class="clearfix">
				</div>
			</div>
		</div><!-- end #container -->
	</div><!-- end #wrapper -->
<?php get_footer(); ?>

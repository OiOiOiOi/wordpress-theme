<div id="footer-wrap">
		<div id="footer" class="container">
			<div class="container_inner">
<?php 
// 	query about page content 
	query_posts( array('pagename' => 'about') );
	
	while ( have_posts() ) : the_post(); ?>	
				<div class="footerbox col-8 first" id="post-<?php the_ID(); ?>">
					<h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
					<?php the_post_thumbnail(array(75,78), array('class' => 'img-left'));?>
					<?php the_excerpt(); ?>
				</div>
<?php endwhile; ?>
				<div class="footerbox col-16">
					<h4><a title="office" rel="bookmark" href="http://wwww.abctech-thailand.com/office">Office</a></h4>
					<img class="img-left" src="http://wwww.abctech-thailand.com/wp-content/themes/perspective/images/office_thumbnail.jpg"/>
					<p>
					Unit 1701-1  17th Floor<br>
					Exchange Tower<br>
					388 Sukhumvit Road, Klongtoey,<br>
					Bangkok 10110, Thailand.</p>
				</div>
				<div class="footerbox col-16">
					<h4><a title="contact us" rel="bookmark" href="http://wwww.abctech-thailand.com/contact">Contact us</a></h4>
					<p>
						<strong>Phone : </strong> +66 (0) 2633 4340
						<br>
						<strong>Fax : </strong> +66 (0) 2633 4339
						<br>
						<strong>E-mail : </strong> contact@abctech-thailand.com
						<br>
					</p>
				</div>
				<div class="clearfix"></div>
				<div class="copyright">
					<p>Copyright &copy  2010 <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				</div>
			</div>
		</div>
	</div><!-- end #footer -->
	<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
	<!-- To avoid delays, initialize Cuf?n before other scripts at the bottom -->

	<!-- Google Analytics and other scripts here -->
</body>
</html>
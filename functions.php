<?php
/*register custom menus for wordpress*/

add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
/*add image thumbnail for post & page*/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 76, 40 ); // 76 pixels wide by 40 pixels tall, box resize mode
/*Make the "read more" link to the post */

function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">' . ' more...' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_length($length) {
	return 45;
}
add_filter('excerpt_length', 'new_excerpt_length');

if ( function_exists('register_sidebars') )
register_sidebars(1);

/* datetime's form for each post*/

function get_posted_on() {
	printf( __( 'Posted on %2$s by %3$s' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s' ), get_the_author() ),
			get_the_author()
		)
	);
}

/*get id by name */
function wt_get_ID_by_page_name($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}
?>
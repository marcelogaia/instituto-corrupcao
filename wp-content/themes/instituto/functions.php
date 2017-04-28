<?php 
/**
 * My Functions File
 */
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'instituto_nav_menus' ) ) {

	// Register Navigation Menus
	function instituto_nav_menus() {

		$locations = array(
			'primary' => __( 'Principal', 'instituto' ),
			'footer_menu' => __( 'Footer', 'instituto' ),
			'social' => __( 'Social', 'instituto' ),
		);
		register_nav_menus( $locations );

	}
	add_action( 'init', 'instituto_nav_menus' );

}

/**
 * Filter the except length to 25 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
if ( ! function_exists( 'wpdocs_custom_excerpt_length' ) ) {

	function wpdocs_custom_excerpt_length( $length ) {
	    return 25;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
}

if ( ! function_exists( 'my_image_sizes' ) ) { 
	add_action( 'after_setup_theme', 'my_image_sizes' );
	function my_image_sizes($sizes) {
		add_image_size( 'large-square', 600, 600, array( 'center', 'center' ) ); // Hard crop left top
	}
    add_filter('image_size_names_choose', 'my_image_sizes');
}

if( ! function_exists('myWidgets')) {
	add_action('widgets_init','myWidgets');

	function myWidgets() {
		
		register_sidebar(array(
			'name' => "Blog Sidebar",
			'id'	=> "blog_sidebar"
		));
		
		register_sidebar(array(
			'name' => "Footer Right",
			'id'	=> "footer_right"
		));
		
		register_sidebar(array(
			'name' => "Header (After menu)",
			'id'	=> "header_after_menu"
		));
	}
}

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

/* Short Title
* return a short title with ellipsis if the title is too long
* accepts a maxchar value
* Usage Example: echo short_title( $maxchar = 100 );
* Place the code inside the loop and set the character limit.  If the title is longer than the character limit set,
* it will display ellipsis at the end.
--------------------------------------------------------------------*/
function get_short_title( $maxchar = 90 ) {
	
	$fullTitle = get_the_title();
	
	// get the length of the title
	$titleLength = strlen($fullTitle);
	
	if($maxchar > $titleLength) {
		return $fullTitle;									
	} else {
		$shortTitle = substr( $fullTitle, 0, $maxchar );
		return $shortTitle . " &hellip;";									
	}
}

function the_short_title( $maxchar = 90 ) {
	echo get_short_title($maxchar);
}

// Based on: https://wordpress.stackexchange.com/a/231626
add_filter( 'page_template', function ( $template ) use ( &$post )
{
    // Check if we have page which is a child of people, ID 10
    if ( 11 !== $post->post_parent )
        return $template;

    // This is a person page, child of people, try to locate our custom page
    $locate_template = locate_template( 'page-participe-form.php' );

    // Check if our template was found, if not, bail
    if ( !$locate_template )
        return $template;

    return $locate_template;
});

function get_my_excerpt($limit) {
	$excerpt = explode(' ', strip_tags(get_the_content()), $limit);
	
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).' [...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}

	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	//return $limit;
	return $excerpt;
}

function my_excerpt($limit) {
	echo "<p>",get_my_excerpt($limit),"</p>";
}
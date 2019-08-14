<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page')) {
		global $post;
		// inhabitent_pretty_print($post);
		$classes[] = 'page-' . $post->post_name;
	}

	// inhabitent_pretty_print($classes);

	return $classes;

}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


function inhabitent_pretty_print($variable) {
	echo '<pre>';
	var_dump($variable);
	echo '</pre>';
  }

  function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		
	#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
		height: 53px !important; width: 300px; background-size: cover;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');
  
 
 
function the_url( $url ) {
	// $url = $url . '/download';
	// return $url;
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

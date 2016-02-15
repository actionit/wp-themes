<?php
////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////
define('THEME_NAME', "actiontelecom");
global $wp_version;
define('WP_VERSION', $wp_version);
define('THEME_LANGS_FOLDER', get_template_directory() . '/languages' );
define('version', '1.0');
define('AUTHOR_URI', $inform['web']);

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/** 
* Register Custom Navigation Walker.
*
*/
require_once('src/wp_bootstrap_navwalker.php');

/*
* Register primary menu
*
*/
register_nav_menus( array(
    'responsive' => __( 'Responsive', 'THEME_NAME' ),
) );

?>
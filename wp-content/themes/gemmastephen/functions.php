<?php
/* CSS and JS Files */
function gemmastephen_script() {
   	wp_enqueue_style( 'bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
   	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.1', true );
	wp_enqueue_script( 'jquery.easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.1', true );
	wp_enqueue_script( 'global-js', get_stylesheet_directory_uri() . '/js/global.js', array(), '1.1', true );

}
add_action('wp_enqueue_scripts', 'gemmastephen_script');




/* Remove margin from admin bar */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
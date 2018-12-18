<?php

//Header Image
$args = array(
    'flex-width'    => false,
    'width'         => 1920,
    'flex-height'    => false,
    'height'        => 617,
    'default-image' => get_template_directory_uri() . '/images/ahlogo.png',
);
add_theme_support( 'custom-header', $args );

//Logo
add_theme_support( 'custom-logo' );

//Admin Bar (Development)
function adminBar(){
    if ( is_user_logged_in() ) {
        show_admin_bar(true);
    } else {
        show_admin_bar(false);
    }
}
add_action('init', 'adminBar');

//Style Prepare
wp_enqueue_style('style', get_stylesheet_uri());

//Title
add_theme_support( 'title-tag' );

//Post Thumbnail
add_theme_support( 'post-thumbnails' );

//Register Navbar
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menus' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/resources/class-wp-bootstrap-navwalker.php';

//      Index Widgets
register_sidebar( array(
    'name' => 'Index Widget 1',
    'id' => 'index-widget-1',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-1 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Index Widget 2',
    'id' => 'index-widget-2',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-2 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Index Widget 3',
    'id' => 'index-widget-3',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-3 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );


//      Footer Widgets
register_sidebar( array(
    'name' => 'Footer Widget 1',
    'id' => 'footer-widget-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-1 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 2',
    'id' => 'footer-widget-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-2 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 3',
    'id' => 'footer-widget-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-3 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
?>
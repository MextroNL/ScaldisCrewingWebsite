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
show_admin_bar(true);

//Style Prepare
wp_enqueue_style('style', get_stylesheet_uri());

//Register Left and Right navbars
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' )
        )
    );
}
add_action( 'init', 'register_menus' );

//      Footer Widgets
register_sidebar( array(
    'name' => 'Footer Widget 1',
    'id' => 'footer-widget-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-4 footer-1 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 2',
    'id' => 'footer-widget-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-4 footer-2 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 3',
    'id' => 'footer-widget-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-4 footer-3 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
?>
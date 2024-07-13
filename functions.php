<?php
// Include the WP_Bootstrap_Navwalker class
require_once get_template_directory() . '/src/class-wp-bootstrap-navwalker.php';

function av_twentyfour_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    
    // Enqueue the main stylesheet
    wp_enqueue_style('av_twentyfour-style', get_stylesheet_uri());
    
    // Enqueue Bootstrap JS and dependencies
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'av_twentyfour_enqueue_styles');

// Register navigation menus
function av_twentyfour_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'av_twentyfour'),
        )
    );
}
add_action('init', 'av_twentyfour_register_menus');

// Register sidebar
function av_twentyfour_widgets_init() {
    register_sidebar(
        array(
            'name'          => __('Main Sidebar', 'av_twentyfour'),
            'id'            => 'main-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'av_twentyfour_widgets_init');

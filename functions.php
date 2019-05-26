<?php 

    function clean_script_enqueue() {
        // Include Styles
        wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css' , array(), '', 'all');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.css' , array(), '', 'all');
        wp_enqueue_style('cleancss', get_template_directory_uri() . '/css/clean-blog.css' , array(), '1.0.0', 'all');

        // Include Scripts
        wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.js', array(), '', true);
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.js', array(), '', true);
        wp_enqueue_script('cleanjs', get_template_directory_uri() . '/js/clean-blog.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'clean_script_enqueue');

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function clean_setup_theme() {

    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    // Custom Logo
    add_theme_support( 'custom-logo', array(
        'height' => 50,
        'width' => 50,
        'flex-width' => true,
    ));
}

add_action('after_setup_theme', 'clean_setup_theme');

// Set Excerpt Length
function set_excerpt_length() {
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widgets
function clean_init_widgets($id) {
    register_sidebar(array(
        'name'  =>  'Sidebar',
        'id'  =>  'sidebar',
        'before_widget' =>  '<div class="card col-lg-3 m-3 pt-3">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ));
}

add_action('widgets_init', 'clean_init_widgets');

// Customizer File
require get_template_directory() . '/inc/customizer.php';


add_theme_support('custom-background');
add_theme_support('custom-header');

?>
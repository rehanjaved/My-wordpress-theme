<?php 

// load stylesheet
function load_css() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');

}

add_action( 'wp_enqueue_scripts', 'load_css' );


function load_js() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/jquery-3.7.0.min.js', array(), '3.7.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '5.0.0', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
       wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.1.0', true );
}
add_action('wp_enqueue_scripts', 'load_js');




// Theme options
add_theme_support('menus'); 
add_theme_support('post-thumbnails'); 



// Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )   
);

// custome img sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);
add_theme_support('widgets'); 
add_image_size('car-gallery', 400, 400, false);


// register sidebars

function my_sidebars(){
   
    // Page sidebars
    register_sidebar (

        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // blog sidebars

    register_sidebar (

        array(
            'name' => 'blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

add_action('widgets_init', 'my_sidebars');




// adding cars as a custom post
function my_first_post_type()
{
    $args = array (
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',            
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array ('title', 'editor', 'thumbnail', 'custom-fields'),
        // 'rewrite' => array ('slug' => 'my-cars'),

    );
    register_post_type('cars', $args);
}

add_action('init', 'my_first_post_type');



// taxonomy to add different types or models of the car like ford, nissan, toyota

function my_first_taxonomy() {
   
    $args = array (
       
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',            
        ),

        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('Brands', array('cars'), $args );

}

add_action('init', 'my_first_taxonomy');
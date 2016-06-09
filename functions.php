<?php
function my_theme_enqueue_styles_and_scripts() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
    wp_enqueue_script( 'jquery' );


    // Register and Enqueue a Script
    // get_stylesheet_directory_uri will look up child theme location
    wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/vendor/bootstrap.min.js');
    wp_enqueue_script( 'bootstrap-js' );

    wp_register_script( 'velocity-js', get_stylesheet_directory_uri() . '/js/vendor/velocity.min.js');
    wp_enqueue_script( 'velocity-js' );

    wp_register_script( 'fastclick-js', get_stylesheet_directory_uri() . '/js/vendor/fastclick.js');
    wp_enqueue_script( 'fastclick-js' );

    wp_register_script( 'countup-js', get_stylesheet_directory_uri() . '/js/vendor/countUp.min.js');
    wp_enqueue_script( 'countup-js' );

    wp_register_script( 'retina-js', get_stylesheet_directory_uri() . '/js/vendor/retina.js');
    wp_enqueue_script( 'retina-js' );

    wp_register_script( 'pathfinder_main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'));
    wp_enqueue_script( 'pathfinder_main' );


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts' );
?>

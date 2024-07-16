<?php

function environs_load_scripts(){

    // Google Web Fonts
    // wp_enqueue_style( 'google-fonts-googleapis', '//fonts.googleapis.com', array(), null );
    // wp_enqueue_style( 'google-fonts-gstatic', '//fonts.gstatic.com', array(), null );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap', array(), null );


    //   Icon Font Stylesheet 
    wp_enqueue_style('custom-google-fonts', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
    wp_enqueue_style('environs-fonts-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');



    //  Libraries Stylesheet
    // wp_enqueue_style( 'environs-owlcarouselCss', get_stylesheet_uri(), get_theme_file_uri( '/lib/owlcarousel/assets/owl.carousel.min.css' ) );
    wp_enqueue_style( 'environs-owl.carousel.min.css', get_theme_file_uri( '/lib/owlcarousel/assets/owl.carousel.min.css' ), array(), '1.0.0' );
    wp_enqueue_style( 'environs-lightbox.min.css',get_template_directory_uri().'/lib/lightbox/css/lightbox.min.css' );
    // wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Customized Bootstrap Stylesheet 
    wp_enqueue_style( 'environs-bootstrap-minCss', get_theme_file_uri('/css/bootstrap.min.css') );

    // Template Stylesheet
    wp_enqueue_style( 'environs-template-style',get_template_directory_uri() . '/css/main.css' );


    // Template Style
    wp_enqueue_style( 'environs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    // wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );

        
    // JavaScript Libraries
    wp_enqueue_script('environs-ajax-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('environs-bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('environs-easing-js', get_theme_file_uri('/lib/easing/easing.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-waypoints-js', get_theme_file_uri('/lib/waypoints/waypoints.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-counterup-js', get_theme_file_uri('/lib/counterup/counterup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-owlcarousel-js', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-lightbox-js', get_theme_file_uri('/lib/lightbox/js/lightbox.min.js'), array('jquery'), '1.0', true);
    
    // Template Javascript
    wp_enqueue_script('environs-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'environs_load_scripts' );

function environs_config(){

    $textdomain = 'environs';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'environs_main_menu' => esc_html__( 'Main Menu', 'environs' ),
            'environs_footer_menu' => esc_html__( 'Footer Menu', 'environs' )
        )
    );

    $args = array(
        'height'    => 540,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'custom-logo', array(
    //     'width' => 200,
    //     'height'    => 110,
    //     'flex-height'   => true,
    //     'flex-width'    => true
    // ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );

    //add_theme_support( 'align-wide' );
    // add_theme_support( 'responsive-embeds' );
    // add_theme_support( 'editor-styles' );
    // add_editor_style( 'style-editor.css' );
    // add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'environs_config', 0 );
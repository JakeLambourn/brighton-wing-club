<?php


/**
 * Theme Setup
 */


function brandmeadow_setup() {
    add_theme_support( 'title-tag' ); //let wordpress manage the title tag

    add_theme_support( 'post-thumbnails', array('team','post','videos','blogauthors'));

    register_nav_menu('footer-menu',__( 'Footer Menu' ));

    register_nav_menu('header-menu',__( 'Header Menu' ));

    add_image_size('team-member',460,460,true);
    add_image_size('square-image',1000,1000,true);
    add_image_size('topbanner',732);
    add_image_size('templates-carousel',190);
    add_image_size('image-5cols',447);

    add_image_size('blog-thumbnail',560,400,true);

}
add_action( 'after_setup_theme', 'brandmeadow_setup' );



/**
 * Enqueues scripts and styles.
 */
function brandmeadow_scripts() {

    wp_enqueue_script( 'modernizer', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',array('jquery'),'2.8.3',false);
    wp_enqueue_script( 'jquery-cycle', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js',array('jquery'),'2.1.6',true);
    wp_enqueue_script( 'jquery-cycle-cener', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/plugin/jquery.cycle2.center.min.js',array('jquery'),'2.1.6',true);
    wp_enqueue_script( 'jquery-cycle-swipe', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/plugin/jquery.cycle2.swipe.min.js',array('jquery'),'2.1.6',true);

    wp_enqueue_script( 'jquery-scrollreveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js',array('jquery'),null,true);

    //Used for placeholder fixes on IE8/9
    wp_enqueue_script( 'jquery-placeholder', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js',array('jquery'),null,true);

    wp_enqueue_script('jquery-lity',get_template_directory_uri() . '/js/lity.min.js',array('jquery'),null,true);
    wp_enqueue_style( 'jquery-lity',get_template_directory_uri() . '/css/lity.min.css','1.0.1');


    //select2 select box replacement
    wp_enqueue_script( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js',array('jquery'),null,true);
    wp_enqueue_style( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css');

    wp_enqueue_script( 'brandmeadow-carousel', get_template_directory_uri() . '/js/brandmeadow_carousel.js',array(),null,true);
    wp_enqueue_script( 'brandmeadow', get_template_directory_uri() . '/js/brandmeadow.js',array(),'1.0.23',true);

    //if contact page
    if (get_the_ID() == PAGE_ID_CONTACT) {
        wp_enqueue_script( 'google_map', get_template_directory_uri() . '/js/google_map.js',array(),null,true);
    }

}
add_action( 'wp_enqueue_scripts', 'brandmeadow_scripts',5);

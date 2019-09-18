<?php
// Our custom post type function
function custom_postypes() {

    register_post_type( 'blogauthors',
        // CPT Options
        array(
            'labels'         => array(
                'name'          => __( 'Blog Authors' ),
                'singular_name' => __( 'Author' ),
                'add_new_item'  => __( 'Add New Author' ),
                'edit_item'    => __( 'Edit Author')
            ),
            'public'         => true,
            'has_archive'    => false,
            'hierarchical'   => false,
            'menu_icon'      => 'dashicons-universal-access',
            'supports'       => array('title','thumbnail')
        )
    );

    register_post_type( 'videos',
        // CPT Options
        array(
            'labels'         => array(
                'name'          => __( 'Videos' ),
                'singular_name' => __( 'Video' ),
                'add_new_item'  => __( 'Add New Video' ),
                'edit_item'    => __( 'Edit Video')
            ),
            'public'         => true,
            'has_archive'    => false,
            'hierarchical'   => true,
            'menu_icon'      => 'dashicons-format-video',
            'supports'       => array('title','thumbnail')
        )
    );

    register_post_type( 'team',
        // CPT Options
        array(
            'labels'         => array(
                'name'          => __( 'Team' ),
                'singular_name' => __( 'Team Member' ),
                'add_new_item'  => __( 'Add New Member' ),
                'edit_item'    => __( 'Edit Member')
            ),
            'public'         => true,
            'has_archive'    => false,
            'hierarchical'   => true,
            'menu_icon'      => 'dashicons-businessman',
            'supports'       => array('title','thumbnail')
        )
    );

    register_post_type( 'clients',
        // CPT Options
        array(
            'labels'         => array(
                'name'          => __( 'Clients' ),
                'singular_name' => __( 'Client' ),
                'add_new_item'  => __( 'Add New Client' ),
                'edit_item'    => __( 'Edit Client')
            ),
            'public'         => true,
            'has_archive'    => false,
            'hierarchical'   => true,
            'menu_icon'      => 'dashicons-groups',
            'supports'       => array('title')
        )
    );

    /*
    Moved into ACF - page type
    register_post_type( 'integrations',
        // CPT Options
        array(
            'labels'         => array(
                'name'          => __( 'Integrations' ),
                'singular_name' => __( 'Integration' ),
                'add_new_item'  => __( 'Add New Integration' ),
                'edit_item'    => __( 'Edit Integration')
            ),
            'public'         => true,
            'has_archive'    => false,
            'hierarchical'   => true,
            'menu_icon'      => 'dashicons-networking',
            'supports'       => array('title')
        )
    );
    */

}
// Hooking up our function to theme setup
add_action( 'init', 'custom_postypes' );


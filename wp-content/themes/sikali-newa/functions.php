<?php register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');



function createactivity_posttype() {
  
    register_post_type( 'activity',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Activity' ),
                'singular_name' => __( 'activity' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'activity'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createactivity_posttype' );



function createroomss_posttype() {
  
    register_post_type( 'roomss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Rooms' ),
                'singular_name' => __( 'roomss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'roomss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createroomss_posttype' );



function createservices_posttype() {
  
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'services'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createservices_posttype' );

function createtestimonials_posttype() {
  
    register_post_type( 'testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'testimonials' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'testimonials'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}


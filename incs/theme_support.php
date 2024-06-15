<?php
    //  theme title
    add_theme_support( 'title-tag' );

    // post thumbnail
    add_theme_support( 'post-thumbnails', array('post' , 'page' , 'service'));
    add_image_size( 'post-thumbnails', 900, 300, true );

    // excerpt
    function custom_excerpt_more( $read_more ) {
        return (
            '<br>' . '<a class="jrnl_excerpt_more" href="' . get_permalink($post->ID) . '">Read More</a>'
        );
    }
    add_filter( 'excerpt_more', 'custom_excerpt_more' );

    function custom_excerpt_length( $aexcerpt_length ) {
        return 40;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length' );

<?php
    function jrnl_files(){
        wp_enqueue_style("jrnl_stylesheet", get_stylesheet_uri());

        // adding root css
        wp_register_style('jrnl_root_stylesheet', get_template_directory_uri().'/css/root.css');
        wp_enqueue_style('jrnl_root_stylesheet');
        wp_register_style('jrnl_responsive_stylesheet', get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style('jrnl_responsive_stylesheet');
        wp_register_style('jrnl_customiser_stylesheet', get_template_directory_uri().'/css/customiser.css');
        wp_enqueue_style('jrnl_customiser_stylesheet');

        // google fonts
        wp_register_style( 'jrnl_google_fonts', 'https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong');
        wp_enqueue_style('jrnl_google_fonts');

        // cdn css
        wp_register_style( 'jrnl_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('jrnl_bootstrap');
        wp_register_style( 'jrnl_fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
        wp_enqueue_style('jrnl_fontawesome');
        wp_register_style( 'jrnl_google_font', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('jrnl_google_font');
        
        // calling jquery
        wp_enqueue_script('jquery');
        
        // adding root js
        wp_enqueue_script( 'jrnl_root_js',get_template_directory_uri().'/js/root.js' );
        wp_enqueue_script( 'jrnl_bootsttrap_popper_js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
        wp_enqueue_script( 'jrnl_bootsttrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js' );

    }
    add_action( 'wp_enqueue_scripts', 'jrnl_files' );
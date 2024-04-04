<?php
    /**
     * theme functions goes here
     */

    //  theme title
    add_theme_support( 'title-tag' );

    function jrnl_files(){
        wp_enqueue_style("jrnl_stylesheet", get_stylesheet_uri());

        // adding root css
        wp_register_style('jrnl_root_stylesheet', get_template_directory_uri().'/css/root.css');
        wp_enqueue_style('jrnl_root_stylesheet');
        wp_register_style('jrnl_responsive_stylesheet', get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style('jrnl_responsive_stylesheet');

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
    
    function jrnl_register_customisers($wp_customize){

        // Header Area
        $wp_customize -> add_section('jrnl_header_area', array(
            'title'=> __('Header Area','jrnl'),
            'description' => 'Edit your all the header content from here'
        ));
        $wp_customize -> add_setting('jrnl_header_logo', array(
            'default' => get_template_directory_uri().'/img/logo/Journalize_logo.png'
        ));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'jrnl_logo',array(
            'label'=> 'Logo Upload',
            'settings' => 'jrnl_header_logo',
            'section' => 'jrnl_header_area',
        )));

        // Menu Position
        $wp_customize -> add_section('jrnl_menu_position_section', array(
            'title'=> __('Menu Position','jrnl'),
            'description' => 'If you want you can update your menu position as you want'
        ));
        $wp_customize -> add_setting('jrnl_menu_position_setting', array(
            'default' => 'right_side_menu'
        ));
        $wp_customize -> add_control('jrnl_menu_position_control',array(
            'label'=> 'Select Position',
            'settings' => 'jrnl_menu_position_setting',
            'section' => 'jrnl_menu_position_section',
            'type'=> 'radio',
            'choices'=> array(
                'right_side_menu' => 'Right',
                'center_menu' => 'Center',
                'left_side_menu' => 'Left'
            )
        ));
    }
    add_action( 'customize_register', 'jrnl_register_customisers' );

    register_nav_menu( 'main_menu', __('Header Menu', 'jrnl') );
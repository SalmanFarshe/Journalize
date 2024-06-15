<?php
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
        
        //-------------------------------------------------------------------------
        //-------------------------------------------------------------------------
        //-------------------------------------------------------------------------
        // Color Section Register
        $wp_customize -> add_section('jrnl_site_colors', array(
            'title'=> __('Update Colors','jrnl'),
            'description' => 'If you want you can update your colors as you want'
        ));
        
        // background color
        $wp_customize -> add_setting('jrnl_background_color_setting', array(
            'default' => '#f9f9f9'
        ));
        $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'jrnl_background_color_setting',array(
            'label'=> 'Change Background Color',
            'settings' => 'jrnl_background_color_setting',
            'section' => 'jrnl_site_colors'
        )));

        // primary color
        $wp_customize -> add_setting('jrnl_primary_color_setting', array(
            'default' => '#2e86de'
        ));
        $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'jrnl_primary_color_setting',array(
            'label'=> 'Change Primary Color',
            'settings' => 'jrnl_primary_color_setting',
            'section' => 'jrnl_site_colors'
        )));
        //-------------------------------------------------------------------------
        //-------------------------------------------------------------------------
        //-------------------------------------------------------------------------
    }
    add_action( 'customize_register', 'jrnl_register_customisers' );
    
    function jrnl_theme_colors_func(){
        ?>
            <style>
                :root{
                    --primary-color: <?php echo get_theme_mod( 'jrnl_primary_color_setting' ); ?>;
                    --bg-color: <?php echo get_theme_mod( 'jrnl_background_color_setting' ); ?>;
                }
            </style>
        <?php
    }
    add_action( 'wp_head', 'jrnl_theme_colors_func' );
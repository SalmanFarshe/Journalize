<?php
    // widget register

    function jrnl_widget_register(){
        register_sidebar(array(
            'name' => 'Main Sidebar',
            'id' => 'Main-Sidebar',
            'description' => 'This widgets will be shown to the main sidebar',
            'before_widget' => '<div class="child_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar_title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => 'Footer Left',
            'id' => 'Footer-Left',
            'description' => 'This widgets will be shown to the main sidebar',
            'before_widget' => '<div class="child_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar_title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => 'Footer Middle',
            'id' => 'Footer-Middle',
            'description' => 'This widgets will be shown to the main sidebar',
            'before_widget' => '<div class="child_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar_title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => 'Footer Right',
            'id' => 'Footer-Right',
            'description' => 'This widgets will be shown to the main sidebar',
            'before_widget' => '<div class="child_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar_title">',
            'after_title' => '</div>',
        ));
    }
    add_action( 'widgets_init','jrnl_widget_register' )
?>
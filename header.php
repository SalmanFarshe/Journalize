<!DOCTYPE html>
<html class="no-js" lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> >
    <!-- header part start -->
    <div class="header_wrapper">
      <header id="header" class="header container <?php echo get_theme_mod( 'jrnl_menu_position_setting' )?>">
        <div class="logo_wrapper">
          <a href="<?php
            echo home_url();
          ?>" class="">
            <img src="<?php echo get_theme_mod( 'jrnl_header_logo' )?>" alt="" class="">
          </a>
        </div>
        <div class="menu">
          <div class="humbergerr" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
          </div>
          <?php 
            wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'menu') )
          ?>
        </div>
      </header>
    </div>
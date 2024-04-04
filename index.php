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
          <a href="" class="">
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
    <section class="container">
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <h1>Salman</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat necessitatibus ut pariatur nobis nulla, voluptatum quod incidunt. Odit nobis expedita ratione obcaecati blanditiis sit similique! Adipisci nisi architecto fuga eaque?</p>
    </section>
    <!-- header part end -->

    <?php wp_footer();?>
</body>
</html>
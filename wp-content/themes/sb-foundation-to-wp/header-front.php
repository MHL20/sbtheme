<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/sb-favicon.png">
  <title>
    <?php bloginfo( 'name' ); ?>
    <?php wp_title( '|', true, 'left' ); ?>
  </title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- LANDING PAGE SLIDER START -->

  <div class="slideshow-wrapper">
    <div class="preloader">
    </div>
    <ul class="example-orbit" data-orbit data-options="bullets:false; slide_number:false; stack_on_small: false; pause_on_hover: false; timer_speed: 05750">
      <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/landing_feature_1.jpg);" alt="slide 1">
        <div class="orbit-caption">
          <h1 class="text-center">Tap Into The Code</h1>
        </div>
      </li>
      <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/landing_feature_2.jpg);" alt="slide 2">
        <div class="orbit-caption">
          <h1 class="text-center">Know Your Fans</h1>
        </div>
      </li>
      <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/landing_feature_3.jpg);" alt="slide 3">
        <div class="orbit-caption">
          <h1 class="text-center">Leverage the Graph</h1>
        </div>
      </li>
    </ul>
  </div>

  <!-- LANDING PAGE SLIDER END -->


  <!-- LANDING PAGE LOGO (links past slider to landing content) START -->

  <div class="sb-home-logo">
    <p class="text-center"><a href="#landing-home"><img src="<?php bloginfo('template_directory'); ?>/images/sbRoundLogo.png" alt="Social Brew logo"></a></p>
  </div>

  <!-- LANDING PAGE LOGO END -->

  
  <!-- MAIN NAVIGATION ('header-menu') START -->

  <div class="sticky">
    <nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true" role="navigation">
      <ul class="title-area">
        <li class="name">
            <h1><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sbIcon_sm.png" alt="Social Brew Icon"><span>Social<strong>Brew</strong></span></a></h1>
        </li>          
        <li class="toggle-topbar"><a href="#">Menu</a></li>
      </ul>
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <?php
        wp_nav_menu(array(
            'container' => false,
            'menu_class' => 'right',
            'theme_location' => 'header-menu',
            'walker' => new F5_TOP_BAR_WALKER(),
        ));
        ?>
        <!-- Left Nav Section -->
        <?php
        wp_nav_menu(array(
            'container' => false,
            'menu_class' => 'left',
            'theme_location' => 'header-menu-left',
        ));
        ?>
      </section>
    </nav>
  </div>

  <!-- MAIN NAVIGATION END -->
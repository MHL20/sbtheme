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

  <!-- STATIC PAGE BANNER START -->
  <div class="sb-page-header" id="about" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/<?php echo sanitize_title_with_dashes( get_the_title() ); ?>.jpg')">
    <div class="row">
      <div class="sb-header-logo">
        <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sbRoundLogo.png" alt="Social Brew logo"></a></p>
      </div>
    </div>
  </div>
  <!-- STATIC PAGE BANNER END -->

  <!-- MAIN NAVIGATION ('header-menu') START -->

  <div class="sticky sb-sticky">
    <nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true" role="navigation">
      <ul class="title-area">
        <li class="name">
            <h1><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sbIcon_sm.png" alt="Social Brew Icon"><span>Social<strong>Brew</strong></span></a></h1>
        </li>          
        <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
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
        <ul class="left">
          <li class="divider"></li>
          <li><a href="#">Sign In</a></li>
        </ul>
      </section>
    </nav>
  </div>

  <!-- MAIN NAVIGATION END -->
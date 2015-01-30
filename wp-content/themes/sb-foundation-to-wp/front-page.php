<?php get_header( 'front' ); ?>

  <!-- STATIC LANDING PAGE CONTENT START -->

  <a name="landing-home"></a>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ;?>

      <?php the_content(); ?>

    <?php endwhile; endif; ?>

  

      <div class="sb-landing-widgets">
        <div class="row">
          <div class="small-10 small-centered medium-4 medium-uncentered columns">
              <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
          </div>

          <div class="small-10 small-centered medium-4 medium-uncentered columns">
            <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
          </div>

          <div class="small-10 small-centered medium-4 medium-uncentered columns">
            <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
          </div>
        </div>
      </div> 



<!--   <div class="row">
    <div class="small-10 small-centered large-12 columns">
      <p><strong>Do you like this page?</strong><br />
        Social media links/likes/tags go here...</p>
    </div>
  </div> -->

<?php get_footer(); ?>
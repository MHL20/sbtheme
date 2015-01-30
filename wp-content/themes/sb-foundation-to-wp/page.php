<?php get_header(); ?>

<!-- STATIC PAGE CONTENT START -->
  <!-- STATIC LANDING PAGE MAIN BODY START -->
  <div class="row sb-first-row sb-last-row" data-equalizer>
    <!-- STATIC LANDING PAGE MAIN COLUMN START -->
    <div class="small-10 small-centered large-8 large-uncentered columns" data-equalizer-watch>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <hr />
        <?php if ( dynamic_sidebar( 'page-like' ) ); ?>

      <?php endwhile; else: ?>

        <h2>Oh no!</h2>
        <p>No content is appearing for this page!</p>

      <?php endif; ?>

    </div>
    <!-- STATIC LANDING PAGE MAIN COLUMN END -->

    <!-- STATIC LANDING PAGE SIDEBAR START -->

    <div class="small-10 small-centered large-4 large-uncentered columns show-for-large-up sb-sidebar" data-equalizer-watch>
      <div>

      <?php get_sidebar(); ?>

      </div>
    </div>

  </div>
  <!-- STATIC LANDING PAGE MAIN BODY END -->

  <?php get_footer(); ?>
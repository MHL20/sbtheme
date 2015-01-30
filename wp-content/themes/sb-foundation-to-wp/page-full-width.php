<?php 

  /*
    Template Name: Full Width Template
  */

 ?>

<?php get_header(); ?>

<!-- STATIC PAGE CONTENT START -->
  <!-- STATIC LANDING PAGE MAIN BODY START -->
  <div class="row sb-first-row">
    <!-- STATIC LANDING PAGE MAIN COLUMN START -->
    <div class="small-10 small-centered large-12 large-uncentered columns">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; else: ?>

        <h2>Oh no!</h2>
        <p>No content is appearing for this page!</p>

      <?php endif; ?>


    </div>
    <!-- STATIC LANDING PAGE MAIN COLUMN END -->

  </div>
  <!-- STATIC LANDING PAGE MAIN BODY END -->

  <?php get_footer(); ?>
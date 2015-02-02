<?php get_header( 'blog' ); ?>

<!-- STATIC PAGE CONTENT START -->
<!-- STATIC LANDING PAGE MAIN BODY START -->
<div class="row sb-first-row sb-last-row" data-equalizer>
  <!-- STATIC LANDING PAGE MAIN COLUMN START -->
  <div class="small-10 small-centered large-8 large-uncentered columns" data-equalizer-watch>

    <div class="leader">
      <h1><?php wp_title( '' ); ?> Blog Posts</h1>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
      <h3 class="sb-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      <ul class="sb-meta">
        <li class="author">
          <span class="sb-avatar small">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
          </span>
          by <?php the_author_posts_link(); ?>
        </li>
        <li>&emsp;|&emsp;</li>
        <li class="date"><?php the_time( 'F j, Y' ); ?></li>
        <li>&emsp;|&emsp;</li>
        <li class="cat"><?php the_category( ', ' ); ?></li>
      </ul>

      <?php if( get_the_post_thumbnail() ) : ?>
        <div class="img-container">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      <?php endif; ?>
      <p><?php echo strip_tags( get_the_excerpt() ); ?></p>
      </article>

  <hr />

<?php endwhile; else : ?>

  <h2>Oh no!</h2>
  <p>No content is appearing for this page!</p>

<?php endif; ?>


</div>

<!-- POST PAGE MAIN COLUMN END -->

<!-- POST PAGE SIDEBAR START -->

<div class="small-10 small-centered large-4 large-uncentered columns show-for-large-up sb-sidebar" data-equalizer-watch>
  <div>

    <?php get_sidebar( 'blog' ); ?>

  </div>
</div>

<!-- POST PAGE SIDEBAR END -->

</div>

<!-- POST PAGE MAIN BODY END -->

<?php get_footer(); ?>
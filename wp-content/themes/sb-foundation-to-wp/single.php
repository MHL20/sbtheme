<?php get_header( 'blog' ); ?>

<!-- POST PAGE CONTENT START -->
<!-- POST PAGE MAIN BODY START -->
<div class="row sb-first-row sb-last-row" data-equalizer>
  <!-- POST PAGE MAIN COLUMN START -->
  <div class="small-10 small-centered large-8 large-uncentered columns" data-equalizer-watch>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
      
      <h3 class="sb-post"><?php the_title(); ?></h3>
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
        <li class="cat"><?php the_category( '&emsp;' ); ?></li>
      </ul>
      <?php if( get_the_post_thumbnail() ) : ?>
        <div class="img-container">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php comments_template(); ?>
    </article>

  <hr />

<?php endwhile; else : ?>

  <h2>Oh no!</h2>
  <p>No content is appearing for this page!</p>

<?php endif; ?>

  <!-- Add the pagination functions here. -->

  <div class="sb-post-nav">
    <div class="nav-previous alignright sb-readmore-link"><?php next_post( '% ', 'next post &raquo;', 'no' ); ?></div>
    <div class="nav-next alignleft sb-readmore-link"><?php previous_post( ' %', '&laquo; previous post', 'no' ); ?></div>
  </div>

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
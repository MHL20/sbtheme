<?php get_header( 'blog' ); ?>

<!-- BLOG PAGE CONTENT START -->

<!-- BLOG PAGE MAIN BODY START -->

<div class="row sb-first-row sb-last-row" data-equalizer>

  <!-- BLOG PAGE MAIN COLUMN START -->

  <div class="small-10 small-centered large-8 large-uncentered columns" data-equalizer-watch>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class('post'); ?>>

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

  <!-- Add the pagination functions here. -->

    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>


</div>

<!-- BLOG PAGE MAIN COLUMN END -->

<!-- BLOG PAGE SIDEBAR START -->

<div class="small-10 small-centered large-4 large-uncentered columns show-for-large-up sb-sidebar" data-equalizer-watch>
  <div>

    <?php get_sidebar( 'blog' ); ?>

  </div>
</div>

<!-- BLOG PAGE SIDEBAR END -->

</div>

<!-- BLOG PAGE MAIN BODY END -->

<?php get_footer(); ?>
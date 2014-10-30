<?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <article <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'egzpo'), 'after' => '</p></nav>')); ?>
      </footer>


      <section class="page-nav">
      <?php $prev_post = get_previous_post(); ?>
      <?php $next_post = get_next_post(); ?>
      <?php if ( !empty( $prev_post ) ) : ?>
        <a class="btn bottom" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $prev_post->ID ); ?>"><span class="btn-label">&laquo; <?php echo get_the_title( $prev_post->ID ); ?></span></a>
      <?php endif; ?>
      <?php if ( !empty( $next_post ) ) : ?>  
        <a class="btn bottom" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $next_post->ID ); ?>"><span class="btn-label"><?php echo get_the_title( $next_post->ID ); ?> &raquo;</span></a>
      <?php endif; ?>

      </section>
    </article>
  </div>
<?php endwhile; ?>

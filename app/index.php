<?php get_template_part('templates/page', 'header-blog'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'egzpo'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="container">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'egzpo')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'egzpo')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

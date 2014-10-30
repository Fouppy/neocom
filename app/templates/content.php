<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
	<a class="btn" data-effeckt-type="fill-from-top" href="<?php the_permalink(); ?>"><span class="btn-label">Lire la suite</span></a>
  </div>
</article>

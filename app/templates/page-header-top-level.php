<div class="page-header green">
	<div class="container">
		<div>
		  <h1><?php echo get_post_meta($post->ID, 'titre', true); ?></h1>
		  <h2><?php echo get_post_meta($post->ID, 'sous-titre', true); ?></h2>
		</div>
		<div>
		<?php while (have_posts()) : the_post(); ?>
		  <?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="container main-content">
	<section>
	<?php while (have_posts()) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; ?>
	</section>
	<aside class="sidebar">
		<h4>Outcome</h4>
		<ul class="outcome">
			<?php for($i = 0, $size = count(get_post_meta($post->ID, 'outcome')); $i < $size; ++$i) { ?>
			<li><?php echo get_post_meta($post->ID, 'outcome')[$i]; ?></li>
			<?php } ?>
		</ul>
	</aside>
</div>

<div class="container footer-nav">
	<h1>Nos autres services</h1>
	<nav><ul>
	<?php
	$descendants = get_pages(array('child_of' => $post->post_parent, 'exclude' => $post->ID));

	foreach ($descendants as $page) { ?>
		<li><a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($page->ID); ?>"><span class="btn-label"><?php echo get_the_title($page->ID); ?></span></a></li>
	<?php } ?>
	</ul></nav>
</div>
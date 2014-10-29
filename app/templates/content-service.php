<div class="container main-content">
	<section>
		<h4><?php the_field('titre_approche'); ?></h4>
		<?php the_field('approche'); ?>
		<br><br>
		<h4><?php the_field('titre_solutions'); ?></h4>
		<?php the_field('solutions'); ?>
	</section>
	<aside class="sidebar">
		<h4><?php the_field('titre_outcome'); ?></h4>
		<?php the_field('outcome'); ?>
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
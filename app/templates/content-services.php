<?php 

$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");

if ($pagekids) {
	$firstchild = $pagekids[2];
	$secondchild = $pagekids[3];
	$thirdchild = $pagekids[0];
	$fourthchild = $pagekids[1];
}
?>
<div class="blue-wb-left">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($firstchild->ID); ?></h3>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4>Notre approche</h4>
				<?php echo wpautop(get_post_field('post_excerpt', $firstchild->ID)); ?>
			</div>
			<div class="liste">
	  			<ul>
	  				<?php for($i = 0, $size = count(get_post_meta($firstchild->ID, 'outcome')); $i < $size; ++$i) { ?>
			  		<li><?php echo get_post_meta($firstchild->ID, 'outcome')[$i]; ?></li>
			  		<?php } ?>
			  	</ul>
			</div>
  			<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($firstchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-right">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($secondchild->ID); ?></h3>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4>Notre approche</h4>
				<?php echo wpautop(get_post_field('post_excerpt', $secondchild->ID)); ?>
			</div>
			<div class="liste">
	  			<ul>
	  				<?php for($i = 0, $size = count(get_post_meta($secondchild->ID, 'outcome')); $i < $size; ++$i) { ?>
			  		<li><?php echo get_post_meta($secondchild->ID, 'outcome')[$i]; ?></li>
			  		<?php } ?>
			  	</ul>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($secondchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-left">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($thirdchild->ID); ?></h3>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4>Notre approche</h4>
				<?php echo wpautop(get_post_field('post_excerpt', $thirdchild->ID)); ?>
			</div>
			<div class="liste">
	  			<ul>
	  				<?php for($i = 0, $size = count(get_post_meta($thirdchild->ID, 'outcome')); $i < $size; ++$i) { ?>
			  		<li><?php echo get_post_meta($thirdchild->ID, 'outcome')[$i]; ?></li>
			  		<?php } ?>
			  	</ul>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($thirdchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-right">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($fourthchild->ID); ?></h3>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4>Notre approche</h4>
				<?php echo wpautop(get_post_field('post_excerpt', $fourthchild->ID)); ?>
			</div>
			<div class="liste">
	  			<ul>
	  				<?php for($i = 0, $size = count(get_post_meta($fourthchild->ID, 'outcome')); $i < $size; ++$i) { ?>
			  		<li><?php echo get_post_meta($fourthchild->ID, 'outcome')[$i]; ?></li>
			  		<?php } ?>
			  	</ul>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($fourthchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
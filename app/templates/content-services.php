<?php 

$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");

if ($pagekids) {
	$firstchild = $pagekids[0];
	$secondchild = $pagekids[1];
	$thirdchild = $pagekids[2];
	$fourthchild = $pagekids[3];
}
?>
<div class="blue-wb-left">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($firstchild->ID); ?></h3>
	        <?php 

	        $image1 = get_field('picto_1_vert', $firstchild->ID);
	        // vars
	        $url1 = $image1['url'];
	        $title1 = $image1['title'];
	        $alt1 = $image1['alt'];
	        $caption1 = $image1['caption'];

	        $image2 = get_field('picto_2_vert', $firstchild->ID);
	        // vars
	        $url2 = $image2['url'];
	        $title2 = $image2['title'];
	        $alt2 = $image2['alt'];
	        $caption2 = $image2['caption'];

	        $image3 = get_field('picto_3_vert', $firstchild->ID);
	        // vars
	        $url3 = $image3['url'];
	        $title3 = $image3['title'];
	        $alt3 = $image3['alt'];
	        $caption3 = $image3['caption'];

	        // thumbnail
	        $size = 'picto-services';
	        $thumb = $image1['sizes'][ $size ];
	        $width = $image1['sizes'][ $size . '-width' ];
	        $height = $image1['sizes'][ $size . '-height' ];

	        ?>
			<ul class="pictos">
				<li><img src="<?php echo $url1; ?>" alt="<?php echo $alt1; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url2; ?>" alt="<?php echo $alt2; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url3; ?>" alt="<?php echo $alt3; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
			</ul>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4><?php the_field('titre_approche', $firstchild->ID); ?></h4>
				<?php the_field('intro_approche', $firstchild->ID); ?>
			</div>
			<div class="liste">
				<?php the_field('outcome', $firstchild->ID); ?>
			</div>
  			<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($firstchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-right">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($secondchild->ID); ?></h3>
	        <?php 

	        $image1 = get_field('picto_1_vert', $secondchild->ID);
	        // vars
	        $url1 = $image1['url'];
	        $title1 = $image1['title'];
	        $alt1 = $image1['alt'];
	        $caption1 = $image1['caption'];

	        $image2 = get_field('picto_2_vert', $secondchild->ID);
	        // vars
	        $url2 = $image2['url'];
	        $title2 = $image2['title'];
	        $alt2 = $image2['alt'];
	        $caption2 = $image2['caption'];

	        $image3 = get_field('picto_3_vert', $secondchild->ID);
	        // vars
	        $url3 = $image3['url'];
	        $title3 = $image3['title'];
	        $alt3 = $image3['alt'];
	        $caption3 = $image3['caption'];

	        ?>
			<ul class="pictos">
				<li><img src="<?php echo $url1; ?>" alt="<?php echo $alt1; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url2; ?>" alt="<?php echo $alt2; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url3; ?>" alt="<?php echo $alt3; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
			</ul>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4><?php the_field('titre_approche', $secondchild->ID); ?></h4>
				<?php the_field('intro_approche', $secondchild->ID); ?>
			</div>
			<div class="liste">
				<?php the_field('outcome', $secondchild->ID); ?>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($secondchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-left">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($thirdchild->ID); ?></h3>
	        <?php 

	        $image1 = get_field('picto_1_vert', $thirdchild->ID);
	        // vars
	        $url1 = $image1['url'];
	        $title1 = $image1['title'];
	        $alt1 = $image1['alt'];
	        $caption1 = $image1['caption'];

	        $image2 = get_field('picto_2_vert', $thirdchild->ID);
	        // vars
	        $url2 = $image2['url'];
	        $title2 = $image2['title'];
	        $alt2 = $image2['alt'];
	        $caption2 = $image2['caption'];

	        $image3 = get_field('picto_3_vert', $thirdchild->ID);
	        // vars
	        $url3 = $image3['url'];
	        $title3 = $image3['title'];
	        $alt3 = $image3['alt'];
	        $caption3 = $image3['caption'];

	        ?>
			<ul class="pictos">
				<li><img src="<?php echo $url1; ?>" alt="<?php echo $alt1; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url2; ?>" alt="<?php echo $alt2; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url3; ?>" alt="<?php echo $alt3; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
			</ul>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4><?php the_field('titre_approche', $thirdchild->ID); ?></h4>
				<?php the_field('intro_approche', $thirdchild->ID); ?>
			</div>
			<div class="liste">
				<?php the_field('outcome', $thirdchild->ID); ?>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($thirdchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
<div class="blue-wb-right">
	<div class="half-container">
		<div>
			<h3><?php echo get_the_title($fourthchild->ID); ?></h3>
	        <?php 

	        $image1 = get_field('picto_1_vert', $fourthchild->ID);
	        // vars
	        $url1 = $image1['url'];
	        $title1 = $image1['title'];
	        $alt1 = $image1['alt'];
	        $caption1 = $image1['caption'];

	        $image2 = get_field('picto_2_vert', $fourthchild->ID);
	        // vars
	        $url2 = $image2['url'];
	        $title2 = $image2['title'];
	        $alt2 = $image2['alt'];
	        $caption2 = $image2['caption'];

	        $image3 = get_field('picto_3_vert', $fourthchild->ID);
	        // vars
	        $url3 = $image3['url'];
	        $title3 = $image3['title'];
	        $alt3 = $image3['alt'];
	        $caption3 = $image3['caption'];

	        ?>
			<ul class="pictos">
				<li><img src="<?php echo $url1; ?>" alt="<?php echo $alt1; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url2; ?>" alt="<?php echo $alt2; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
				<li><img src="<?php echo $url3; ?>" alt="<?php echo $alt3; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></li>
			</ul>
		</div>
	</div>
	<div class="half-container">
		<div>
			<div class="extrait">
				<h4><?php the_field('titre_approche', $fourthchild->ID); ?></h4>
				<?php the_field('intro_approche', $fourthchild->ID); ?>
			</div>
			<div class="liste">
				<?php the_field('outcome', $fourthchild->ID); ?>
			</div>
	  		<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($fourthchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
		</div>
	</div>
</div>
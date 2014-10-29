<section>

	<div class="container">	
		<h1><?php the_field('titre_agence'); ?></h1>
		<h2><?php the_field('sous-titre_agence'); ?></h2>
        <a class="btn" data-effeckt-type="fill-from-top" href="<?php echo esc_url(get_permalink(get_page_by_title('Notre agence')));?>"><span class="btn-label"><?php the_field('lien_agence'); ?></span></a>
	</div>

</section>

<section class="blue wb">

	<div class="container">
		<h1><?php the_field('titre_services'); ?></h1>
		<h2><?php the_field('sous-titre_services'); ?></h2>

		<?php 
		$post = get_page_by_title('Nos services');
		$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");

		if ($pagekids) {
			$firstchild = $pagekids[0];
			$secondchild = $pagekids[1];
			$thirdchild = $pagekids[2];
			$fourthchild = $pagekids[3];
		}
		?>

		<div>
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

				<div class="extrait">
					<?php the_field('intro_approche', $firstchild->ID); ?>
				</div>

				<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($firstchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
			</div>
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

				<div class="extrait">
					<?php the_field('intro_approche', $secondchild->ID); ?>
				</div>

				<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($secondchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
			</div>
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

				<div class="extrait">
					<?php the_field('intro_approche', $thirdchild->ID); ?>
				</div>

				<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($thirdchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
			</div>
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

				<div class="extrait">
					<?php the_field('intro_approche', $fourthchild->ID); ?>
				</div>

				<a class="btn" data-effeckt-type="fill-from-top" href="<?php echo get_permalink($fourthchild->ID); ?>"><span class="btn-label">En savoir plus</span></a>
			</div>
		</div>
	</div>

</section>

<section>

	<div class="container">
		<h1><?php the_field('titre_realisation'); ?></h1>
		<h2><?php the_field('sous-titre_realisation'); ?></h2>

		<div class="realisations">
	        <?php
	            $wp_query = new WP_Query( 
	                array(
	                    'posts_per_page' => 3,
	                    'post_type'      => 'nos-references',
	                    'post__in'       => get_option( 'sticky_posts' )
	                )
	            );
	            
	            while ($wp_query->have_posts()) : $wp_query->the_post();
	        ?>
	        <a href="<?php echo the_permalink(); ?>">
	            <figure class="references">
	                <div><?php the_post_thumbnail('album-grid'); ?></div>
	                <figcaption>
	                    <h3><?php echo the_title(); ?></h3>
	                    <p><?php the_field('description'); ?></p>
	                </figcaption>
	            </figure>
	        </a>
	        <?php endwhile; ?>
	        <?php wp_reset_query(); ?>
        </div>

        <a class="btn" data-effeckt-type="fill-from-top" href="<?php echo esc_url(get_permalink(get_page_by_title('Nos références')));?>"><span class="btn-label"><?php the_field('lien_realisations'); ?></span></a>
    </div>

</section>
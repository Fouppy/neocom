<div class="page-header green">
	<div class="container">
	  <h1>
	    <?php echo egzpo_title(); ?>
	  </h1>
	        <?php 

	        $image1 = get_field('picto_1_bleu');
	        // vars
	        $url1 = $image1['url'];
	        $title1 = $image1['title'];
	        $alt1 = $image1['alt'];
	        $caption1 = $image1['caption'];

	        $image2 = get_field('picto_2_bleu');
	        // vars
	        $url2 = $image2['url'];
	        $title2 = $image2['title'];
	        $alt2 = $image2['alt'];
	        $caption2 = $image2['caption'];

	        $image3 = get_field('picto_3_bleu');
	        // vars
	        $url3 = $image3['url'];
	        $title3 = $image3['title'];
	        $alt3 = $image3['alt'];
	        $caption3 = $image3['caption'];

	        // thumbnail
	        $size = 'picto-service';
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
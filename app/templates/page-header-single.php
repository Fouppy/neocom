<?php $prev_post = get_previous_post(); ?>
<?php $next_post = get_next_post(); ?>
<div class="page-header blue">
	<div class="container">
	<?php if ( !empty( $prev_post ) ) : ?>
		<a class="btn post-prev" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $prev_post->ID ); ?>"><span class="btn-label">&lt;</span></a>
	<?php endif; ?>
		<h1><?php echo egzpo_title(); ?></h1>
		<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
	<?php if ( !empty( $next_post ) ) : ?>  
		<a class="btn post-next" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $next_post->ID ); ?>"><span class="btn-label">&gt;</span></a>
	<?php endif; ?>
	</div>
</div>
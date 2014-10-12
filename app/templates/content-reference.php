<div class="container">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">
      <section>
        <h3><?php the_field('titre_presentation'); ?></h3>
        <?php the_field('texte_presentation'); ?>
        <?php 

        $image = get_field('image_presentation');
        // vars
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'album-grid';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];

        if( $caption ): ?>

          <div class="wp-caption">

        <?php endif; ?>

          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        <?php if( $caption ): ?>

            <p class="wp-caption-text"><?php echo $caption; ?></p>

          </div>

        <?php endif; ?>
      </section>
      <section>
        <h3><?php the_field('titre_missions'); ?></h3>
      </section>
      <section>
        <h3><?php the_field('titre_solutions'); ?></h3>
      </section>
      <section>
        <blockquote>
          <p><?php the_field('temoignage'); ?></p>
          <cite><?php the_field('auteur'); ?></cite>
        </blockquote>
      </section>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'egzpo'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
</div>
<div class="container">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">

      <section>
        <div class="third">
          <h3><?php the_field('titre_presentation'); ?></h3>
          <?php the_field('texte_presentation'); ?>
        </div>

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

        ?>

        <div>

        <?php

        if( $caption ): ?>

          <figure class="wp-caption">

        <?php endif; ?>

          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">

        <?php if( $caption ): ?>

            <figcaption class="wp-caption-text"><?php echo $caption; ?></figcaption>

          </figure>

        <?php endif; ?>

        </div>

      </section>

      <section>
        <div class="third">
          <h3><?php the_field('titre_missions'); ?></h3>
          <?php the_field('texte_missions'); ?>
        </div>

        <?php 

        $image = get_field('image_missions');
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

        ?>

        <div>

        <?php

        if( $caption ): ?>

          <figure class="wp-caption">

        <?php endif; ?>

          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">

        <?php if( $caption ): ?>

            <figcaption class="wp-caption-text"><?php echo $caption; ?></figcaption>

          </figure>

        <?php endif; ?>

        </div>
      </section>

      <section>
        <div class="third">
          <h3><?php the_field('titre_solutions'); ?></h3>
          <?php the_field('texte_solutions'); ?>
        </div>

        <?php 

        $image = get_field('image_solutions');
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

        ?>

        <div>

        <?php

        if( $caption ): ?>

          <figure class="wp-caption">

        <?php endif; ?>

          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">

        <?php if( $caption ): ?>

            <figcaption class="wp-caption-text"><?php echo $caption; ?></figcaption>

          </figure>

        <?php endif; ?>

        </div>
      </section>

      <section>
        <blockquote>
          <p><?php the_field('temoignage'); ?></p>
          <cite><span><?php the_field('auteur'); ?></span></cite>
        </blockquote>
      </section>

      <section>
      <?php $prev_post = get_previous_post(); ?>
      <?php $next_post = get_next_post(); ?>
      <?php if ( !empty( $prev_post ) ) : ?>
        <a class="btn bottom" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $prev_post->ID ); ?>"><span class="btn-label">Réalisation précédente</span></a>
      <?php endif; ?>
      <?php if ( !empty( $next_post ) ) : ?>  
        <a class="btn bottom" data-effeckt-type="fill-from-top" href="<?php echo get_permalink( $next_post->ID ); ?>"><span class="btn-label">Réalisation suivante</span></a>
      <?php endif; ?>

      </section>

    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'egzpo'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
</div>
<div class="container">
    <div class="toggle-view top">
        <a href="#more-references" class="all close">Séléction</a> / <a href="#more-references" class="all open">Tout afficher</a>
    </div>
    <section>
        <?php
            $wp_query = new WP_Query( 
                array(
                    'posts_per_page' => -1,
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
    </section>
</div>

<div class="container">
    <section id="more-references" class="more-references">
        <?php
            $wp_query = new WP_Query( 
                array(
                    'posts_per_page' => -1,
                    'post_type'      => 'nos-references',
                    'post__not_in'       => get_option( 'sticky_posts' )
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
    </section>
    <div class="toggle-view bottom">
        <a href="#more-references" class="all plus">En voir plus</a>
        <a href="#more-references" class="all moins">Réduire</a>
    </div>
</div>

<div class="container">
    <section class="clients">
        <h1>Ils nous font confiance</h1>
    </section>
</div>
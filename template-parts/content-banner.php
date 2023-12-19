<?php 
    $latest_post = get_posts('numberposts=1');
        if($latest_post) {
            foreach($latest_post as $post) :
                setup_postdata($post);
            ?>                
                <img alt="main banner" src="<?php the_field('main-banner'); ?>">
                <h2 class="news-banner__title"><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>" class="button news-banner__button">Читати більше<svg class="banner__arrow-icon">
                            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                            </svg></a>
            <?php
                endforeach;
            }
            ?>
        <?php wp_reset_postdata(); ?>
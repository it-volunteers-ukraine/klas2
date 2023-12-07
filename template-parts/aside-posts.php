<article class="aside-post-box">
            <div class="aside-post__img">
                <a class="aside-image__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php get_template_part( 'template-parts/check_thumbnail' ); ?>
                </a>
            </div>
            <div class="aside-post__text">
                <h3 class="aside-post__title"><?php the_title(); ?></h3>
                
                <div class="aside-post__details">
                    <p class="aside-post__time"><?php the_time('d.m.y'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button read-more_button">Читати більше<svg class="arrow-icon">
                        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
</article>
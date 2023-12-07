<section>     
     <div class="container">
            <div class="single__banner">
                <img alt="main banner" src="<?php the_field('main-banner'); ?>">
                <h1 class="single__post-title"><?php the_title(); ?></h1>
                <p class="single__post-time"><?php the_time('d.m.y'); ?></p>
            </div>
            <div class="post__content">
                <p class="post__text"><?php the_content(); ?></p>
                    <?php if(have_rows('gallery')):?>
                        <div class="single-post__slider swiper-container">

                           <ul class="single-post__wrap swiper-wrapper" id="lightgallery">
                                <?php while(have_rows('gallery')): the_row();
                                 $img = get_sub_field('post-img');  ?>
                                  <li class="swiper-slide img-slider__image">
                                    <a class="one-image__wrap" href="<?php echo esc_url($img); ?>" data-lightbox="swiper-images" aria-label="Подивитись фото у повному розмірі">
                                        <img id="image-link" class="swiper-lazy" loading="lazy" src="<?php echo esc_url($img); ?>" alt="img">
                                    </a>
                                </li>
                                <?php endwhile;?>
                            </ul>
                            <?php endif; ?>
                        </div>
            </div>
     </div>
                                  
                    
</section>

<?php get_template_part( 'template-parts/join-us'); ?>
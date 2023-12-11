<section class="post__section">     
     <div class="container">
            <div class="single__banner">
                <img alt="main banner" src="<?php the_field('main-banner'); ?>">
                <h1 class="single__post-title"><?php the_title(); ?></h1>
                <p class="single__post-time"><?php the_time('d.m.y'); ?></p>
            </div>
            <div class="single__container">
                <div class="post__content">
                    <?php the_content(); ?>
                    <?php if(have_rows('gallery')):?>
                        <div class="single-post__slider2 swiper-container">
                            <ul class="swiper-wrapper " id="lightgallery">
                                <?php while(have_rows('gallery')): the_row();
                                     $img = get_sub_field('post-img');  ?>
                                        <li class="swiper-slide">
                                            <img id="image-link" src="<?php echo $img; ?>" alt="img">
                                        </li>
                                <?php endwhile;?>
                            </ul>
                            <div class="swiper-pagination"></div>  
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>        
                        </div>
                        <div thumbsSlider="" class="single-post__slider">
                            <ul class="swiper-wrapper ">
                                <?php while(have_rows('gallery')): the_row();
                                    $img = get_sub_field('post-img');  ?>
                                        <li class="swiper-slide">
                                            <img id="image-link" src="<?php echo esc_url($img); ?>" alt="img">
                                        </li>
                                <?php endwhile;?>
                            </ul>
                            <div class="swiper-pagination"></div>  
                        </div>
                    <?php endif; ?> 
                </div>
               <?php get_template_part( 'template-parts/aside-posts'); ?>
            </div> 
      </div>
</section>

<?php get_template_part( 'template-parts/join-us'); ?>
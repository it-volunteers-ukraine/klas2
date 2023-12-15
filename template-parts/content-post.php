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
                    <?php 
                    $images = get_field('gallery');
                    if( $images ): ?>
                        <div class="wrapper-for-sliders">
                            <div class="single-post__slider2 swiper-container">
                                <ul class="swiper-wrapper " id="lightgallery">
                                <?php foreach( $images as $image ) : ?>
                                    <li class="swiper-slide" >
                                        <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="gallery">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                         </a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <div thumbsSlider="" class="single-post__slider">
                                <ul class="swiper-wrapper ">
                                <?php foreach( $images as $image ): ?>
                                    <li class="swiper-slide">
                                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="single-post__swiper__pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>      
                        </div>
                    <?php endif; ?> 
                    </div>
               <?php get_template_part( 'template-parts/aside-posts'); ?>
            </div> 
      </div>
</section>

<?php get_template_part( 'template-parts/join-us'); ?>
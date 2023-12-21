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
                                <div class="swiper-wrapper ">
                                  <?php foreach( $images as $image ) :

                                      $thumbnailSize = $image['sizes']['thumbnail'];
                                      $mediumSize = $image['sizes']['medium']; //300
                                      $largeSize = $image['sizes']['large']; //1024
                                      $mediumLargeSize = $image['sizes']['medium_large']; //768

                                      ?>

                                    <div class="swiper-slide" >
                                      <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="gallery" aria-label="Подивитись фото у повному розмірі">
                                        <img class="swiper-lazy"
                                        data-src="<?php echo esc_url($mediumLargeSize); ?>"
                                        src="<?php echo esc_url($thumbnailSize); ?>"

                                        srcset="<?php echo esc_url($mediumSize); ?> 300w, <?php echo esc_url($mediumLargeSize); ?> 768w, <?php echo esc_url($largeSize); ?> 1024w"

                                        sizes="(min-width: 992px) 1024px, (min-width: 568px) 768px, (min-width: 320px) 300px, 100vw"

                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                         </a>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="single-post__slider">
                                <ul class="swiper-wrapper ">
                                <?php foreach( $images as $image ): ?>
                                    <li class="swiper-slide">
                                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="swiper-lazy" />
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
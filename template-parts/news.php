<?php
/*
Template Name: posts
*/
get_header();
?>
<section>
   <div class="container">
        <h1 class="main__title">Новини</h1>
        <div class="main__banner">
            <?php 
            $latest_post = get_posts('numberposts=1');
            if($latest_post) {
                foreach($latest_post as $post) :
                    setup_postdata($post);
                     ?>                
                   <img alt="main banner" src="<?php the_field('main-banner'); ?>">
                    
                   
                        <h2 class="banner__title"><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" class="button banner__button">Читати більше<svg class="banner__arrow-icon">
                            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                            </svg>
                        </a>
                               
            <?php
                endforeach;
            }
            ?>
        <?php wp_reset_postdata(); ?>
        </div>
                    <?php	
                    $query = new WP_Query([
                    'posts_per_page' => 4,
                   ]);

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                     ?> 

        <div class="post__box">
            <div class="post__img"><?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                   <?php the_post_thumbnail(); ?>
                </a>
                <?php } ?>
            </div>
           
            <div class="post__text">
                <h2 class="post__title"><?php the_title(); ?></h2>
                <p class="post__content"> 
                    <?php
                        $excerpt = get_the_excerpt();

                        if (wp_is_mobile()) {
                            echo wp_trim_words($excerpt, 49); // Максимальная длина отрывка для мобильных устройств
                        } elseif (get_theme_mod('tablet_breakpoint', 1024) >= 600 && get_theme_mod('tablet_breakpoint', 1024) <= 1024) {
                            echo wp_trim_words($excerpt, 27); // Максимальная длина отрывка для планшетов
                        } else {
                            echo wp_trim_words($excerpt, 55); // Максимальная длина отрывка для компьютеров
                        }
                    ?>
                </p>
                <div class="post__details">
                    <p class="post__time"><?php the_time('d.m.y'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button read-more_button">Читати більше<svg class="arrow-icon">
                        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
            <?php }/*end while*/ ?>
        <?php }/*end if*/ ?>

    <?php wp_reset_postdata(); ?>

      <!-- pagination  -->
      <div class="post__pagination">
      <?php
         $wp_query = $query;
         the_posts_pagination( 
            $args = array(
                'show_all'  => true,
                'prev_next' => true,
                'prev_text' => '<',
                'next_text' => '>',
                'type'      => 'list',
                'class'     => 'box__pagination',
           ));
        ?>
       </div>
        
    </div>    
</section>

<?php get_template_part('template-parts/join-us'); ?>

<?php get_footer(); ?>
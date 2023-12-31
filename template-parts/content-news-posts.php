<?php
/*
Template Name: posts
*/
get_header();
?>
<section class="news__section">
   <div class="container">
        <h1 class="main__title">Новини</h1>
        <!-- banner  -->
        <div class="news-main__banner">
            <?php get_template_part('template-parts/content-banner'); ?>
        </div>

            <!-- posts  -->
                <?php	
                 $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                   $query = new WP_Query([
                    'posts_per_page' => 4,
                    'paged' => $current_page,
                    'orderby' => 'date',
                    ]);

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                     ?> 
        <div class="post__box">
            <div class="post__img">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php get_template_part( 'template-parts/check_thumbnail' ); ?> 
                </a>
                
            </div>
            <div class="post__text">
                <h2 class="post__title"><?php the_title(); ?></h2>
                <div class="post__img-mobile">
                   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                   <?php get_template_part( 'template-parts/check_thumbnail' ); ?> 
                   </a>
               
            </div>
                <div class="post__content-desktop"><?php echo wp_trim_words(get_the_excerpt(), 50); ?></div>
                <div class="post__content-tablet"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
                <div class="post__content-mobile"><?php echo wp_trim_words(get_the_excerpt(), 60); ?></div>
                <div class="post__details">
                    <p class="post__time"><?php the_time('d.m.y'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button read-more_button read-more_button-mobile">Читати більше<svg class="arrow-icon">
                        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
                   <?php }/*end while*/ ?>
       
         <!-- pagination  -->
      <?php
            $posts_per_page = 4;
            $total_pages = $query->max_num_pages;
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $pagination_args = array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => ('&lt;'),
                'next_text' => ('&gt;'),
            );
            echo '<div id="pagination" class="lib-pagination">';
            echo paginate_links($pagination_args);
            echo '</div>';

            }
            wp_reset_postdata(); 
    ?>
    </div>    
</section>

<?php get_template_part('template-parts/join-us'); ?>

<?php get_footer(); ?>
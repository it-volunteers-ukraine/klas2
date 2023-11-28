<?php

get_header();
?>

<main>
<section class="library-section">
    <div class="container">
      <h1 class="library__title"><?php the_field('library_title', 55) ?></h1>

      <?php get_template_part( 'template-parts/material-categories'); ?>

      <?php global $query_string;
        query_posts($query_string.'&post_type=materials&posts_per_page=3');
         if (have_posts()) { ?>
          <div class="library-wrap">
            <?php while (have_posts()) {
              the_post();    
              
                get_template_part( 'template-parts/content-search' );
            } ?>
        </div>
      <?php 
      $posts_per_page = 3;
      $total_posts = wp_count_posts('materials')->publish;
      $total_pages = ceil($termCount / $posts_per_page);

      $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

      $args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'          => __('<'),
        'next_text'          => __('>'),
        'class'              => 'material-pagination', 
      );
      echo '<div class="events__pagination">';
      echo paginate_links($args);
      echo '</div>';

    }
    
        ?>

    </div>
</section>
</main>

<?php get_footer(); ?>
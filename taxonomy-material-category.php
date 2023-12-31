<?php

get_header();
?>

<main>
<section class="library-section">
    <div class="container">
      <h1 class="library__title"><?php the_field('library_title', 16) ?></h1>

      <?php get_template_part( 'template-parts/material-categories'); ?>

      <?php global $query_string;
        query_posts($query_string.'&post_type=materials&posts_per_page=10');
         if (have_posts()) { ?>
          <div class="library-wrap">
            <?php while (have_posts()) {
              the_post();    
              
                get_template_part( 'template-parts/materials-search' );
            } ?>
        </div>
      <?php 
      $posts_per_page = 10;
      $total_posts = wp_count_posts('materials')->publish;
      $total_pages = ceil($termCount / $posts_per_page);

      $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

      $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text' => ('&lt;'),
        'next_text' => ('&gt;'),
      );

      echo '<div id="pagination">';
      echo paginate_links($pagination_args);
      echo '</div>';

    }
        ?>

    </div>
</section>
<?php  get_template_part( 'template-parts/join-us' ); ?>
</main>

<?php get_footer(); ?>
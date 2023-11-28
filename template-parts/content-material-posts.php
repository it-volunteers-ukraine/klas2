
<?php 

    global $post;
    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $myposts = get_posts([ 
      'post_type' => 'materials',
      'numberposts' => -1,
      'posts_per_page' => 4,
      'order' => 'DESC',  
      'orderby' => 'date',
      'paged'   => $current_page
    ]);

    if( $myposts ){ ?>
      <div class="library-wrap">
      <?php foreach( $myposts as $post ){
        setup_postdata( $post );

      get_template_part( 'template-parts/content-search' );

      }?>
      </div>
      <?php 
      $posts_per_page = 4;
      $total_posts = wp_count_posts('materials')->publish;
      $total_pages = ceil($total_posts / $posts_per_page);

      $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

      $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'          => __('<'),
        'next_text'          => __('>'),
        'class'              => 'material-pagination', 
      );
      echo '<div class="events__pagination">';
      echo paginate_links($pagination_args);
      echo '</div>';

    }
    
    wp_reset_postdata(); 
    ?>

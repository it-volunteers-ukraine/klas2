<ul class="library-wrap">
<?php 

    global $post;

    $myposts = get_posts([ 
      'post_type' => 'materials',
      'numberposts' => -1,
      'posts_per_page' => 10,
      'order' => 'DESC',  
      'orderby' => 'date',  
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1 

    ]);

    if( $myposts ){
      foreach( $myposts as $post ){
        setup_postdata( $post );

      get_template_part( 'template-parts/content-search' );

      }
    } 
    wp_reset_postdata(); 
    ?>
</ul>
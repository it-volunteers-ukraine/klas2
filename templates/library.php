
<?php
/*
Template Name: library
*/
get_header();
?>
<main>
<section class="library-section">
  <?php $postID = $post->ID; ?>
    <div class="container">
      <h1 class="library__title"><?php the_field('library_title', $postID) ?></h1>

      <?php get_template_part( 'template-parts/material-categories'); ?>

      <?php if ( have_posts() ) : 
    /* Start the Loop */
        while ( have_posts() ) : the_post();
        
          get_template_part( 'template-parts/content-material-posts' );

        endwhile;
      endif;
      ?>

    </div>
</section>
</main>
<?php get_footer(); ?>
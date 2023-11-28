<?php

get_header();
?>

<main class='main'>
<section class="library-section">
    <div class="container">
      <h1 class="library__title"><?php the_field('library_title', 55) ?></h1>

      <?php get_template_part( 'template-parts/material-categories'); ?>

      <ul class="library-wrap">
        <?php if (have_posts()) {
        while (have_posts()) {
     the_post();    
          
            get_template_part( 'template-parts/content-search' );

        }
      }
       wp_reset_postdata(); ?>

    </ul>
    </div>
</section>
</main>

<?php get_footer(); ?>
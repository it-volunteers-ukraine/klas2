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
      <h1 class="library__title"><?php the_title(); ?></h1>

      <?php get_template_part( 'template-parts/material-categories'); ?>

      <?php get_template_part( 'template-parts/material-posts' ); ?>

    </div>
  </section>
  <?php  get_template_part( 'template-parts/join-us' ); ?>
</main>
<?php get_footer(); ?>
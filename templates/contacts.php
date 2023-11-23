<?php
/*
Template Name: contacts
*/
get_header();
?>
<main>
<section class="contacts">
<div class="container">
  <h2 class="contacts__title"><?php the_title(); ?></h2>
  <div id="first-map"></div>
</div>
</section>
<section class="contacts">
<div class="container">
<?php get_template_part( 'template-parts/form'); ?>
</div>
</section>
</main>


<?php get_footer(); ?>
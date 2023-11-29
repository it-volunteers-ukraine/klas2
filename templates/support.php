<?php
/*
Template Name: support
*/
get_header();
?>
<main>
  <section class="support-title_wrap">
    <div class="container">
      <h1 class="support-title"><?php the_title(); ?></h1>
    </div>
  </section>
<section class="support-section">
  <div class="container">
    <div class="support__inner-container">
      <div class="support-text__wrap">
        <h2 class="support-section__title"><?php the_field('donate_title'); ?></h2>
        <p class="support-section__subtitle"><?php the_field('donate_subtitle'); ?><a href="" class="support-section__bank"><?php the_field('donate_bank'); ?></a></p>
      </div>
      <div class="support-image__wrap">
        <img class="support-img" width="250" height="250" src='<?php the_field('donate_qr-code'); ?>' alt='qr-code'>
      </div>
      <a class="button primary_button" href=""><?php the_field('donate_button'); ?></a>
    </div>
  </div>
  
</section>
</main>
<?php get_footer(); ?>
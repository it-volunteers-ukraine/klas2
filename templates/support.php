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
<section class="donate-section">
  <div class="container">
    <div class="donate__inner-container">
      <div class="donate-text__wrap">
        <h2 class="donate-section__title"><?php the_field('donate_title'); ?></h2>
        <p class="donate-section__subtitle"><?php the_field('donate_subtitle'); ?><a href="" class="donate-section__bank"><?php the_field('donate_bank'); ?></a></p>
      </div>
      <a class="button primary_button donate-button" href=""><?php the_field('donate_button'); ?></a>
      <div class="donate-image__wrap">
        <img class="donate-img" width="250" height="250" src='<?php the_field('donate_qr-code'); ?>' alt='qr-code'>
      </div>
    </div>
  </div>

  <section class="middle-section">
    <div class="container">
      
    </div>
  </section>
  
</section>
</main>
<?php get_footer(); ?>
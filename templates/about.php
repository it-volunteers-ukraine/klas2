<?php
/*
Template Name: about
*/
get_header();
?>
<main>
<section class="about">
  <div class="container">
    <h2 class="about__title"><?php the_title(); ?></h2>
    <div class="about__content">
    <div class="about__first-container">
    <?php $firstImage = get_field("first_image"); ?>
      <?php if ($firstImage): ?>
        <img class="about__image" src="<?php echo esc_url($firstImage['url']); ?>" alt="<?php echo esc_attr($firstImage['alt']); ?>" />
      <?php endif; ?>
      <?php $firstText = get_field("first_text"); ?>
      <?php if ($firstText): ?>
      <div class="about__first-container__text-container">
      <p class="about__text"><?php echo esc_html($firstText); ?></p>
        <p class="about__text"><?php echo esc_html(the_field('second_text')); ?></p>
        <p class="about__text"><?php echo esc_html(the_field('third_text')); ?></p>
      </div>
      <?php endif; ?>
    </div>
      <div class="about__second-container">
      <?php $secondImage = get_field("second_image"); ?>
      <?php if ($secondImage): ?>
        <img class="about__image" src="<?php echo esc_url($secondImage['url']); ?>" alt="<?php echo esc_attr($secondImage['alt']); ?>" />
      <?php endif; ?>
      <?php $fourthText = get_field("fourth_text"); ?>
      <?php if ($fourthText): ?>
       <div class="about__second-container__text-container">
       <p class="about__text"><?php echo esc_html($fourthText); ?></p>
        <p class="about__text"><?php echo esc_html(the_field('fifth_text')); ?></p>
       </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
</main>

<?php get_template_part( 'template-parts/join-us'); ?>


<?php get_footer(); ?>
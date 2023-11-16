<?php
/*
Template Name: about
*/
get_header();
?>
<main>
<section class="about">
  <div class="container about__container">
    <img class="about__fon-right" src='<?php echo get_template_directory_uri()?>/assets/images/fon_right.png' />
    <img class="about__fon-left" src='<?php echo get_template_directory_uri()?>/assets/images/fon_left.png' />
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
<section class="we-are">
<div class="container">
<?php $weAreTitle = get_field("we_are_title"); ?>
<?php if ($weAreTitle): ?>
  <h2 class="we-are__title"><?php echo esc_html($weAreTitle); ?></h2>
  <ul class="we-are__list">
    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_first_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_first_text"); ?></p>
    </li>
    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_second_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_second_text"); ?></p>
    </li>
    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_third_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_third_text"); ?></p>
    </li>

    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_fourth_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_fourth_text"); ?></p>
    </li>
    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_fifth_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_fifth_text"); ?></p>
    </li>
    <li class="we-are__list__item">
      <h3 class="we-are__list__item__title"><?php the_field("we_are_sixth_title"); ?></h3>
      <p class="we-are__list__item__text"><?php the_field("we_are_sixth_text"); ?></p>
    </li>
  </ul>
      <?php endif; ?>
</div>
</section>
</main>

<?php get_template_part( 'template-parts/join-us'); ?>


<?php get_footer(); ?>
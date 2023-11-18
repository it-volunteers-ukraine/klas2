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
<section class="our-team">
  <div class="container">
    <?php $ourTeamTitle = get_field("our_team_tilte"); ?>
    <?php if($ourTeamTitle): ?>
      <h2 class="our-team__title"><?php echo esc_html($ourTeamTitle); ?></h2>
      <?php endif ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
      <?php if(have_rows('our_team_slider')): ?>
        <div class="our-team__slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="slider">
        <ul class="our-team__list swiper">
              <?php while(have_rows('our_team_slider')) : the_row(); 
                $image = get_sub_field('our_team_slider_image');
                $person = get_sub_field('our_team_slider_person');
                $position = get_sub_field('our_team_slider_position');
              ?>
               <li class="our-team__list__item">

               <img class="our-team__list__item__img" src='<?php echo $image['url'] ?>' />

               <div class="our-team__list__item__text-container">
               <h3 class="our-team__list__item__person"><?php echo $person ?></h3>
                <p class="our-team__list__item__position"><?php echo $position ?></p>
               </div>
               
               </li>
              <?php endwhile; ?>
            </ul>

          <?php endif; ?>
          <button class="swiper-button-prev"><svg width="24px" height="24px"><use href="../assets/images/icon-arrow-left.svg"></use></svg></button>
        <button class="swiper-button-next"><svg width="24px" height="24px"><use href="../assets/images/icon-arrow-right.svg"></use></svg></button>
        <div class="swiper-pagination"></div>
        </div>
  </div>
</section>
</main>
<?php get_template_part( 'template-parts/join-us'); ?>

<?php get_footer(); ?>
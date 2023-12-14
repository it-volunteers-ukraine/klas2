<?php
/*
Template Name: about
*/
get_header();
?>
<main>
  
<section class="about">
  <div class="container">
   <div class="about__container">
    <h2 class="about__title"><?php the_title(); ?></h2>
      <div class="about__content">
        <div class="about__first-container">
          <img class="about__fon-left" src='<?php echo get_template_directory_uri()?>/assets/images/fon_left.png' alt="Background picture left"/>
          <?php $firstImage = get_field("first_image"); ?>
          <?php if ($firstImage): ?>
            <div class="about__wrapper">
              <img class="about__image" src="<?php echo esc_url($firstImage['url']); ?>" alt="<?php echo esc_attr($firstImage['alt']); ?>" />
            </div>
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
              <img class="about__fon-right" src='<?php echo get_template_directory_uri()?>/assets/images/fon_right.png' alt="Background picture right"/>
        <?php $secondImage = get_field("second_image"); ?>
        <?php if ($secondImage): ?>
          <div class="about__wrapper">
            <img class="about__image" src="<?php echo esc_url($secondImage['url']); ?>" alt="<?php echo esc_attr($secondImage['alt']); ?>" />
          </div>
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
  </div>
</section>


<section class="we-are">
  <div class="container">
  <?php if(have_rows('we_are')): ?>
    <?php $weAreTitle = get_field("we_are_title"); ?>
      <?php if ($weAreTitle): ?>
        <h2 class="we-are__title"><?php echo esc_html($weAreTitle); ?></h2>
        <?php endif; ?>
          <ul class="we-are__list">
            <?php while(have_rows('we_are')) : the_row(); 
                          $title = get_sub_field('we_are_title');
                          $text = get_sub_field('we_are_text');
                        ?>
                <li class="we-are__list__item">
                  <h3 class="we-are__list__item__title"><?php echo $title ?></h3>
                  <p class="we-are__list__item__text"><?php echo $text ?></p>
              </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
  </div>
</section>


<section class="our-team">
  <div class="container">
   <div class="our-team__container">
    <?php if(have_rows('our_team_slider')): ?>
        <?php $ourTeamTitle = get_field("our_team_tilte"); ?>
      <div class="our-team__head">
      <?php if($ourTeamTitle): ?>
          <h2 class="our-team__title"><?php echo esc_html($ourTeamTitle); ?></h2>
          <?php endif ?>
          <div class="our-team__buttons-wrapper">
                <button class="swiper-button-prev"></button>
                <button class="swiper-button-next"></button>
            </div>
      </div>
            <div class="swiper-container">
              <div class="our-team__slider swiper">
              <ul class="our-team__list swiper-wrapper" role="list">
                  <?php while(have_rows('our_team_slider')) : the_row(); 
                      $image = get_sub_field('our_team_slider_image');
                      $person = get_sub_field('our_team_slider_person');
                      $position = get_sub_field('our_team_slider_position');
                  ?>
                    <li class="our-team__list__item swiper-slide">
                        <img class="our-team__list__item__img" src='<?php echo $image['url'] ?>' alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <div class="our-team__list__item__text-container">
                          <h3 class="our-team__list__item__person"><?php echo $person ?></h3>
                          <p class="our-team__list__item__position"><?php echo $position ?></p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                  </ul>

                  <div class="swiper-pagination"></div>
                  </div>
                <?php endif; ?>
          </div>
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/join-us'); ?>
</main>

<?php get_footer(); ?>
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
    <div class="contacts__wrapper">
    <?php if(have_rows('contacts')): ?>
      <ul class="contacts__list">
          <?php while(have_rows('contacts')) : the_row(); 
              $icon = get_sub_field('contacts_icon');
              $text = get_sub_field('contacts_text');?>
              <li class="contacts__list__item">
                  <img class="contacts__list__item__icon" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt']; ?>"/>
                  <p class="contacts__list__item__text"><?php echo $text ?></p>
              </li>
          <?php endwhile; ?>
      </ul>
    <?php endif; ?>
      <?php if(have_rows('socials')): ?>
            <ul class="contacts__list">
              <?php while(have_rows('socials')) : the_row(); 
                            $icon = get_sub_field('socials_icon');
                            $text = get_sub_field('socials_text');?>
                  <li class="contacts__list__item">
                  <img class="contacts__list__item__icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"/>
                    <p class="contacts__list__item__text"><?php echo $text ?></p>
                </li>
              <?php endwhile; ?>
          </ul>
      <?php endif; ?>
    </div>
  </div>
  </section>

  <section class="maps">
  <div class="container">
    <?php if(have_rows('maps')): ?>
      <?php $mapsTitle = get_field("map_title"); ?>
        <?php if ($mapsTitle): ?>
          <h2 class="maps__title"><?php echo esc_html($mapsTitle); ?></h2>
        <?php endif; ?>
            <ul class="maps__list">
              <?php while(have_rows('maps')) : the_row(); 
                            $text = get_sub_field('maps_text');
                            $map = get_sub_field('maps_url');?>
                  <li class="maps__list__item">
                    <p class="maps__list__item__title"><?php echo $text ?></p>
                    <iframe 
                      class="maps__list__item__map"
                      src="<?php echo $map ?>" 
                      width="484" 
                      height="357" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </li>
              <?php endwhile; ?>
          </ul>
      <?php endif; ?>
  </div>
  </section>

  <section class="team">
    <div class="container team__container">
    <?php get_template_part('template-parts/form'); ?>
      <div class="team__container__content">
      <?php 
      $teamImage = get_field('team_image');
      $teamTitle = get_field('team_title');
      $teamText = get_field('team_text');?>
        <img class="team__container__content__fon-image" src='<?php echo get_template_directory_uri()?>/assets/images/fon_right.png' alt="Fon photo" />
        <?php if ($teamImage): ?>
            <img class="team__image" src="<?php echo esc_url($teamImage['url']); ?>" alt="<?php echo esc_attr($teamImage['alt']); ?>"/>
            <h3 class="team__title"><?php echo esc_html($teamTitle); ?></h3>
            <p class="team__text"><?php echo esc_html($teamText); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>
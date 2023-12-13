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
      <ul class="contacts__list">
              <li>
                <a class="contacts__list__item" href="mailto:<?php the_field('email', 'options'); ?>" aria-label="email">
                  <svg class="contacts__list__item__icon"><use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon-Gmail"></use></svg>
                      <p class="contacts__list__item__text"><?php the_field('email', 'options'); ?></p>
                </a>
              </li>
              <li>
                <a class="contacts__list__item" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" aria-label="телефон">
                  <svg class="contacts__list__item__icon"><use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon-Phone"></use></svg>
                      <p class="contacts__list__item__text"><?php the_field('first-phone', 'options'); ?></p>
                </a>
              </li>
              <li>
                <a class="contacts__list__item" href="https://wa.me/<?php echo str_replace(' ', '', get_field('second-phone', 'options')); ?>"  target="_blank" aria-label="телефон">
                  <svg class="contacts__list__item__icon"><use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon-WhatsApp"></use></svg>
                      <p class="contacts__list__item__text"><?php the_field('second-phone', 'options'); ?></p>
              </a>
              </li>
      </ul>

            <ul class="contacts__list">
                  <li>
                    <a class="contacts__list__item" href="<?php echo esc_attr(get_field('facebook', 'options')); ?>" target="_blank" aria-label="facebook">
                      <svg class="contacts__list__item__icon"><use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon-Facebook"></use></svg>
                        <p class="contacts__list__item__text"><?php the_field('contacts_facebook') ?></p>           
                    </a>
                  </li>
                <li>
                  <a class="contacts__list__item" href="<?php echo esc_attr(get_field('youtube', 'options')); ?>" target="_blank" aria-label="youtube">
                    <svg class="contacts__list__item__icon"><use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon-YouTube"></use></svg>
                        <p class="contacts__list__item__text"><?php the_field('contacts_youtube') ?></p>
                  </a>
                </li>
          </ul>
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
    <div class="container">
    <div class="team__container">
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
    </div>
  </section>

</main>


<?php get_footer(); ?>
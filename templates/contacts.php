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
              <li class="contacts__list__item">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#ACACAC"/>
<path d="M14 27.9208V19.721L11.3639 17.3945L9 16.1035V26.4738C9 27.2744 9.67246 27.9208 10.5 27.9208H14Z" fill="#4285F4"/>
<path d="M26 27.9207H29.5C30.33 27.9207 31 27.2719 31 26.4737V16.1035L28.3225 17.5822L26 19.7209V27.9207Z" fill="#34A853"/>
<path d="M13.9993 19.7215L13.6406 16.5176L13.9993 13.4512L19.9993 17.7922L25.9993 13.4512L26.4005 16.3521L25.9993 19.7215L19.9993 24.0626L13.9993 19.7215Z" fill="#EA4335"/>
<path d="M26 13.4511V19.7214L31 16.1039V14.1746C31 12.3851 28.8825 11.365 27.4001 12.4382L26 13.4511Z" fill="#FBBC04"/>
<path d="M9 16.104L11.2996 17.7678L14 19.7215V13.4511L12.5999 12.4382C11.1149 11.365 9 12.3852 9 14.1745V16.1039V16.104Z" fill="#C5221F"/>
</svg>
                  <p class="contacts__list__item__text"><?php the_field('email') ?></p>
              </li>
              <li class="contacts__list__item">
                  <img class="contacts__list__item__icon" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt']; ?>"/>
                  <p class="contacts__list__item__text"><?php the_field('first-phone') ?></p>
              </li>
              <li class="contacts__list__item">
                  <img class="contacts__list__item__icon" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt']; ?>"/>
                  <p class="contacts__list__item__text"><?php the_field('second-phone') ?></p>
              </li>
      </ul>

            <ul class="contacts__list">
                  <li class="contacts__list__item">
                    <img class="contacts__list__item__icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"/>
                    <p class="contacts__list__item__text"><?php the_field('facebook') ?></p>
                  </li>
                <li class="contacts__list__item">
                    <img class="contacts__list__item__icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"/>
                    <p class="contacts__list__item__text"><?php the_field('youtube') ?></p>
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
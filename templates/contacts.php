<?php
/*
Template Name: contacts
*/
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyDmtIOli7OmZ_sh622cKqZjUp9nS9C9Kbk');
}
add_action('acf/init', 'my_acf_init');
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
                          $text = get_sub_field('contacts_text');
                        ?>
                <li class="contacts__list__item">
                <img class="contacts__list__item__icon" src="<?php echo $icon['url']  ?>" />
                  <p class="contacts__list__item__text"><?php echo $text ?></p>
              </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <?php if(have_rows('socials')): ?>
          <ul class="contacts__list">
            <?php while(have_rows('socials')) : the_row(); 
                          $icon = get_sub_field('socials_icon');
                          $text = get_sub_field('socials_text');
                        ?>
                <li class="contacts__list__item">
                <img class="contacts__list__item__icon" src="<?php echo $icon['url']  ?>" />
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
      <h3 class="maps__title"><?php echo esc_html($mapsTitle); ?></h3>
        <?php endif; ?>
          <ul class="maps__list">
            <?php while(have_rows('maps')) : the_row(); 
                          $text = get_sub_field('maps_text');
                          $map = get_sub_field('maps_url');
                        ?>
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
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>
</section>

<section class="contacts">
<div class="container">
<?php get_template_part( 'template-parts/form'); ?>
</div>
</section>
</main>


<?php get_footer(); ?>
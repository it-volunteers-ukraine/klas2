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
                          $map = get_sub_field('maps_map');
                        ?>
                <li class="maps__list__item">
                  <p class="maps__list__item__title"><?php echo $text ?></p>
                  <img class="maps__list__item__map" src='<?php echo $map['url'] ?>' alt="<?php echo esc_attr($map['alt']); ?>"/>
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
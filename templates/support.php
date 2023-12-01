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
  </section>

  <section class="support-section__middle">
    <div class="container">
      <div class="support_inner__container">
        <div class="support-image__wrap">
          <div class="support-image_wrapper">
            <img class="support-img" src='<?php the_field('support_middle_image'); ?>' alt=''>
          </div>
          <svg class="support-left__image" width="112px" height="98px">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#fon_left"></use>
          </svg>
          <svg class="support-right__image" width="83px" height="69px">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#fon_right"></use>
          </svg>
        </div>
        <p class="support-text"><?php the_field("support_text"); ?></p>
      </div>
    </div>
  </section>

  <section class="support-title_wrap">
    <div class="container">
      <h1 class="support-title"><?php the_field("remittance_title"); ?></h1>
    </div>
  </section>

  <section class="remittance-section">
    <div class="container">
      <ul class="remittance__inner-container">
        <?php if (have_rows('transfer_money')) : ?>

          <?php while (have_rows('transfer_money')) : the_row(); ?>

            <li class="remittance__name-value">
              <p class="remittance__name"><?php the_sub_field('transfer_field_name'); ?></p>
              <p class="remittance__value"><?php the_sub_field('transfer_field_value'); ?></p>
            </li>

          <?php endwhile; ?>
        <?php endif; ?>
        
      </ul>
    </div>
  </section>

</main>
<?php get_footer(); ?>
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
          <p class="donate-section__subtitle"><?php the_field('donate_subtitle'); ?><a href="<?php the_field('bank_link'); ?>" class="donate-section__bank"><?php the_field('donate_bank'); ?></a></p>
        </div>
        <a class="button primary_button donate-button" href="<?php the_field('bank_link'); ?>"><?php the_field('donate_button'); ?></a>
        <div class="donate-image__wrap">
          <?php 
            $image = get_field('donate_qr-code');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
          } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="support-section__middle">
    <div class="container">
      <div class="support_inner__container">
        <div class="support-image__wrap">
          <div class="support-image_wrapper">
            <?php 
            $image = get_field('support_middle_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
          } ?>
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
      <div class="remittance__inner-container">
        <ul class="remittance__list">
          <?php if (have_rows('transfer_money')) : ?>

            <?php while (have_rows('transfer_money')) : the_row(); ?>

              <li class="remittance__name-value">
                <p class="remittance__name"><?php the_sub_field('transfer_field_name'); ?></p>
                <p class="remittance__value"><?php the_sub_field('transfer_field_value'); ?></p>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>
          
        </ul>

        <div class="remittance__list">
          <?php if (have_rows('current_account')) : ?>

            <?php while (have_rows('current_account')) : the_row(); ?>

              <div class="remittance__name-value">
                <p class="remittance__name"><?php the_sub_field('transfer_field_name'); ?></p>
                <div class="current_account">
                  <p id="current_account" class="remittance__value"><?php the_sub_field('transfer_field_value'); ?></p>
                  <button id="copy_current_account" class="icon_copy">
                    <svg width="24px" height="24px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#icon_copy"></use>
                  </button>
                </svg>
                </div>
              </div>

              

            <?php endwhile; ?>
          <?php endif; ?>
          
        </div>

        

        <ul class="">
          <?php if (have_rows('transfer_money_copy')) : ?>

            <?php while (have_rows('transfer_money_copy')) : the_row(); ?>

              <li class="remittance__name-value">
                <p class="remittance__name"><?php the_sub_field('transfer_field_name'); ?></p>
                <p class="remittance__value"><?php the_sub_field('transfer_field_value'); ?></p>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>
          
        </ul>
      </div>
      
    </div>
  </section>

</main>
<?php get_footer(); ?>
<section class="join-us">
  <div class="container join-us__container">
    <div class="join-us__content">
    <?php if ($title = get_field("join_us_title", 'option')): ?>
                <h3 class="join-us__title"><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ($description = get_field("join_us_description", 'option')): ?>
                <p class="join-us__description"><?php echo $description; ?></p>
            <?php endif; ?>
    </div>
    <?php if ($button = get_field("join_us_button", 'option')): ?>
            <a href="<?php echo get_page_link(24) ?>" class="button primary_button join-us__button"><?php echo $button; ?></a>
        <?php endif; ?>
  </div>
</section>
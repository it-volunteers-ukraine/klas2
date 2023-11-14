<section class="join-us">
  <div class="container join-us__container">
    <div class="join-us__content">
    <?php $title = get_field("join_us_title"); ?>
      <?php if ($title): ?>
        <h3 class="join-us__title"><?php echo $title; ?></h3>
      <?php endif; ?>
      <?php $description = get_field("join_us_description"); ?>
      <?php if ($description): ?>
        <p class="join-us__description"><?php echo $description; ?></p>
      <?php endif; ?>
    </div>
    <?php $button = get_field("join_us_button"); ?>
      <?php if ($description): ?>
        <a href="" class="join-us__button"><?php echo $button; ?></a>
      <?php endif; ?>
  </div>
</section>

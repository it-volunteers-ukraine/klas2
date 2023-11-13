<section class="form__section">
    <div class="container">
        <h2 class="helpform__title"><?php the_field('form_title', 'option'); ?></h2>
        <h3 class="helpform__title"><?php the_field('form_subtitle', 'option'); ?></h3>
        <?php
        $form = get_field('form', 'option');
        if ($form) : ?>
            <div class="helpform">
                <?php echo $form ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="helpform__section">
    <div class="container">
        <h1 class="helpform__title"><?php the_field('form_title'); ?></h1>
        <?php 
            $form = get_field('form');
            if($form) : ?>
            <div class="helpform">
                <?php echo $form?>
            </div>
        <?php endif; ?>
    </div>
</section> 
<section class="helpform__section">
    <div class="container">
        <h1 class="helpform__title"><?php the_field('form-title'); ?></h1>
        <h2 class="helpform__title"><?php the_field('form-subtitle'); ?></h2>
        <?php 
            $form = get_field('form');
            if($form) : ?>
            <div class="helpform">
                <?php echo $form?>
            </div>
        <?php endif; ?>
    </div>
</section> 


<!-- варіант розмітки для WP Contact Form 7 -->
<!-- <div class="input__wrap">
<label for="contactName" class="contact__label">Ім’я</label>
[text contactName id:contactName class:contact__input placeholder "|Введіть ім'я"]
</div>

<div class="input__wrap">
<label for="contactPhone" class="contact__label">Телефон</label>
[tel contactPhone maxlength:13 id:contactPhone class:contact__input placeholder "+380|"]
</div>

<div class="input__wrap">
<label for="contactEmail" class="contact__label">E-mail</label>
[email contactEmail id:contactEmail class:contact__input placeholder "|Введіть E-mail"]
</div>

<div class="contact-needs">
[textarea contactNeeds rows:5 id:contactNeeds class:contact__input placeholder "|Напишіть Ваше питання"]
</div>

<div class="check__wrap">
[acceptance acceptance class:contactAccept] Я згоден(на) з політикою конфіденційності[/acceptance]
</div>

<div class="form-btn__wrap">
[submit class:button class:primary_button  "Відправити"]
</div> -->
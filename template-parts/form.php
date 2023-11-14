<section class="form">
    <h2 class="form__title"><?php the_field('form_title', 'option'); ?></h2>
    <h3 class="form__subtitle"><?php the_field('form_subtitle', 'option'); ?></h3>
    <?php
    $form = get_field('form', 'option');
    if ($form) : ?>
        <?php echo $form ?>
    <?php endif; ?>

    <div class="notification visually-hidden" id="notification">
        <div>
            <svg class="notification__icon" width="24px" height="24px">
                <use href="../assets/images/сheckbox.svg"></use>
            </svg>
        </div>
        <p class="notification__text">Дякуємо за Ваше звернення!</p>
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
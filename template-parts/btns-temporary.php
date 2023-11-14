<!-- кнопка-посилання на іншу сторінку "Читати більше"-->
<a href="<?php the_permalink(); ?>" class="button read-more_button">Читати більше<svg class="arrow-icon">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
    </svg>
</a>
<!-- замість "Читати більше" буде <?php the_field('read-more_button', 'option'); ?> -->


<!-- кнопка "Читати більше"-->
<button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
    </svg>
</button>
<!-- замість "Читати більше" буде <?php the_field('read-more_button', 'option'); ?> -->


<!-- кнопка "Сховати"-->
<button class="button hide_button" type="button">Сховати<svg class="close-icon">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#close"></use>
    </svg>
</button>
<!-- замість "Сховати" буде <?php the_field('hide_button', 'option'); ?> -->
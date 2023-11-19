<footer>
  <div class="container footer--container">

    <div class="footer-line"> </div>

    <div class="footer__wraper">
      <div class="footer__logo">
        <?php
        if (has_custom_logo()) {
          echo get_custom_logo();
        }
        ?>
      </div>

      <nav>
        <?php
        wp_nav_menu([
          'theme_locatoin'      => 'footer',
          'container'           => false,
          'menu_class'          => 'footer__list',
          'menu_id'             => false,
          'echo'                => true,
          'items_wrap'          => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
      </nav>

      <ul class="fcontact__list">
        <li>
          <a class="fcontac__link" href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p>govgoklas@gmail.com</p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p>+38 066 596 82 47</p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p>+38 066 596 82 47</p>
          </a>
        </li>
      </ul>

      <ul class="fsocial__list">
        <li>
          <p>Соцмережі</p>
        </li>
        <li>
          <a href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <p class="footer-policy-text">
      © <?php echo date('Y'); ?> IT Volunteers. All Rights Reserved.
    </p>

  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
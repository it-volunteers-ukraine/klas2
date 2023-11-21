<footer>
  <div class="container footer--container">

    <div class="footer-line"> </div>

    <div class="footer__wraper">
      <div class="footer__logo hide-mob">
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

      <ul class="fcontact__list hide-mob">
        <li>
          <a class="fcontac__link" href="mailto:<?php the_field('email', 'options'); ?>" aria-label="email">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('email', 'options'); ?></p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" aria-label="телефон">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('first-phone', 'options'); ?></p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('second-phone', 'options')); ?>" aria-label="телефон">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('second-phone', 'options'); ?></p>
          </a>
        </li>
      </ul>

      <ul class="fsocial__list">
        <li>
          <p>Соцмережі</p>
        </li>
        <div class="flex__wraper">
          <li>
            <a href="<?php echo esc_attr(get_field('facebook', 'options')); ?>" target="_blank" aria-label="facebook">
              <svg class="icon" width="40px" height="40px">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_attr(get_field('youtube', 'options')); ?>" target="_blank" aria-label="youtube">
              <svg class="icon" width="40px" height="40px">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
              </svg>
            </a>
          </li>
        </div>
      </ul>
    </div>

    <ul class="fcontact__list flex__wraper block__wraper hide-desc">
      <div>
        <li>
          <a class="fcontac__link" href="mailto:<?php the_field('email', 'options'); ?>" aria-label="email">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('email', 'options'); ?></p>
          </a>
        </li>
      </div>
      <div>
        <li>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" aria-label="телефон">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('first-phone', 'options'); ?></p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('second-phone', 'options')); ?>" aria-label="телефон">
            <svg class="icon" width="40px" height="40px">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
            </svg>
            <p><?php the_field('second-phone', 'options'); ?></p>
          </a>
        </li>
      </div>
    </ul>

    <div class="flex__wraper">
      <div class="footer__logo hide-desc">
        <?php
        if (has_custom_logo()) {
          echo get_custom_logo();
        }
        ?>
      </div>
      <p class="footer-policy-text">
        © <?php echo date('Y'); ?> IT Volunteers. All Rights Reserved.
      </p>
    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
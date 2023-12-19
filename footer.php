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
          <a class="fcontac__link" href="mailto:<?php the_field('email', 'options'); ?>" aria-label="Надіслати листа на електронну пошту">
            <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-Gmail"></use>
            </svg>
            <p><?php the_field('email', 'options'); ?></p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" aria-label="Зателефонувати">
            <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-Phone"></use>
            </svg>
            <p><?php the_field('first-phone', 'options'); ?></p>
          </a>
        </li>
        <li>
          <a class="fcontac__link" href="https://api.whatsapp.com/send?phone=<?php echo ltrim(str_replace(' ', '', get_field('second-phone', 'options')), '+'); ?>" target="_blank" aria-label="Написати в WhatsApp">
            <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-WhatsApp"></use>
            </svg>
            <p><?php the_field('second-phone', 'options'); ?></p>
          </a>
        </li>
      </ul>

      <ul class="fsocial__list">
        <li>
          <p>Соцмережі</p>
        </li>
        <li class="flex__wraper">
          <div>
            <a href="<?php echo esc_attr(get_field('facebook', 'options')); ?>" target="_blank" aria-label="Відвідати нашу сторінку на Facebook">
              <svg class="footer-icon" width="41" height="40" viewBox="0 0 41 40">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-Facebook"></use>
              </svg>
            </a>
          </div>
          <div>
            <a href="<?php echo esc_attr(get_field('youtube', 'options')); ?>" target="_blank" aria-label="Переглянути наш канал на YouTube">
              <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-YouTube"></use>
              </svg>
            </a>
          </div>
        </li>
      </ul>
    </div>

    <ul class="fcontact__list flex__wraper block__wraper hide-desc">
      <li>
        <a class="fcontac__link" href="mailto:<?php the_field('email', 'options'); ?>" aria-label="Надіслати листа на електронну пошту">
          <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-Gmail"></use>
          </svg>
          <p><?php the_field('email', 'options'); ?></p>
        </a>
      </li>
      <li>
        <div>
          <a class="fcontac__link" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" aria-label="Зателефонувати">
            <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-Phone"></use>
            </svg>
            <p><?php the_field('first-phone', 'options'); ?></p>
          </a>
        </div>
        <div>
          <a class="fcontac__link" href="https://api.whatsapp.com/send?phone=<?php echo ltrim(str_replace(' ', '', get_field('second-phone', 'options')), '+'); ?>" target="_blank" aria-label="Написати в WhatsApp">
            <svg class="footer-icon" width="40" height="40" viewBox="0 0 40 40">
              <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-WhatsApp"></use>
            </svg>

            <p><?php the_field('second-phone', 'options'); ?></p>
          </a>
        </div>
      </li>
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
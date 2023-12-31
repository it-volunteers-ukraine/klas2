<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title></title>
</head>

<body <?php if(is_front_page()) body_class('front-page')?>>
    <header class="header">
        <div class="container">
            <div class="header__content">
                <div class="header__logo">
                    <?php
                    if (has_custom_logo()) {
                        echo get_custom_logo();
                    }
                    ?>
                </div>
                <div class="menu__container" id="">
                    <ul class="menu__body">
                        <li>
                            <a href="<?php echo esc_attr(get_field('first-item-link', 'option') ); ?>"><?php the_field('first-item-name', 'option'); ?></a>
                        </li>
                        <li>
                            <nav class="header__nav">
                                <?php wp_nav_menu([
                                    'theme_location'       => 'header',
                                    'container'            => false,
                                    'menu_class'           => 'menu__list',
                                    'menu_id'              => false,
                                    'echo'                 => true,
                                    'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',
                                ]);
                                ?>
                            </nav>
                        </li>
                        <li>
                            <a href="<?php echo esc_attr(get_field('last-item-link', 'option') ); ?>"><?php the_field('last-item-name', 'option'); ?></a>
                        </li>
                    </ul>
                </div>
                <a class="secondary_button button header__btn" href="<?php echo esc_attr(get_field('header-button-link', 'option') ); ?>" >
                    <?php the_field('header-button-name', 'option'); ?></a>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>
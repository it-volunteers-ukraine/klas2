<?php get_header(); ?>


<main class="front-page__main">
    <section class="banner">
        <div class="container">
            <div class="banner__wrap">
                <div class="banner__title">
                    <p><?php the_field('subtitle') ?>Громадська організація</p>
                    <h1><?php the_field('title_h1') ?></h1>
                    <a class="primary_button button banner__btn" href="<?php the_field('banner__btn') ?> ">
                        Підтримати нас
                    </a>
                </div>
                <div class="banner__gallary">
                    <div class="banner__gallary-img">


                        <?php
                        $image = get_field('banner_img1');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                    <div class="banner__gallary-img">
                        <?php

                        $image = get_field('banner_img2');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                    <div class="banner__gallary-img">
                        <?php
                        $image = get_field('banner_img3');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                    <div class="banner__gallary-img">
                        <?php
                        $image = get_field('banner_img4');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                    <div class="banner__gallary-img">
                        <?php
                        $image = get_field('banner_img5');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>

                </div>
                <div class="banner__cards">
                    <div class="banner__cards-card">
                        <div class="banner__cards-card-img">
                            <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/40.svg" alt>
                        </div>

                        <p>виконаних проєктів</p>

                    </div>
                    <div class="banner__cards-card">
                        <div class="banner__cards-card-img">
                            <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/8.svg" alt>
                        </div>

                        <p>проєктів в роботі </p>

                    </div>
                    <div class="banner__cards-card">
                        <div class="banner__cards-card-img">
                            <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/Vector.svg" alt>
                        </div>

                        <p>бажання допомагати </p>

                    </div>
                </div>
                <div class="banner__desc">
                    <p><?php the_field('banner_text') ?></p>
                </div>

            </div>

        </div>

    </section>
    <section class="about">
        <div class="container">
            <div class="about__wrap">
                <h2 class="title">
                    <?php the_field('about_title') ?>
                </h2>
                <div class="about__content content content--right">
                    <div class="content__desc">
                        <div class="content__desc-text">

                            <div>
                                <?php the_field('about_text') ?>
                            </div>

                            <div class="content__fon">
                                <?php
                                $image = get_field('about_img');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>
                            </div>



                        </div>

                        <button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
                                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                            </svg>
                        </button>
                    </div>



                </div>

            </div>
        </div>
    </section>
    <section class="work">
        <div class="container">
            <div class="work__wrap">
                <h2 class="title"> Напрямки роботи</h2>
                <div class="front-page__articles articles">
                    <div class="articles__article">
                        <div class="front-page__articles-title articles__article-title">
                            <h3>Заходи для дітей та молоді</h3>
                        </div>
                        <div class="articles__article-content">
                            <p> Створення сприятливого середовища для
                                навчання та розвитку, надання
                                педагогічної,
                                психологічної та соціальної підтримки</p>
                            <p> Розвиток життєвих та соціальних навичок,
                                а також вмінь встановлювати здорові
                                відносини
                                і мирно вирішувати конфлікти
                            </p>
                            <p>
                                Заохочення активного, безпечного і
                                здорового
                                способу життя
                            </p>
                            <p>
                                Сприяння включенню та інтеграція дітей
                                та
                                підлітків у соціум
                            </p>

                        </div>

                    </div>
                    <div class="articles__article">
                        <div class="front-page__articles-title articles__article-title">
                            <h3>Заходи для сімей</h3>
                        </div>
                        <div class="articles__article-content">
                            <p>
                                Зміцнення компетенцій сімей
                            </p>
                            <p>
                                Сприяння навчанню сімей і здатності до
                                виховання дітей
                            </p>

                        </div>

                    </div>
                    <div class="articles__article">
                        <div class="front-page__articles-title articles__article-title">
                            <h3>Підвищення нашої якості роботи</h3>
                        </div>
                        <div class="articles__article-content">
                            <p> Професійний розвиток співробітників

                            </p>
                            <p>
                                Створення середовища для розкриття
                                потенціалу глобальності і позитивності
                                мислення
                            </p>
                        </div>

                    </div>

                </div>

            </div>

    </section>
    <section class="front-page__news">
        <div class="container">
            <div class="front-page__news-wrap">
                <h2 class="title"> Новини</h2>
                <div class="front-page__news-inner">
                    <article class="new new--column  front-page__news-new">
                        <div class="new__body">
                            <div class="new__back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/new1.jpg" alt="">
                            </div>
                            <div class="new__desc">
                                <h3>Ігротека для дітей з інвалідністю та робота з батьками</h3>
                                <p>
                                    Сьогодні фахівці
                                    дитячої точки СПІЛЬНО провели для дітей
                                    ігротеку на дитячому майданчику «Кмітливі пірати» та пограл
                                </p>
                                <div class="new__footer">
                                    <time datatime='2023-06-24'>24.06.23</time>
                                    <button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
                                            <use href="http://klas2/wp-content/themes/klas2/assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </article>
                    <article class="new new--column front-page__news-new">
                        <div class="new__body">
                            <div class="new__back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/new1.jpg" alt="">
                            </div>
                            <div class="new__desc">
                                <h3>Ігротека для дітей з інвалідністю та робота з батьками</h3>
                                <p>
                                    Сьогодні фахівці
                                    дитячої точки СПІЛЬНО провели для дітей
                                    ігротеку на дитячому майданчику «Кмітливі пірати» та пограл
                                </p>
                                <div class="new__footer">
                                    <time datatime='2023-06-24'>24.06.23</time>
                                    <button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
                                            <use href="http://klas2/wp-content/themes/klas2/assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </article>
                    <article class="new new--column front-page__news-new">
                        <div class="new__body">
                            <div class="new__back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/new1.jpg" alt="">
                            </div>
                            <div class="new__desc">
                                <h3>Ігротека для дітей з інвалідністю та робота з батьками</h3>
                                <p>
                                    Сьогодні фахівці
                                    дитячої точки СПІЛЬНО провели для дітей
                                    ігротеку на дитячому майданчику «Кмітливі пірати» та пограл
                                </p>
                                <div class="new__footer">
                                    <time datatime='2023-06-24'>24.06.23</time>
                                    <button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
                                            <use href="http://klas2/wp-content/themes/klas2/assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </article>
                    <article class="new new--column front-page__news-new">
                        <div class="new__body">
                            <div class="new__back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/front-page/new1.jpg" alt="">
                            </div>
                            <div class="new__desc">
                                <h3>Ігротека для дітей з інвалідністю та робота з батьками</h3>
                                <p>
                                    Сьогодні фахівці
                                    дитячої точки СПІЛЬНО провели для дітей
                                    ігротеку на дитячому майданчику «Кмітливі пірати» та пограл
                                </p>
                                <div class="new__footer">
                                    <time datatime='2023-06-24'>24.06.23</time>
                                    <button class="button read-more_button" type="button">Читати більше<svg class="arrow-icon">
                                            <use href="http://klas2/wp-content/themes/klas2/assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                <a class="primary_button button front-page__news-btn" href=" ">
                    Усі новини
                </a>
            </div>

        </div>
    </section>
    <section class="front-page__slider">
        <div class="container">
            <h2 class="title">
                Наші партнери
            </h2>
        </div>
        <div class="front-page__slider-wrap slider">
            <div class="slider__inner">
                <div class="slider__item">
                    <img src="<?php echo get_template_directory_uri()?>/src/images/front-page/logo/logo1.svg" alt="">
                </div>
                <div class="slider__item">
                <img src="<?php echo get_template_directory_uri()?>/src/images/front-page/logo/logo2.svg" alt="">
                </div>
                <div class="slider__item">
                <img src="<?php echo get_template_directory_uri()?>/src/images/front-page/logo/logo3.svg" alt="">
                </div>
                <div class="slider__item">
                <img src="<?php echo get_template_directory_uri()?>/src/images/front-page/logo/logo4.svg" alt="">
                </div>
                <div class="slider__item">
                <img src="<?php echo get_template_directory_uri()?>/src/images/front-page/logo/logo5.svg" alt="">
                </div>
         
     

            </div>
        </div>
    </section>
    <section class="collaboration">
        <div class="container">
            <div class="collaboration__wrap">
                <div class="collaboration__title">
                    <h4>
                        <?php echo the_field('collaboration_title') ?>
                    </h4>
                </div>

                <div class="collaboration__content content content--left">
                    <div class="content__desc">
                        <div class="content__desc-text">
                            <div class="collaboration__content-fon content__fon">
                            
                                <svg class="collaboration__content-fon-svg" width="112" height="98" viewBox="0 0 112 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fon photo_left">
                                        <path id="Vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M61.2674 5.51881C56.0299 4.477 50.6012 5.01171 45.6676 7.05528C40.7339 9.09884 36.5171 12.5595 33.5503 16.9996C30.5835 21.4397 29 26.6599 29 32C29 35.5457 29.6984 39.0567 31.0553 42.3324C32.4122 45.6082 34.401 48.5847 36.9081 51.0919C39.4153 53.5991 42.3918 55.5879 45.6676 56.9448C48.9433 58.3016 52.4543 59 56 59C61.3401 59 66.5603 57.4165 71.0004 54.4497C75.4405 51.4829 78.9012 47.2661 80.9448 42.3324C82.9883 37.3988 83.523 31.97 82.4812 26.7326C81.4394 21.4951 78.8679 16.6842 75.0919 12.9081C71.3159 9.13213 66.5049 6.56061 61.2674 5.51881ZM47.3348 11.0804C51.4723 9.36662 56.0251 8.9182 60.4175 9.79189C64.8098 10.6656 68.8445 12.8222 72.0112 15.9889C75.1779 19.1556 77.3344 23.1902 78.2081 27.5825C79.0818 31.9749 78.6334 36.5277 76.9196 40.6652C75.2058 44.8027 72.3035 48.3391 68.5799 50.8271C64.8562 53.3152 60.4784 54.6432 56 54.6432C53.0264 54.6432 50.082 54.0575 47.3348 52.9196C44.5876 51.7817 42.0915 50.1138 39.9889 48.0112C37.8863 45.9086 36.2184 43.4124 35.0804 40.6652C33.9425 37.918 33.3568 34.9735 33.3568 32C33.3568 27.5216 34.6848 23.1438 37.1729 19.4201C39.6609 15.6965 43.1973 12.7942 47.3348 11.0804Z" fill="#8FCECB" />
                                        <path id="Vector" d="M0.917749 27.9167C0.917749 26.3509 1.38936 24.8203 2.27293 23.5184C3.1565 22.2165 4.41236 21.2018 5.88168 20.6026C7.351 20.0034 8.9678 19.8467 10.5276 20.1521C12.0875 20.4576 13.5202 21.2116 14.6448 22.3188C15.7694 23.4259 16.5352 24.8365 16.8455 26.3722C17.1558 27.9079 16.9965 29.4997 16.3879 30.9463C15.7793 32.3929 14.7486 33.6293 13.4263 34.4992C12.1039 35.3691 10.5493 35.8334 8.95887 35.8334C7.90267 35.8342 6.8567 35.6299 5.88076 35.2324C4.90481 34.8348 4.01804 34.2517 3.27119 33.5164C2.52435 32.7811 1.93208 31.9081 1.52825 30.9472C1.12442 29.9864 0.916969 28.9566 0.917749 27.9167Z" fill="#AE9AC5" />
                                        <path id="Vector_2" d="M95.9177 7.91672C95.9177 6.35094 96.3894 4.82032 97.2729 3.51843C98.1565 2.21653 99.4124 1.20183 100.882 0.602628C102.351 0.00343084 103.968 -0.153347 105.528 0.152121C107.087 0.457589 108.52 1.21158 109.645 2.31876C110.769 3.42593 111.535 4.83655 111.845 6.37224C112.156 7.90793 111.997 9.49972 111.388 10.9463C110.779 12.3929 109.749 13.6293 108.426 14.4992C107.104 15.3691 105.549 15.8334 103.959 15.8334C102.903 15.8342 101.857 15.6299 100.881 15.2324C99.9048 14.8348 99.018 14.2517 98.2712 13.5164C97.5244 12.7811 96.9321 11.9081 96.5283 10.9472C96.1244 9.98637 95.917 8.95657 95.9177 7.91672Z" fill="#F1CC75" />
                                        <path id="Vector_3" d="M17.1838 68L14.4291 68C11.983 68 10 69.9269 10 72.3039L10 93.6961C10 96.0731 11.983 98 14.4291 98L17.1838 98C19.6299 98 21.6129 96.0731 21.6129 93.6961L21.6129 72.3039C21.6129 69.9269 19.6299 68 17.1838 68Z" fill="#F1CC75" />
                                    </g>
                                </svg>
                                <?php
                                $image = get_field('collaboration_img');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>
                            </div>
                            <div>
                                <?php echo the_field('collaboration_text') ?>

                            </div>






                        </div>




                    </div>



                </div>
                <div class="collaboration__btn">
                    <a class="primary_button button" href=" <?php the_field('collaboration_link') ?>">
                        Стати партнером
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
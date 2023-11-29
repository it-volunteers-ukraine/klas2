<?php get_header(); ?>


<main class="front-page__main">

    <section class="banner">
        <div class="banner__back" style="background-image: url('<?php echo get_field(
                                                                    'banner_back'
                                                                ); ?>')">
            <div class="container">
                <div class="banner__wrap">
                    <div class="banner__title">
                        <p><?php the_field('subtitle'); ?>Громадська організація</p>
                        <h1><?php the_field('title_h1'); ?></h1>
                        <a class="primary_button button banner__btn" href="<?php the_field(
                                                                                'banner__btn'
                                                                            ); ?> ">
                            Підтримати нас
                        </a>
                    </div>
                </div>

                <div class="banner__gallary">
                    <?php
                    $gallary = get_field('gallary');
                    $size = 'full';

                    foreach ($gallary as $key => $gallary_id) { ?>
                        <div class="banner__gallary-img">
                            <img src="<?php echo $gallary_id['url']; ?>" alt=" <?php echo $gallary_id['title']; ?>">


                        </div>

                    <?php }
                    ?>

                </div>
            </div>
        </div>

        <div class="container banner__container">
            <div class="banner__cards">
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/40.svg" alt>
                    </div>

                    <p>виконаних проєктів</p>

                </div>
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/8.svg" alt>
                    </div>

                    <p>проєктів в роботі </p>

                </div>
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/Vector.svg" alt>
                    </div>

                    <p>бажання допомагати </p>

                </div>
            </div>
            <div class="banner__desc">
                <p><?php the_field('banner_text'); ?></p>
            </div>
        </div>




    </section>
    <section class="about">
        <div class="container">
            <div class="about__wrap">
                <h2 class="title">
                    <?php the_field('about_title'); ?>
                </h2>
                <div class="about__content content content--right">
                    <div class="content__desc">
                        <div class="content__desc-text">

                            <div>
                                <?php the_field('about_text'); ?>
                            </div>

                            <div class="content__fon">
                                <svg class="about__content-fon-svg" xmlns="http://www.w3.org/2000/svg" width="84" height="69" viewBox="0 0 84 69" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8663 10.2594C42.485 9.7385 45.1994 10.0059 47.6662 11.0276C50.133 12.0494 52.2414 13.7798 53.7248 15.9998C55.2082 18.2199 56 20.8299 56 23.5C56 25.2729 55.6508 27.0283 54.9724 28.6662C54.2939 30.3041 53.2995 31.7924 52.0459 33.0459C50.7923 34.2995 49.3041 35.2939 47.6662 35.9724C46.0283 36.6508 44.2728 37 42.5 37C39.83 37 37.2199 36.2082 34.9998 34.7248C32.7797 33.2414 31.0494 31.133 30.0276 28.6662C29.0058 26.1994 28.7385 23.485 29.2594 20.8663C29.7803 18.2475 31.066 15.8421 32.954 13.9541C34.8421 12.0661 37.2475 10.7803 39.8663 10.2594ZM46.8326 13.0402C44.7638 12.1833 42.4874 11.9591 40.2913 12.3959C38.0951 12.8328 36.0778 13.9111 34.4944 15.4944C32.9111 17.0778 31.8328 19.0951 31.396 21.2913C30.9591 23.4874 31.1833 25.7638 32.0402 27.8326C32.8971 29.9013 34.3482 31.6695 36.2101 32.9136C38.0719 34.1576 40.2608 34.8216 42.5 34.8216C43.9868 34.8216 45.459 34.5288 46.8326 33.9598C48.2062 33.3908 49.4543 32.5569 50.5056 31.5056C51.5569 30.4543 52.3908 29.2062 52.9598 27.8326C53.5287 26.459 53.8216 24.9868 53.8216 23.5C53.8216 21.2608 53.1576 19.0719 51.9136 17.2101C50.6695 15.3482 48.9013 13.8971 46.8326 13.0402Z" fill="#8FCECB" />
                                    <path d="M78 14.5C78 13.61 77.7361 12.74 77.2416 11.9999C76.7471 11.2599 76.0443 10.6831 75.2221 10.3425C74.3998 10.002 73.495 9.91283 72.6221 10.0865C71.7492 10.2601 70.9474 10.6887 70.318 11.318C69.6887 11.9474 69.2601 12.7492 69.0865 13.6221C68.9128 14.495 69.0019 15.3998 69.3425 16.2221C69.6831 17.0443 70.2599 17.7471 70.9999 18.2416C71.74 18.7361 72.61 19 73.5 19C74.0911 19.0004 74.6764 18.8843 75.2226 18.6583C75.7687 18.4324 76.265 18.1009 76.683 17.683C77.1009 17.265 77.4324 16.7688 77.6583 16.2226C77.8843 15.6764 78.0004 15.0911 78 14.5Z" fill="#AE9AC5" />
                                    <path d="M17 24C17 23.0111 16.7067 22.0444 16.1573 21.2222C15.6079 20.3999 14.827 19.759 13.9134 19.3806C12.9998 19.0022 11.9944 18.9031 11.0245 19.0961C10.0546 19.289 9.16373 19.7652 8.46447 20.4645C7.76521 21.1637 7.289 22.0546 7.09608 23.0245C6.90315 23.9945 7.00216 24.9998 7.3806 25.9134C7.75904 26.827 8.3999 27.6079 9.22215 28.1573C10.0444 28.7068 11.0111 29 12 29C12.6567 29.0005 13.3071 28.8715 13.914 28.6204C14.5208 28.3693 15.0722 28.001 15.5366 27.5366C16.001 27.0722 16.3693 26.5208 16.6204 25.914C16.8715 25.3071 17.0005 24.6567 17 24Z" fill="#F1CC75" />
                                    <path d="M66.4294 27L69.1842 27C71.6303 27 73.6133 28.9269 73.6133 31.3039L73.6133 52.6961C73.6133 55.0731 71.6303 57 69.1842 57L66.4294 57C63.9833 57 62.0004 55.0731 62.0004 52.6961L62.0004 31.3039C62.0004 28.9269 63.9833 27 66.4294 27Z" fill="#F1CC75" />
                                </svg>
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
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#arrow">
                                </use>
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
                <h2 class="title"> <?php the_field('works_title'); ?></h2>
                <div class="front-page__articles articles">

                    <?php
                    $works = get_field('works');

                    foreach ($works as $key => $work) { ?>

                        <div class="articles__article">
                            <div class="front-page__articles-title articles__article-title">
                                <h3><?php echo $work['work_title']; ?></h3>
                            </div>
                            <div class="articles__article-content">
                                <?php echo $work['work_text']; ?>

                            </div>

                        </div>

                    <?php }
                    ?>
                </div>

            </div>

    </section>
    <section class="front-page__news">
        <div class="container">
            <div class="front-page__news-wrap">

                <h2 class="title"> <?php the_field('new_title'); ?></h2>
                <div class="front-page__news-inner">
                    <?php
                    $current_page = get_query_var('paged')
                        ? get_query_var('paged')
                        : 1;
                    $postID = $post->ID;
                    add_image_size('front_new', 364, 180, true);
                    add_filter('excerpt_length', function () {
                        return 30;
                    });
                    $args = [
                        'post_type' => 'post', //это вид
                        'posts_per_page' => 4, //количество
                        'paged' => $current_page,
                        'category_name' => 'News',
                        'order' => 'ASC',
                    ];

                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()) : ?>


                        <?php while ($query->have_posts()) :
                            $query->the_post(); ?>

                            <article class="new new--column  front-page__news-new">
                                <div class="new__body">

                                    <div class="new__body-content">
                                        <div class="new__back">
                                            <?php the_post_thumbnail('front_new'); ?>
                                        </div>
                                        <div class="new__desc">
                                            <h3>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="new__footer">
                                        <time datatime='2023-06-24'><?php the_time(
                                                                        'd.m.y'
                                                                    ); ?></time>
                                        <a href="<?php the_permalink(); ?>" class="button read-more_button" type="button">Читати
                                            більше<svg class="arrow-icon">
                                                <use href="http://klas2/wp-content/themes/klas2/assets/images/sprite.svg#arrow">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </article>


                        <?php
                        endwhile; ?>


                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php esc_html_e(
                                'Нет постов по вашим критериям.'
                            ); ?></p>
                    <?php endif; ?>





                </div>
                <a class="primary_button button front-page__news-btn" href=" <?php the_field(
                                                                                    'news_link'
                                                                                ); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/logo/logo1.svg" alt="">
                </div>
                <div class="slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/logo/logo2.svg" alt="">
                </div>
                <div class="slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/logo/logo3.svg" alt="">
                </div>
                <div class="slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/logo/logo4.svg" alt="">
                </div>
                <div class="slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/logo/logo5.svg" alt="">
                </div>



            </div>
        </div>
    </section>
    <section class="collaboration">
        <div class="container">
            <div class="collaboration__wrap">
                <div class="collaboration__title">
                    <h4>
                        <?php echo the_field('collaboration_title'); ?>
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
                                <?php echo the_field('collaboration_text'); ?>

                            </div>






                        </div>




                    </div>



                </div>
                <div class="collaboration__btn">
                    <a class="primary_button button" href=" <?php the_field(
                                                                'collaboration_link'
                                                            ); ?>">
                        Стати партнером
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container">
            <div class="contacts__wrap">
                <div class="contacts__inner-list">
                    <h2 class="title">
                        Контакти
                    </h2>
                    <p class="contacts__sub">
                        Громадська організація «Всеукраїнська організація "Клас"»
                    </p>
                    <ul class="list__contact contacts__list">
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#ACACAC" />
                                    <path d="M14 27.9213V19.7215L11.3639 17.395L9 16.104V26.4742C9 27.2749 9.67246 27.9213 10.5 27.9213H14Z" fill="#4285F4" />
                                    <path d="M26 27.9212H29.5C30.33 27.9212 31 27.2724 31 26.4742V16.104L28.3225 17.5827L26 19.7214V27.9212Z" fill="#34A853" />
                                    <path d="M13.9998 19.7214L13.6411 16.5175L13.9998 13.451L19.9998 17.7921L25.9998 13.451L26.401 16.3519L25.9998 19.7214L19.9998 24.0624L13.9998 19.7214Z" fill="#EA4335" />
                                    <path d="M26 13.4511V19.7214L31 16.1039V14.1746C31 12.3851 28.8825 11.365 27.4001 12.4382L26 13.4511Z" fill="#FBBC04" />
                                    <path d="M9 16.104L11.2996 17.7678L14 19.7215V13.4511L12.5999 12.4382C11.1149 11.365 9 12.3852 9 14.1745V16.1039V16.104Z" fill="#C5221F" />
                                </svg>
                                <span>govgoklas@gmail.com</span>

                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#ACACAC" />
                                    <path d="M20.9011 10.6768C25.3553 10.8143 29.2053 14.8435 29.1511 19.1643C29.1476 19.2745 29.1545 19.3847 29.1719 19.4935C29.1719 19.8477 29.1511 20.2143 28.6595 20.2018C28.1011 20.2018 28.1803 19.6518 28.1469 19.231V19.1185C27.5511 14.5352 25.4178 12.3643 20.7678 11.6602C20.3803 11.6143 19.797 11.681 19.8095 11.1893C19.8636 10.4477 20.547 10.7352 20.9011 10.6768ZM26.8553 18.9477C26.8564 18.9951 26.8481 19.0422 26.8308 19.0864C26.8136 19.1306 26.7877 19.1709 26.7548 19.205C26.7218 19.2391 26.6825 19.2663 26.6389 19.2851C26.5954 19.3039 26.5485 19.3138 26.5011 19.3143C25.997 19.406 25.9178 19.1102 25.8845 18.7768C25.8849 18.6469 25.8738 18.5172 25.8511 18.3893C25.3595 15.6018 24.3553 14.5768 21.497 13.9435C21.0803 13.8518 20.422 13.8977 20.5386 13.2685C20.6553 12.6393 21.2261 12.8518 21.6803 12.9143C24.5345 13.2685 26.8803 15.7018 26.8678 18.3852C26.8553 18.5477 26.8761 18.7768 26.8553 18.9477ZM24.4803 18.581C24.4035 18.6229 24.3178 18.6458 24.2303 18.6477C24.1584 18.656 24.0855 18.6467 24.018 18.6206C23.9505 18.5944 23.8903 18.5523 23.8428 18.4977C23.7636 18.3829 23.7162 18.2492 23.7053 18.1102C23.6919 17.5974 23.4875 17.1081 23.1322 16.7382C22.7769 16.3682 22.2963 16.1443 21.7845 16.1102C21.4303 16.0518 21.0761 15.9268 21.247 15.4727C21.3595 15.1518 21.6636 15.1185 21.9553 15.1185C23.2053 15.0852 24.7095 16.581 24.6845 17.8727C24.7103 17.9994 24.7041 18.1307 24.6662 18.2544C24.6284 18.3781 24.5602 18.4904 24.4678 18.581H24.4803ZM29.222 26.6227C28.7303 27.9727 27.0386 29.3518 25.5886 29.331C25.2573 29.2748 24.9322 29.1869 24.6178 29.0685C19.4178 26.8893 15.397 23.5518 12.6636 18.981C12.0245 17.9137 11.4674 16.7993 10.997 15.6477C10.1178 13.5352 11.0303 11.7518 13.2595 11.0102C13.6411 10.8852 14.0528 10.8852 14.4345 11.0102C15.3928 11.3643 17.7928 14.5977 17.8386 15.5685C17.872 16.3102 17.372 16.7102 16.8553 17.0435C16.5946 17.1819 16.3781 17.3909 16.2307 17.6466C16.0834 17.9023 16.011 18.1944 16.022 18.4893C16.0472 18.8055 16.129 19.1146 16.2636 19.4018C17.1758 21.3926 18.8159 22.9582 20.847 23.7768C21.5886 24.1102 22.3095 24.0727 22.822 23.3185C23.7261 21.981 24.8428 22.0685 26.0678 22.8727C26.6636 23.2893 27.3178 23.706 27.8845 24.1643C28.6845 24.8102 29.6886 25.3102 29.2095 26.6227H29.222Z" fill="#070707" />
                                </svg>
                                <span>+38 066 596 82 47</span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon/WhatsApp">
                                        <path id="Vector" d="M2.15156 20.018C2.15067 23.1933 2.98409 26.2937 4.5688 29.0265L2 38.3636L11.5984 35.8582C14.2531 37.297 17.2276 38.0509 20.2503 38.051H20.2583C30.2367 38.051 38.3594 29.9677 38.3636 20.0322C38.3655 15.2177 36.4839 10.6905 33.0652 7.28452C29.6471 3.87879 25.1011 2.0022 20.2575 2C10.2779 2 2.15568 10.0829 2.15156 20.018Z" fill="url(#paint0_linear_442_4033)" />
                                        <path id="Vector_2" d="M15.1422 11.8647C14.7694 11.0425 14.377 11.0259 14.0225 11.0115C13.7322 10.9991 13.4003 11 13.0687 11C12.7369 11 12.1977 11.1239 11.7419 11.6177C11.2856 12.112 10 13.3064 10 15.7357C10 18.1651 11.7833 20.5129 12.0319 20.8427C12.2808 21.1718 15.4745 26.3166 20.5327 28.2958C24.7364 29.9406 25.5919 29.6135 26.5042 29.531C27.4167 29.4489 29.4486 28.3369 29.8631 27.1839C30.278 26.031 30.278 25.0428 30.1536 24.8363C30.0292 24.6306 29.6973 24.507 29.1997 24.2602C28.7019 24.0132 26.2553 22.8186 25.7992 22.6538C25.343 22.4892 25.0112 22.407 24.6794 22.9014C24.3475 23.3951 23.3945 24.507 23.1041 24.8363C22.8139 25.1664 22.5234 25.2075 22.0259 24.9605C21.528 24.7127 19.9253 24.192 18.0239 22.5099C16.5445 21.2011 15.5458 19.5848 15.2555 19.0904C14.9652 18.5968 15.2244 18.3292 15.4739 18.0831C15.6975 17.8619 15.9717 17.5065 16.2208 17.2183C16.4689 16.9299 16.5517 16.7242 16.7177 16.3949C16.8837 16.0653 16.8006 15.7769 16.6764 15.5299C16.5517 15.283 15.5847 12.8409 15.1422 11.8647Z" fill="#FDFCFC" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_442_4033" x1="1820.18" y1="3638.36" x2="1820.18" y2="2" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1FAF38" />
                                            <stop offset="1" stop-color="#60D669" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span> +38 066 596 82 47</span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon/Facebook" clip-path="url(#clip0_328_4449)">
                                        <path id="Vector" d="M40 20C40 8.95437 31.0456 0 20 0C8.95437 0 0 8.95422 0 20C0 29.9825 7.31375 38.2567 16.875 39.757V25.7812H11.7969V20H16.875V15.5937C16.875 10.5812 19.8609 7.8125 24.4292 7.8125C26.6175 7.8125 28.9062 8.20312 28.9062 8.20312V13.125H26.3844C23.8997 13.125 23.125 14.6667 23.125 16.2484V20H28.6719L27.7852 25.7812H23.125V39.757C32.6862 38.2567 40 29.9827 40 20Z" fill="#4792F3" />
                                        <path id="Vector_2" d="M27.7852 25.7812L28.6719 20H23.125V16.2484C23.125 14.6666 23.8998 13.125 26.3844 13.125H28.9062V8.20312C28.9062 8.20312 26.6175 7.8125 24.4292 7.8125C19.8609 7.8125 16.875 10.5813 16.875 15.5938V20H11.7969V25.7812H16.875V39.757C17.9088 39.919 18.9536 40.0003 20 40C21.0464 40.0003 22.0912 39.9191 23.125 39.757V25.7812H27.7852Z" fill="#FDFCFC" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_328_4449">
                                            <rect width="40" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span> Facebook</span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#F34D4D" />
                                    <path d="M29.0853 15.3623C28.8672 14.5308 28.2246 13.876 27.4088 13.6538C25.9299 13.25 20 13.25 20 13.25C20 13.25 14.0702 13.25 12.5913 13.6538C11.7755 13.8761 11.1329 14.5308 10.9148 15.3623C10.5186 16.8693 10.5186 20.0136 10.5186 20.0136C10.5186 20.0136 10.5186 23.1579 10.9148 24.665C11.1329 25.4964 11.7755 26.124 12.5913 26.3462C14.0702 26.75 20 26.75 20 26.75C20 26.75 25.9299 26.75 27.4088 26.3462C28.2246 26.124 28.8672 25.4964 29.0853 24.665C29.4815 23.1579 29.4815 20.0136 29.4815 20.0136C29.4815 20.0136 29.4815 16.8693 29.0853 15.3623ZM18.0606 22.8684V17.1588L23.0169 20.0137L18.0606 22.8684Z" fill="#FDFCFC" />
                                </svg>

                                <span>YouTube</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="contacts__inner-form">
                    <h2 class="title">
                        Маєте питання?
                    </h2>
                </div>

            </div>

        </div>
    </section>

</main>
<?php get_footer(); ?>
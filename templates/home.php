<?php
/*
Template Name: home
*/
get_header();
?>


<main class="front-page__main">

    <section class="banner">
      
      <div id="mouse-parallax" class="mouse-parallax">
        <div id="mouse-parallax-bg" class="banner__back" style="background-image: url('<?php  echo get_field('banner_back'); ?>')">
        </div>
      </div>  

      <div class="container">
          <div class="banner__wrap">
              <div class="front-page__banner-title">
                  <p><?php the_field('subtitle'); ?></p>
                  <h1><?php the_field('title_h1'); ?></h1>
                  <a class="primary_button button banner__btn" href="<?php the_field( 'banner__btn'); ?> ">
                      <?php the_field( 'banner__btn_name'); ?>
                  </a>
              </div>
          </div>

          <div class="banner__gallary">
              <?php
              $gallary = get_field('gallary');
              if ($gallary) {
                  $size = 'full';

                  foreach ($gallary as $key => $gallary_id) { ?>
              <div class="banner__gallary-img">
                  <img src="<?php echo $gallary_id['url']; ?>" alt=" <?php echo $gallary_id['title']; ?>">


              </div>

              <?php }
              } ?>

          </div>
      </div>
        

        <div class="container banner__container">
            <div class="banner__cards">
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <p id="count" data-amount="<?php the_field('finished_projects_amount'); ?>" class="finished-proj__amount">0</p>
                    </div>

                    <p><?php the_field('finished_projects_text'); ?></p>

                </div>
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <p id="count" class="work-proj__amount" data-amount="<?php the_field('projects_in_work_amount'); ?>">0</p>
                    </div>

                    <p><?php the_field('projects_in_work_text'); ?></p>

                </div>
                <div class="banner__cards-card">
                    <div class="banner__cards-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/front-page/infinity.svg"
                            alt='infinity' loading="lazy">
                    </div>

                    <p><?php the_field( 'passion_to_help'); ?></p>

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
                                <svg class="about__content-fon-svg" xmlns="http://www.w3.org/2000/svg" width="84"
                                    height="69" viewBox="0 0 84 69" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M39.8663 10.2594C42.485 9.7385 45.1994 10.0059 47.6662 11.0276C50.133 12.0494 52.2414 13.7798 53.7248 15.9998C55.2082 18.2199 56 20.8299 56 23.5C56 25.2729 55.6508 27.0283 54.9724 28.6662C54.2939 30.3041 53.2995 31.7924 52.0459 33.0459C50.7923 34.2995 49.3041 35.2939 47.6662 35.9724C46.0283 36.6508 44.2728 37 42.5 37C39.83 37 37.2199 36.2082 34.9998 34.7248C32.7797 33.2414 31.0494 31.133 30.0276 28.6662C29.0058 26.1994 28.7385 23.485 29.2594 20.8663C29.7803 18.2475 31.066 15.8421 32.954 13.9541C34.8421 12.0661 37.2475 10.7803 39.8663 10.2594ZM46.8326 13.0402C44.7638 12.1833 42.4874 11.9591 40.2913 12.3959C38.0951 12.8328 36.0778 13.9111 34.4944 15.4944C32.9111 17.0778 31.8328 19.0951 31.396 21.2913C30.9591 23.4874 31.1833 25.7638 32.0402 27.8326C32.8971 29.9013 34.3482 31.6695 36.2101 32.9136C38.0719 34.1576 40.2608 34.8216 42.5 34.8216C43.9868 34.8216 45.459 34.5288 46.8326 33.9598C48.2062 33.3908 49.4543 32.5569 50.5056 31.5056C51.5569 30.4543 52.3908 29.2062 52.9598 27.8326C53.5287 26.459 53.8216 24.9868 53.8216 23.5C53.8216 21.2608 53.1576 19.0719 51.9136 17.2101C50.6695 15.3482 48.9013 13.8971 46.8326 13.0402Z"
                                        fill="#8FCECB" />
                                    <path
                                        d="M78 14.5C78 13.61 77.7361 12.74 77.2416 11.9999C76.7471 11.2599 76.0443 10.6831 75.2221 10.3425C74.3998 10.002 73.495 9.91283 72.6221 10.0865C71.7492 10.2601 70.9474 10.6887 70.318 11.318C69.6887 11.9474 69.2601 12.7492 69.0865 13.6221C68.9128 14.495 69.0019 15.3998 69.3425 16.2221C69.6831 17.0443 70.2599 17.7471 70.9999 18.2416C71.74 18.7361 72.61 19 73.5 19C74.0911 19.0004 74.6764 18.8843 75.2226 18.6583C75.7687 18.4324 76.265 18.1009 76.683 17.683C77.1009 17.265 77.4324 16.7688 77.6583 16.2226C77.8843 15.6764 78.0004 15.0911 78 14.5Z"
                                        fill="#AE9AC5" />
                                    <path
                                        d="M17 24C17 23.0111 16.7067 22.0444 16.1573 21.2222C15.6079 20.3999 14.827 19.759 13.9134 19.3806C12.9998 19.0022 11.9944 18.9031 11.0245 19.0961C10.0546 19.289 9.16373 19.7652 8.46447 20.4645C7.76521 21.1637 7.289 22.0546 7.09608 23.0245C6.90315 23.9945 7.00216 24.9998 7.3806 25.9134C7.75904 26.827 8.3999 27.6079 9.22215 28.1573C10.0444 28.7068 11.0111 29 12 29C12.6567 29.0005 13.3071 28.8715 13.914 28.6204C14.5208 28.3693 15.0722 28.001 15.5366 27.5366C16.001 27.0722 16.3693 26.5208 16.6204 25.914C16.8715 25.3071 17.0005 24.6567 17 24Z"
                                        fill="#F1CC75" />
                                    <path
                                        d="M66.4294 27L69.1842 27C71.6303 27 73.6133 28.9269 73.6133 31.3039L73.6133 52.6961C73.6133 55.0731 71.6303 57 69.1842 57L66.4294 57C63.9833 57 62.0004 55.0731 62.0004 52.6961L62.0004 31.3039C62.0004 28.9269 63.9833 27 66.4294 27Z"
                                        fill="#F1CC75" />
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

                        <a href="<?php the_field('about_link')?>" class="button read-more_button">
                            <span><?php the_field('read-more_button', 'option'); ?></span>

                            <svg class="arrow-icon">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#arrow">
                                </use>
                            </svg>
                        </a>

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
                    if ($works) {
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
                    }
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
                    ];

                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()) : ?>


                    <?php while ($query->have_posts()) :
                            $query->the_post(); ?>

                    <article class="new new--column  front-page__news-new">
                        <div class="new__body">

                            <div class="new__body-content">
                                <a href="<?php the_permalink(); ?>" class="new__back">
                                    <?php echo get_template_part('template-parts/check_thumbnail'); ?>

                                </a>
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
                                <a href="<?php the_permalink(); ?>" class="button read-more_button"><?php the_field('read-more_button', 'option'); ?><svg class="arrow-icon">

                                        <use
                                            href="<?php echo  get_template_directory_uri() ?>/assets/images/sprite.svg#arrow">
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
                                'Немає постів по вашому запиту.'
                            ); ?></p>
                    <?php endif; ?>





                </div>
                <a class="primary_button button front-page__news-btn" href=" <?php the_field( 'news_link'); ?>">
                    <?php the_field('news_link_name'); ?>
                </a>
            </div>

        </div>
    </section>
    <section class="front-page__slider">
        <div class="container">
            <h2 class="title">
                <?php the_field('collaboration_main_title'); ?>
            </h2>
        </div>
        <div class="front-page__slider-wrap slider ">
            <div class="slider__inner">
                <?php
            $images = get_field('slider');
            $sizes = 'full';
            if ($images) : ?>

                <?php foreach ($images as $image) :
                
                        ?>
                <div class="slider__item ">
                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
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

                                <svg class="collaboration__content-fon-svg" width="112" height="98" viewBox="0 0 112 98"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fon photo_left">
                                        <path id="Vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M61.2674 5.51881C56.0299 4.477 50.6012 5.01171 45.6676 7.05528C40.7339 9.09884 36.5171 12.5595 33.5503 16.9996C30.5835 21.4397 29 26.6599 29 32C29 35.5457 29.6984 39.0567 31.0553 42.3324C32.4122 45.6082 34.401 48.5847 36.9081 51.0919C39.4153 53.5991 42.3918 55.5879 45.6676 56.9448C48.9433 58.3016 52.4543 59 56 59C61.3401 59 66.5603 57.4165 71.0004 54.4497C75.4405 51.4829 78.9012 47.2661 80.9448 42.3324C82.9883 37.3988 83.523 31.97 82.4812 26.7326C81.4394 21.4951 78.8679 16.6842 75.0919 12.9081C71.3159 9.13213 66.5049 6.56061 61.2674 5.51881ZM47.3348 11.0804C51.4723 9.36662 56.0251 8.9182 60.4175 9.79189C64.8098 10.6656 68.8445 12.8222 72.0112 15.9889C75.1779 19.1556 77.3344 23.1902 78.2081 27.5825C79.0818 31.9749 78.6334 36.5277 76.9196 40.6652C75.2058 44.8027 72.3035 48.3391 68.5799 50.8271C64.8562 53.3152 60.4784 54.6432 56 54.6432C53.0264 54.6432 50.082 54.0575 47.3348 52.9196C44.5876 51.7817 42.0915 50.1138 39.9889 48.0112C37.8863 45.9086 36.2184 43.4124 35.0804 40.6652C33.9425 37.918 33.3568 34.9735 33.3568 32C33.3568 27.5216 34.6848 23.1438 37.1729 19.4201C39.6609 15.6965 43.1973 12.7942 47.3348 11.0804Z"
                                            fill="#8FCECB" />
                                        <path id="Vector"
                                            d="M0.917749 27.9167C0.917749 26.3509 1.38936 24.8203 2.27293 23.5184C3.1565 22.2165 4.41236 21.2018 5.88168 20.6026C7.351 20.0034 8.9678 19.8467 10.5276 20.1521C12.0875 20.4576 13.5202 21.2116 14.6448 22.3188C15.7694 23.4259 16.5352 24.8365 16.8455 26.3722C17.1558 27.9079 16.9965 29.4997 16.3879 30.9463C15.7793 32.3929 14.7486 33.6293 13.4263 34.4992C12.1039 35.3691 10.5493 35.8334 8.95887 35.8334C7.90267 35.8342 6.8567 35.6299 5.88076 35.2324C4.90481 34.8348 4.01804 34.2517 3.27119 33.5164C2.52435 32.7811 1.93208 31.9081 1.52825 30.9472C1.12442 29.9864 0.916969 28.9566 0.917749 27.9167Z"
                                            fill="#AE9AC5" />
                                        <path id="Vector_2"
                                            d="M95.9177 7.91672C95.9177 6.35094 96.3894 4.82032 97.2729 3.51843C98.1565 2.21653 99.4124 1.20183 100.882 0.602628C102.351 0.00343084 103.968 -0.153347 105.528 0.152121C107.087 0.457589 108.52 1.21158 109.645 2.31876C110.769 3.42593 111.535 4.83655 111.845 6.37224C112.156 7.90793 111.997 9.49972 111.388 10.9463C110.779 12.3929 109.749 13.6293 108.426 14.4992C107.104 15.3691 105.549 15.8334 103.959 15.8334C102.903 15.8342 101.857 15.6299 100.881 15.2324C99.9048 14.8348 99.018 14.2517 98.2712 13.5164C97.5244 12.7811 96.9321 11.9081 96.5283 10.9472C96.1244 9.98637 95.917 8.95657 95.9177 7.91672Z"
                                            fill="#F1CC75" />
                                        <path id="Vector_3"
                                            d="M17.1838 68L14.4291 68C11.983 68 10 69.9269 10 72.3039L10 93.6961C10 96.0731 11.983 98 14.4291 98L17.1838 98C19.6299 98 21.6129 96.0731 21.6129 93.6961L21.6129 72.3039C21.6129 69.9269 19.6299 68 17.1838 68Z"
                                            fill="#F1CC75" />
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
                        <?php the_field('collaboration_link_name') ?>
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
                        <?php the_field('contacts_title'); ?>
                    </h2>

                    <p class="contacts__sub">
                        <?php the_field('subtitle'); ?> <?php the_field('title_h1'); ?>
                    </p>
                    <ul class="list__contact contacts__list">
                        <?php
                        $contacts = get_field('contacts');

                        ?>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="mailto:<?php the_field('email', 'options'); ?> "
                                target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/contact/Gmail.svg"
                                    alt="Gmail" loading="lazy" width="40" height="40">
                                <span><?php the_field('email', 'options'); ?></span>

                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="tel:<?php echo str_replace(' ', '', get_field('first-phone', 'options')); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/contact/Phone.svg"
                                    alt="Phone" loading="lazy" width="40" height="40">
                                <span><?php the_field('first-phone', 'options'); ?> </span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                        <a class="contacts__list-link" href="https://wa.me/<?php echo str_replace(' ', '', get_field('second-phone', 'options')); ?>"
                                target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/contact/WhatsApp.svg"
                                    alt="WhatsApp" loading="lazy" width="40" height="40">
                                <span><?php the_field('second-phone', 'options'); ?></span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="<?php echo esc_attr(get_field('facebook', 'options')); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/contact/Facebook.svg"
                                    alt="Facebook" loading="lazy" width="40" height="40">

                                <span> Facebook</span>
                            </a>
                        </li>
                        <li class="contacts__list-item">
                            <a class="contacts__list-link" href="<?php echo esc_attr(get_field('youtube', 'options')); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/src/images/contact/YouTube.svg"
                                    alt="YouTube" loading="lazy" width="40" height="40">
                                <span>YouTube</span>
                            </a>
                        </li>
                        <?php  ?>
                    </ul>

                </div>
                <div class="contacts__inner-form">
                    <?php get_template_part('template-parts/form'); ?>
                </div>

            </div>

        </div>
    </section>

</main>


<?php get_footer(); ?>
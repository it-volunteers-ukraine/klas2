
<?php
/*
Template Name: library
*/
get_header();
?>

<section class="library-section">
  <?php $postID = $post->ID; ?>
    <div class="container">
      <h1 class="library__title"><?php the_field('library_title', $postID) ?></h1>

      <?php
        $args = array(
                    'type' => 'materials',
                    'taxonomy' => 'material-category',
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => 1
                );

        $cats = get_categories($args);

        if($cats) : ?>

        <ul class='library-cats__list'>
          <?php foreach($cats as $cat) {
            $termId = $cat->term_id;
            ?>
            <li>
              <a href="<?php echo get_term_link((int) $termId) ?>">
                      <?php echo $cat->name; ?>
                  </a>
            </li>
                  
            <?php } ?>
        </ul>

        <?php endif; ?>

      <div class="library-wrap">

      <?php
// теперь выполняется запрос для каждого семейства животных
foreach( $cats as $cat ) {
 
    // Определение запроса
    $args = array(
        'post_type' => 'materials',
        'posts_per_page' => 10,
        'animal_cat' => $cat->slug
    );
    $loop = new WP_Query($args);
             
    // вывод названий записей в тегах заголовков
     echo'<h2>' . $cat->name . '</h2>';
     
    // вывод списком заголовков записей
    echo '<ul>';
     
        // Начало цикла
        while ( $loop->have_posts() ) {
        $loop->the_post();
        $iconType = get_field('svg_media_button');
        $buttonText = get_field('text_media_button');
        ?>
        <div class="entry-content">
          <div class="feature-image">
              
              <?php if($iconType==="play"): ?>
                <a href="<?php the_field('video_media'); ?>" target="_blank"  rel="noopener noreferrer" class="feature-image__link"  aria-label="Подивитись <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>

                <a href="<?php the_field('video_media'); ?>" target="_blank" rel="noopener noreferrer" class="play-outline__button" aria-label="Подивитись <?php the_title(); ?>">
                  <svg class="play-outline__image" width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#play-outline"></use>
                  </svg>
                </a>
              <?php endif; ?>

              <?php if($iconType==="download"): ?>
                <a href="<?php the_field('pdf_media'); ?>" download class="feature-image__link" aria-label="Завантажити <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
              <?php endif; ?>

          </div>
         <div class="library-post__title"> <?php the_title(); ?></div>

              <?php if($iconType==="play"): ?>
                <a href="<?php the_field('video_media'); ?>" target="_blank" rel="noopener noreferrer" class="button download_button">
                  <svg class="download-icon" width="24px" height="24px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#<?php echo $iconType; ?>"></use>
                  </svg><?php echo $buttonText; ?>
                </a>
              <?php endif; ?>

              <?php if($iconType==="download"): ?>
                <a href="<?php the_field('pdf_media'); ?>" download class="button download_button">
                  <svg class="download-icon" width="24px" height="24px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#<?php echo $iconType; ?>"></use>
                  </svg><?php echo $buttonText; ?>
                </a>
              <?php endif; ?>

        </div>
        <?php } ?>
     
    </ul>;
     
    // используем сброс данных записи, чтобы восстановить оригинальный запрос
    <?php wp_reset_postdata();
 
} ?>

    </div>
    </div>
</section>

<?php get_footer(); ?>
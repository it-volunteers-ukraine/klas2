
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
      <div class="library-wrap">
          <?php
      $args = array(
        'post_type'      => 'material',
        'posts_per_page' => 10,
      );
      $loop = new WP_Query($args);
      while ( $loop->have_posts() ) {
        $loop->the_post();
        $iconType = get_field('svg_media_button');
        $buttonText = get_field('text_media_button');
        ?>
        <div class="entry-content">
          <div class="feature-image">
              
              <?php if($iconType==="play"): ?>
                <a target="_blank"  rel="noopener noreferrer" class="feature-image__link" href="<?php the_field('video_media'); ?>" aria-label="Подивитись <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                <a target="_blank" rel="noopener noreferrer" href="<?php the_field('video_media'); ?>" class="play-outline__button" aria-label="Подивитись <?php the_title(); ?>">
                  <svg class="play-outline__image" width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#play-outline"></use>
                  </svg>
                </a>
              <?php endif; ?>
              <?php if($iconType==="download"): ?>
                <a download class="feature-image__link" href="<?php the_field('pdf_media'); ?>" aria-label="Завантажити <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
              <?php endif; ?>
          </div>
         <div class="library-post__title"> <?php the_title(); ?></div>
         <?php if($iconType==="play"): ?>
                <a target="_blank" rel="noopener noreferrer" href="<?php the_field('video_media'); ?>" class="button download_button">
                  <svg class="download-icon" width="24px" height="24px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#<?php echo $iconType; ?>"></use>
                  </svg><?php echo $buttonText; ?>
                </a>
              <?php endif; ?>
              <?php if($iconType==="download"): ?>
                <a download href="<?php the_field('pdf_media'); ?>" class="button download_button">
                  <svg class="download-icon" width="24px" height="24px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#<?php echo $iconType; ?>"></use>
                  </svg><?php echo $buttonText; ?>
                </a>
              <?php endif; ?>
        </div>
        <?php } ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>
<?php $iconType = get_field('svg_media_button');
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
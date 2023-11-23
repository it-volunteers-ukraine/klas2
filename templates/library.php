
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
        ?>
        <div class="entry-content">
          <div class="feature-image">
              <a class="feature-image__link" href="<?php the_permalink(); ?>" aria-label="Читати детальніше про <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
         <div class="library-post__title"> <?php the_title(); ?></div>
          <a href="" class="button download_button" type="button"><svg class="download-icon" width="24px" height="24px">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#download"></use>
    </svg>Завантажити
  </a>
  <!-- <?php the_content(); ?> -->
        </div>
        <?php
      } ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>
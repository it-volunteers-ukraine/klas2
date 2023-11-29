<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-it-volunteers
 */

get_header();
?>

<main id="primary" class="site-main">

<section class="error-404">
		<div class="container">
		<?php $errorImage = get_field('error-image', 'option'); ?>
      <?php if ($errorImage): ?>
        <img class="error-404__image" src="<?php echo esc_url($errorImage['url']); ?>" alt="<?php echo esc_attr($errorImage['alt']); ?>" />
      <?php endif; ?>
			<div>
					<h2><?php the_field("error_title", 'option') ?></h2>
					<p><?php the_field("error_text", 'option') ?></p>
					<button class="button"><?php the_field("error_button_text", 'option') ?></button>
			</div>
		</div>
	</section>


</main><!-- #main -->

<?php
get_footer();

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
							<?php $errorImage = get_field('error_image', 'option'); ?>
							<?php if ($errorImage): ?>
								<img class="error-404__image" src="<?php echo esc_url($errorImage['url']); ?>" alt="<?php echo esc_attr($errorImage['alt']); ?>" />
							<?php endif; ?>
							<div class="error-404__wrapper">
									<h2 class="error-404__title"><?php the_field("error_title", 'option') ?></h2>
									<div class="error-404__error-container">
										<p class="error-404__text"><?php the_field("error_first_text", 'option') ?></p>
										<p class="error-404__text"><?php the_field("error_second_text", 'option') ?></p>
									</div>
									<a href="<?php echo get_home_url(); ?>" class="button primary_button error-404__button"><?php the_field("error_button_text", 'option') ?></a>
							</div>
				</div>
			</section>
			</main>

<?php
get_footer();

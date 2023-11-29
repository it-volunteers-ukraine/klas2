<?php
/*
Template Name: projects
*/
get_header();
?>

<main>
  <section class="projects">
    <div class="container">
      <h2 class="projects__title"><?php the_field('projects__title'); ?></h2>

      <div class="tabs-container">
        <div class="tab tab-active" data-target="tab1">Всі проєкти</div>
        <div class="tab" data-target="tab2">Поточні</div>
        <div class="tab" data-target="tab3">Реалізовані</div>
      </div>

      <div id="tab1" class="tab-content tab-active">
        <?php
        // Виведення постів категорії "Поточні"
        $current_projects = new WP_Query(array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'project_categories',
              'field' => 'slug',
              'terms' => 'поточні',
            ),
          ),
        ));

        while ($current_projects->have_posts()) :
          $current_projects->the_post();
        ?>
          <article>
            <h3 class="project__title"><?php the_title(); ?></h3>
            <div class="project__wrap">
              <div class="project__flex">
                <?php
                $image = get_field('project__img');
                if ($image) {
                  echo '<img class="project__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                }
                ?>
              </div>
              <div class="project__flex">
                <div class="text__wrap">
                  <p class="text__btn"><?php the_field('project__category'); ?></p>
                  <p><?php the_field('project__period'); ?></p>
                </div>
                <div class="description__wrap">
                  <p class="project__description"><?php the_field('project__description'); ?></p>
                  <p class="project__budget"><?php the_field('project__budget'); ?></p>
                </div>
              </div>
            </div>
          </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        <?php
        // Виведення постів категорії "Реалізовані"
        $completed_projects = new WP_Query(array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'project_categories',
              'field' => 'slug',
              'terms' => 'реалізовані',
            ),
          ),
        ));

        while ($completed_projects->have_posts()) :
          $completed_projects->the_post();
        ?>
          <article>
            <h3 class="project__title"><?php the_title(); ?></h3>
            <div class="project__wrap">
              <div class="project__flex">
                <?php
                $image = get_field('project__img');
                if ($image) {
                  echo '<img class="project__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                }
                ?>
              </div>
              <div class="project__flex">
                <div class="text__wrap">
                  <p class="text__btn"><?php the_field('project__category'); ?></p>
                  <p><?php the_field('project__period'); ?></p>
                </div>
                <div class="description__wrap">
                  <p class="project__description"><?php the_field('project__description'); ?></p>
                  <p class="project__budget"><?php the_field('project__budget'); ?></p>
                </div>
              </div>
            </div>
          </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <div id="tab2" class="tab-content">
        <?php
        // Виведення постів категорії "Поточні"
        $current_projects = new WP_Query(array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'project_categories',
              'field' => 'slug',
              'terms' => 'поточні',
            ),
          ),
        ));

        while ($current_projects->have_posts()) :
          $current_projects->the_post();
        ?>
          <article>
            <h3 class="project__title"><?php the_title(); ?></h3>
            <div class="project__wrap">
              <div class="project__flex">
                <?php
                $image = get_field('project__img');
                if ($image) {
                  echo '<img class="project__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                }
                ?>
              </div>
              <div class="project__flex">
                <div class="text__wrap">
                  <p class="text__btn"><?php the_field('project__category'); ?></p>
                  <p><?php the_field('project__period'); ?></p>
                </div>
                <div class="description__wrap">
                  <p class="project__description"><?php the_field('project__description'); ?></p>
                  <p class="project__budget"><?php the_field('project__budget'); ?></p>
                </div>
              </div>
            </div>
          </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <div id="tab3" class="tab-content">
        <?php
        // Виведення постів категорії "Реалізовані"
        $completed_projects = new WP_Query(array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'project_categories',
              'field' => 'slug',
              'terms' => 'реалізовані',
            ),
          ),
        ));

        while ($completed_projects->have_posts()) :
          $completed_projects->the_post();
        ?>
          <article>
            <h3 class="project__title"><?php the_title(); ?></h3>
            <div class="project__wrap">
              <div class="project__flex">
                <?php
                $image = get_field('project__img');
                if ($image) {
                  echo '<img class="project__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                }
                ?>
              </div>
              <div class="project__flex">
                <div class="text__wrap">
                  <p class="text__btn"><?php the_field('project__category'); ?></p>
                  <p><?php the_field('project__period'); ?></p>
                </div>
                <div class="description__wrap">
                  <p class="project__description"><?php the_field('project__description'); ?></p>
                  <p class="project__budget"><?php the_field('project__budget'); ?></p>
                </div>
              </div>
            </div>
          </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <?php get_template_part('template-parts/join-us'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
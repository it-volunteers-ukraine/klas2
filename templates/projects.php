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
            <h3><?php the_field('project__title'); ?></h3>
            <?php
            $image = get_field('project__img');
            if ($image) {
              echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
            }
            ?>
            <p><?php the_field('project__category'); ?></p>
            <p><?php the_field('project__period'); ?></p>
            <p><?php the_field('project__description'); ?></p>
            <p><?php the_field('project__budget'); ?></p>
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
            <h3><?php the_field('project__title'); ?></h3>
            <?php
            $image = get_field('project__img');
            if ($image) {
              echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
            }
            ?>
            <p><?php the_field('project__category'); ?></p>
            <p><?php the_field('project__period'); ?></p>
            <p><?php the_field('project__description'); ?></p>
            <p><?php the_field('project__budget'); ?></p>
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
            <h3><?php the_field('project__title'); ?></h3>
            <?php
            $image = get_field('project__img');
            if ($image) {
              echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
            }
            ?>
            <p><?php the_field('project__category'); ?></p>
            <p><?php the_field('project__period'); ?></p>
            <p><?php the_field('project__description'); ?></p>
            <p><?php the_field('project__budget'); ?></p>
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
            <h3><?php the_field('project__title'); ?></h3>
            <?php
            $image = get_field('project__img');
            if ($image) {
              echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
            }
            ?>
            <p><?php the_field('project__category'); ?></p>
            <p><?php the_field('project__period'); ?></p>
            <p><?php the_field('project__description'); ?></p>
            <p><?php the_field('project__budget'); ?></p>
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
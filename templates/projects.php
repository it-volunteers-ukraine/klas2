<?php
/*
Template Name: projects
*/
get_header();
?>

<main>
  <section class="projects">
    <div class="container">
      <?php
      $projects_title = get_field('projects__title');
      if ($projects_title) :
      ?>
        <h2 class="projects__title"><?php echo esc_html($projects_title); ?></h2>
      <?php endif; ?>

      <div class="tabs-container">
        <?php
        $active_tab = isset($_GET['tab']) ? sanitize_key($_GET['tab']) : 'all';

        $tabs = array(
          'all' => 'Всі проєкти',
          'current' => 'Поточні',
          'completed' => 'Реалізовані',
        );

        foreach ($tabs as $tab_slug => $tab_label) {
          $tab_classes = ($active_tab === $tab_slug) ? 'tab tab-active' : 'tab';
          $tab_link = ($tab_slug === 'all') ? get_permalink() : add_query_arg('tab', $tab_slug, get_permalink());
        ?>
          <div class="<?php echo esc_attr($tab_classes); ?>" data-target="<?php echo esc_attr('tab' . ucfirst($tab_slug)); ?>"><a href="<?php echo esc_url($tab_link); ?>"><?php echo esc_html($tab_label); ?></a></div>
        <?php
        }
        ?>
      </div>

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'projects',
        'paged' => $paged,
        'posts_per_page' => 4,
      );

      if ($active_tab === 'current') {
        $args['tax_query'] = array(
          array(
            'taxonomy' => 'project_categories',
            'field' => 'slug',
            'terms' => 'поточні',
          ),
        );
      } elseif ($active_tab === 'completed') {
        $args['tax_query'] = array(
          array(
            'taxonomy' => 'project_categories',
            'field' => 'slug',
            'terms' => 'реалізовані',
          ),
        );
      }

      $projects_query = new WP_Query($args);

      while ($projects_query->have_posts()) :
        $projects_query->the_post();
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

      // Додаємо пагінацію
      echo '<div class="pagination">';
      echo paginate_links(array(
        'total' => $projects_query->max_num_pages,
      ));
      echo '</div>';

      wp_reset_postdata();
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
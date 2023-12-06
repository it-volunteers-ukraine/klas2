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
          <a class="<?php echo esc_attr($tab_classes); ?>" href="<?php echo esc_url($tab_link); ?>"><?php echo esc_html($tab_label); ?>
          </a>
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
              <?php get_template_part('template-parts/check_thumbnail'); ?>
            </div>
            <div class="project__flex">
              <div class="text__wrap">

                <?php
                $categories = get_the_terms($post, 'project_categories');

                if (count($categories) > 0) : ?>
                  <p class="text__btn">
                    <?php
                    $catNames = array_column($categories, 'name');
                    // виводимо через кому
                    echo implode(', ', $catNames)
                    ?>
                  </p>
                <?php endif; ?>

                <p><?php the_field('project__period'); ?></p>
              </div>
              <div class="description__wrap">
                <p class="project__description"><?php the_field('project__description'); ?></p>
                <?php
                $project_budget = get_field('project__budget');
                if ($project_budget) {
                  echo '<p class="project__budget">' . esc_html($project_budget) . '</p>';
                }
                ?>
              </div>
            </div>
          </div>
        </article>
      <?php
      endwhile;

      // Додаємо пагінацію
      $pagination_args = array(
        'total' => $projects_query->max_num_pages,
        'format' => 'page/%#%',
        'prev_text' => ('&lt;'),
        'next_text' => ('&gt;'),
      );

      $pagination_html = paginate_links($pagination_args);

      if ($pagination_html) {
        echo '<div class="pagination">';
        echo $pagination_html;
        echo '</div>';
      }

      wp_reset_postdata();
      ?>
    </div>
  </section>
  <?php get_template_part('template-parts/join-us'); ?>
</main>

<?php get_footer(); ?>
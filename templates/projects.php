<?php
/*
Template Name: projects
*/
get_header();
?>

<main>
  <section class="projects">
    <div class="container">
      <h2 class="projects__title"><?php the_title(); ?></h2>

      <div class="tabs-container">
        <?php
        $active_tab = isset($_GET['tab']) ? sanitize_key($_GET['tab']) : 'all';

        // Отримуємо всі терміни з таксономії project_categories
        $taxonomy_terms = get_terms(array(
          'taxonomy' => 'project_categories',
          'hide_empty' => false, // Показуємо навіть ті, які не мають записів
        ));

        // Виводимо вкладку для "Всі проєкти"
        $all_tab_classes = ($active_tab === 'all') ? 'tab tab-active' : 'tab';
        $all_tab_link = get_permalink();
        ?>
        <a class="<?php echo esc_attr($all_tab_classes); ?>" href="<?php echo esc_url($all_tab_link); ?>">Всі проєкти</a>

        <?php
        foreach ($taxonomy_terms as $term) {
          $tab_slug = $term->slug;
          $tab_label = $term->name;
          $tab_classes = ($active_tab === $tab_slug) ? 'tab tab-active' : 'tab';
          $tab_link = add_query_arg('tab', $tab_slug, get_permalink());
        ?>
          <a class="<?php echo esc_attr($tab_classes); ?>" href="<?php echo esc_url($tab_link); ?>"><?php echo esc_html($tab_label); ?></a>
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

      if ($active_tab !== 'all') {
        $args['tax_query'] = array(
          array(
            'taxonomy' => 'project_categories',
            'field' => 'slug',
            'terms' => $active_tab,
          ),
        );
      }

      $projects_query = new WP_Query($args);

      if ($projects_query->have_posts()) :
        while ($projects_query->have_posts()) :
          $projects_query->the_post();
      ?>
          <article>
            <h3 class="project__title"><?php the_title(); ?></h3>
            <div class="project__wrap">
              <div class="project__flex project__img">
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

                  <?php
                  $project_budget = get_field('project__budget');
                  $margin_bottom = $project_budget ? '60px' : '30px';
                  ?>

                  <p class="project__description" style="margin-bottom: <?php echo esc_attr($margin_bottom); ?>">
                    <?php the_field('project__description'); ?>

                    <?php if ($project_budget) : ?>
                  <p class="project__budget"><?php echo esc_html($project_budget); ?></p>
                <?php endif; ?>
                </p>

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
      endif;

      wp_reset_postdata();
      ?>
      <!-- Якщо немає постів для відображення -->
      <?php
      if (!$projects_query->have_posts()) {
        echo '<p class="project__title">Немає проєктів для відображення.</p>';
      }
      ?>
    </div>
  </section>
  <?php get_template_part('template-parts/join-us'); ?>
</main>

<?php get_footer(); ?>
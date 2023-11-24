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
        <p>Зміст для вкладки Всі проєкти.</p>
      </div>

      <div id="tab2" class="tab-content">
        <p>Зміст для вкладки Поточні.</p>
      </div>

      <div id="tab3" class="tab-content">
        <p>Зміст для вкладки Реалізовані.</p>
      </div>

      <?php get_template_part('template-parts/join-us'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
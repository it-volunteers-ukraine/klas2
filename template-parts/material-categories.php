<?php
        $args = array(
                    'type' => 'materials',
                    'taxonomy' => 'material-category',
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => 1
                );

        $cats = get_categories($args);

        if($cats) : ?>
        <ul class='library-cats__list'>
          <?php $class = ( $post->ID == 55 ) ? 'active' : ''; ?>
           <li class="library-cats__item <?php echo $class; ?>" >
              <a href="<?php echo get_permalink(55); ?>">
                      Всі матеріали
                  </a>
            </li>
          <?php foreach($cats as $cat) {
            $curTerm = $wp_query->queried_object;
            global $termCount;
            $termCount = $curTerm->count;

            $class = ( $cat->name == $curTerm->name ) ? 'active' : '';
            $termId = $cat->term_id;
            ?>
            <li class="library-cats__item <?php echo $class; ?>" >
              <a href="<?php echo get_term_link((int) $termId) ?>">
                      <?php echo $cat->name; ?>
                  </a>
            </li>
                  
            <?php } ?>
        </ul>
  <?php endif; ?>

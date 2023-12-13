<?php if (has_post_thumbnail()) {
  the_post_thumbnail();
} else { ?>
  <img style="border: 1px solid #cfcfcf" src="<?php the_field('image-placeholder', "options") ?>" alt="логотип компанії">
<?php } ?>
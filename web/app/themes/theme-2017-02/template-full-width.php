<?php
/**
 * Template Name: Full Width
 */
?>

<?php

while (have_posts()) {

  the_post();

  echo Folbert\Templating::get_template_part('templates/content', 'page', [
    'fullwidth_template' => true
  ]);

}
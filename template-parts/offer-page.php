<?php
/**
 * Template Name: Oferta
 */
get_header();
?>
  <article class="post">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="page">
        <h1><?php the_title(); ?></h1>
        <p>
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
          main image main image main image main image main image main image main image
        </p>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    </div>
  </article>
<?php

get_footer();

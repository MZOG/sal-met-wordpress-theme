<?php
get_header();
?>
  <article class="post post__portfolio">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post__content">
        <h1><?php the_title(); ?></h1>
        <p>main image</p>


        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <aside class="post__sidebar">
      <?php dynamic_sidebar('portfolio-sidebar'); ?>
    </aside>
    </div>
  </article>
<?php

get_footer();

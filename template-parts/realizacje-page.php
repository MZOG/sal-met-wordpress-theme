<?php
/**
 * Template Name: Realizacje
 */
$args = array(
  'category_name' => 'Realizacje',
  'order' => 'ASC',
  'posts_per_page' => -1,
);
$your_query = new WP_Query($args);

get_header();
?>


<article class="page portfolio__page">
  <div class="container">
      <h1>Realizacje</h1>
      <div class="portfolio__page-items">
        <?php
            while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
            <article class="portfolio__page-items-item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'full' ); ?>
              </a>
            </article>
          <?php endwhile; ?>
      </div>
  </div>
</article>

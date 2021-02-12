<?php
/**
 * Template Name: Blog
 */
$args = array(
  'category_name' => 'Blog',
  // 'posts_per_page' => -1,
  'order' => 'ASC',
);
$your_query = new WP_Query($args);

get_header();
?>


<article class="page page__offer">
  <div class="container">
      <h1>Blog</h1>
      <div class="page__offer-items">
        <?php
            while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
            <article class="page__offer-items-item">
              <?php the_post_thumbnail( 'full' ); ?>
              <div class="content">
                <h2>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <div class="cta">
                  <a class="btn" href="<?php the_permalink(); ?>">
                    Sprawdź więcej
                  </a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
      </div>
  </div>
</article>

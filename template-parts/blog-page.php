<?php
/**
 * Template Name: Blog
 */
$args = array(
  'category_name' => 'Blog',
  'order' => 'ASC',
);
$your_query = new WP_Query($args);

get_header();
?>


<article class="page page__blog">
  <div class="container">
      <h1>Blog</h1>
      <div class="page__blog-items">
        <?php
            while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
            <article class="page__blog-items-item">
              <?php the_post_thumbnail( 'full' ); ?>
              <div class="content">
                <h2>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <div class="cta">
                  <a class="btn" href="<?php the_permalink(); ?>">
                    Czytaj dalej
                  </a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
      </div>
  </div>
</article>

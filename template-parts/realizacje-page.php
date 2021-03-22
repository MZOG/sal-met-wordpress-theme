<?php
/**
 * Template Name: Realizacje
 */
$args = array(
  'cat' => 3,
  'order' => 'ASC',
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
                <?php echo the_post_thumbnail(); ?>
              </a>
            </article>
          <?php endwhile; ?>
      </div>

      <h2>Instagram</h2>
      <?php echo do_shortcode( '[instagram-feed]' ); ?>
  </div>
</article>

<?php
get_footer();
?>

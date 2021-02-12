<?php
/**
 * Template Name: Oferta
 */
get_header(); ?>
<?php
	$args = array(
		'post_type' => 'page',
		'post__in' => array(127,132,18,20,37,27,22,29,25,31,35,33),
    'orderby' => 'post__in',
    'posts_per_page' => 12,
  );
  query_posts($args);

  global $post;
?>
	<section class="page page__offer">
		<div class="container">
      <h1>Oferta</h1>
        <div class="page__offer-items">
        <?php
          while ( have_posts() ) : the_post(); ?>
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
	</section>

<?php
get_sidebar();
get_footer();

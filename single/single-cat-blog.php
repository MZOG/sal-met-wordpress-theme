<?php
get_header();
?>
  <article class="post post__portfolio">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post__content">
        <h1><?php the_title(); ?></h1>
        <?php if (get_field('nazwa_klienta')) : ?>
        <div class="post__portfolio-info">
          <div class="post__portfolio-info-item">
            <p>Klient</p>
            <p><strong><?php the_field('nazwa_klienta'); ?></strong></p>
          </div>
          <?php if (get_field('usluga')) : ?>
          <div class="post__portfolio-info-item">
            <p>Usługa</p>
            <p>
              <a href="<?php the_field('usluga'); ?>">
              <?php the_field('etykieta_uslugi'); ?>
              </a>
            </p>
          </div>
          <?php endif; ?>
          <?php if (get_field('realizacja_rok')) : ?>
          <div class="post__portfolio-info-item">
            <p>Realizacja</p>
            <p><strong><?php the_field('realizacja_rok'); ?></strong></p>
          </div>
          <?php endif; ?>
        </div>
        <?php endif; ?>


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

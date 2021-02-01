<?php
/**
* Template Name: S.A.L - MET Home
*/

get_header();

$blog = array( 'posts_per_page' => 3, 'cat' => '1', );
$blog_query = new WP_Query( $blog );

$portfolio = array( 'posts_per_page' => 8, 'cat' => '3', );
$portfolio_query = new WP_Query( $portfolio );
?>

<section class="hero">
  <div class="container">
    <h1>Precyzyjne cięcie i gięcie  blach. Zawsze na czas.</h1>
    <p>Oferujemy wysokiej jakości cięcie laserem blach, rur oraz profili. Wyginamy blachy jak nikt inny, zawsze precyzyjnie.</p>
    <div class="hero-cta">
      <a class="btn" href="#">Sprawdź ofertę</a>
      <a class="btn btn-light" href="#">Zobacz realizacje</a>
    </div>

    <div class="hero-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="S.A.L - MET - Cięcie laserem blach" />
    </div>
  </div>
</section>

<section class="why-us">
  <div class="container">
    <h2>Co nas wyróżnia</h2>
    <p class="lead"><?php the_field('co-nas-wyroznia-tekst'); ?></p>

    <div class="why-us__items">
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Najwyższa jakość" />
          </div>
          <div class="title">
            <h3>Najwyższa jakość</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Konkurencyjne ceny" />
          </div>
          <div class="title">
            <h3>Konkurencyjne ceny</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Szybka realizacja" />
          </div>
          <div class="title">
            <h3>Szybka realizacja</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Darmowa wycena" />
          </div>
          <div class="title">
            <h3>Darmowa wycena</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Doświadczenie" />
          </div>
          <div class="title">
            <h3>Doświadczenie</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
      <div class="why-us__item">
        <div class="why-us__item-top">
          <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cnw.jpg" alt="S.A.L - MET - Obsługa" />
          </div>
          <div class="title">
            <h3>Obsługa</h3>
          </div>
        </div>
        <div class="why-us__item-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Magnam placeat illum in, inventore l aborum atque. Alias mollitia est, nobis sapiente iure obcaecati</p>
        </div>
      </div>
    </div>

    <div class="why-us__more">
      <a href="/o-nas" class="btn btn-light">Więcej o nas</a>
    </div>
  </div>
</section>

<section class="offer">
  <div class="container">
    <h2>Usługi S.A.L - MET</h2>
    <p class="lead"><?php the_field('uslugi-lead'); ?></p>

    <div class="offer__items">
      <div class="offer__item">
        <div class="offer__item-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/offer.jpg" alt="S.A.L - MET - Cięcie laserem blach" />
        </div>
        <div class="offer__item-content">
          <h3>Cięcie laserem blach</h3>
          <p>
            acf
          </p>

          <div class="offer__item-cta">
            <a href="#" class="btn btn-light">Więcej informacji</a>
          </div>
        </div>
      </div>
      <div class="offer__item">
        <div class="offer__item-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/offer.jpg" alt="S.A.L - MET - Cięcie laserem blach" />
        </div>
        <div class="offer__item-content">
          <h3>Cięcie laserem blach</h3>
          <p>
            acf
          </p>

          <div class="offer__item-cta">
            <a href="#" class="btn btn-light">Więcej informacji</a>
          </div>
        </div>
      </div>
      <div class="offer__item">
        <div class="offer__item-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/offer.jpg" alt="S.A.L - MET - Cięcie laserem blach" />
        </div>
        <div class="offer__item-content">
          <h3>Cięcie laserem blach</h3>
          <p>
            acf
          </p>

          <div class="offer__item-cta">
            <a href="#" class="btn btn-light">Więcej informacji</a>
          </div>
        </div>
      </div>
      <div class="offer__item">
        <div class="offer__item-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/offer.jpg" alt="S.A.L - MET - Cięcie laserem blach" />
        </div>
        <div class="offer__item-content">
          <h3>Cięcie laserem blach</h3>
          <p>
            acf
          </p>

          <div class="offer__item-cta">
            <a href="#" class="btn btn-light">Więcej informacji</a>
          </div>
        </div>
      </div>
    </div>

    <div class="offer__more">
    <a href="#" class="btn">Zobacz wszystkie usługi</a>
    </div>
  </div>
</section>

<section class="portfolio">
  <div class="container">
    <h2>Realizacje</h2>
    <p class="lead"><?php the_field('realizacje-lead'); ?></p>

    <div class="portfolio__items">
      <?php
        if ( $portfolio_query->have_posts() ) :
          while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
              <article class="portfolio__item">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'full' ); ?>
                </a>
              </article>
          <?php endwhile;
        else:
        // If no posts match this query, output this text.
          _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;

        wp_reset_postdata();
      ?>
    </div>

    <div class="portfolio__more">
      <a href="#" class="btn">Więcej realizacji</a>
    </div>
  </div>
</section>

<section class="question">
  <div class="container">
    <div class="question__content">
      <h2>Masz pytanie?</h2>
      <p class="lead"><?php the_field('pytanie-lead'); ?></p>
      <div class="question__content-items">
        <div class="question__content-item">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
          <a href="tel:+48739907919">+48 739 907 919</a>
        </div>
        <div class="question__content-item">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
          <a href="mailto:kontakt@sal-met.com">kontakt@sal-met.com</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog">
  <div class="container">
    <h2>Blog</h2>
    <p class="lead"><?php the_field('blog-lead'); ?></p>

    <div class="blog__items">
    <?php
      if ( $blog_query->have_posts() ) :
        while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
            <article class="blog__item">
              <?php the_post_thumbnail( 'full' ); ?>
              <div class="blog__item-content">
                <h3>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <span class="blog__item-content-date"><?php echo get_the_date(); ?></span>
                <p class="blog__item-content-excerpt"><?php echo get_the_excerpt(); ?></p>
                <div class="blog__item-content-cta">
                  <a href="<?php the_permalink(); ?>" class="btn">Czytaj więcej</a>
                </div>
              </div>
            </article>
        <?php endwhile;
      else:
      // If no posts match this query, output this text.
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif;

      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
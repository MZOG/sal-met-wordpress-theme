<?php
/**
 * Template part for displaying posts
 *
 * Blog Page posts display
 */

?>

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

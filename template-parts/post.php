<?php
/**
 * Template part for displaying posts
 *
 */

?>

<article class="blog__post">
	<div class="blog__post-header">
		<?php sal_met_post_thumbnail(); ?>
	</div>

	<div class="blog__post-content">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sal-met' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sal-met' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article>

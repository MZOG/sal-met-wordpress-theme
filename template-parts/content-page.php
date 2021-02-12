<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package S.A.L_-_MET
 */

?>

<article <?php post_class(); ?>>
	<div class="container page page__default">
		<h1><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content();?>
		</div>
	</div>
</article>

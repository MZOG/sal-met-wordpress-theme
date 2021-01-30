<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<main>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sal-met' ); ?></a>

	<header class="header">

		<div class="header__top">
			<div class="container">
				<p><a href="mailto:kontakt@sal-met.com">kontakt@sal-met.com</a></p>
				<p><a href="tel:+48739907919">739 907 919</a></p>
				<p><a href="#">fb</a></p>
				<p><a href="#">insta</a></p>
			</div>
		</div>

		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sal-met-logo.svg" alt="S.A.L - MET" />
				</a>
			</div>

			<nav class="navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container'      => 'false'
					)
				);
				?>
			</nav>
		</div>
	</header><!-- #masthead -->

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<!-- Header -->
		<header class="site-header">
	<?php
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<?php
	}
	?>
	<nav class="site-nav">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
			)
		);
		?>
	</nav>
</header>

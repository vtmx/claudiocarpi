<header class="header animated fade-in" role="banner">
	<h1 class="logo">
		<a href="<?php echo esc_url( home_url( ) ); ?>/works">
			<?php get_template_part('logo'); ?>
		</a>
	</h1>

	<nav class="nav animated fade-in" role="navigation">
		<?php
			wp_nav_menu( array(
				'menu'           => 'Main Menu',
				'theme_location' => 'menu_main',
				'container'      => ''
			));
		?>
		<a class="toggle" href="#"><span><i></i></span> Menu</a>
	</nav>
</header>

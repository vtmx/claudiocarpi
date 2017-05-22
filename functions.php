<?php
	// Include favicon admin
	// -----------------------------------------------------------------------------
	function favicon(){
		echo '<link rel="shortcut icon" href=" ', bloginfo( 'template_url' ), '/dist/img/favicons/favicon.ico">';
	}
	add_action('admin_head','favicon');

	// Register nav menu
	// -----------------------------------------------------------------------------
	register_nav_menu( 'menu_main', 'Menu' );

	// Image sizes
	// -----------------------------------------------------------------------------

	// Medium size = Thumbnail
	// Gallery ACF get medium size in Dashboard

	// Page works
	add_image_size( 'page-works-vertical', 380, 520, true );
	add_image_size( 'page-works-horizontal', 770, 520, true );

	// Single works
	add_image_size( 'single-works-vertical', 560, 9999, false  );
	add_image_size( 'single-works-horizontal', 1140, 9999, false  );
?>

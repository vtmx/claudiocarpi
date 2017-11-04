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

	// Image sizes ACF get medium size in Dashboard
	// -----------------------------------------------------------------------------

	// Work Gallery
	// add_image_size( 'work-gallery-1', 370, 504, true );
	// add_image_size( 'work-gallery-2', 760, 504, true );
	// add_image_size( 'work-gallery-3', 1150, 504, true );
	//
	// // Work Single
	// add_image_size( 'work-single-1', 370, 9999, false );
	// add_image_size( 'work-single-2', 565, 9999, false );
	// add_image_size( 'work-single-3', 760, 9999, false );
	// add_image_size( 'work-single-4', 1150, 9999, false );
?>

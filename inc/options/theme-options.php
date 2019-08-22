<?php
	function rezoto_kirki_configuration() {
	    return array( 'url_path' => get_stylesheet_directory_uri() . '/inc/kirki/' );
	}
	// add_filter( 'kirki/config', 'rezoto_kirki_configuration' );

	require get_template_directory() . '/inc/options/helper.php'; // Helper File	

	require get_template_directory() . '/inc/options/general-options.php'; // General Options
	require get_template_directory() . '/inc/options/header-options.php'; // Header Options
	require get_template_directory() . '/inc/options/slider-options.php'; // Slider Options
	require get_template_directory() . '/inc/options/footer-options.php'; // Footer Options
	require get_template_directory() . '/inc/options/blog-options.php'; // Blog Options
	require get_template_directory() . '/inc/options/room-options.php'; // Room Options
	require get_template_directory() . '/inc/options/typography-options.php'; // Typography Options
<?php
	//theme script files
	require_once(get_theme_file_path('inc/suite-scripts.php'));
	//after_setup_theme
	require_once(get_theme_file_path('inc/suite-after-theme-setup.php'));
	//theme init hook
	require_once(get_theme_file_path( 'inc/suite-init.php' ));
	//theme widget_init hook
	require_once(get_theme_file_path( 'inc/suite-widget.php' ));
	//theme widget_init hook
	require_once(get_theme_file_path( 'inc/tgm.php' ));
	//theme customizer hook
	require_once(get_theme_file_path( 'inc/suite-customizer.php' ));
	//theme inline css file
	require_once(get_theme_file_path( 'inc/suite-inline-css.php' ));

	//Menu Walker
	require_once(get_theme_file_path( 'lib/class-wp-bootstrap-navwalker.php' ));

	if ( ! file_exists( get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php')) {
		// file does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// file exists... require it.
		require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
	}



//excerpt length
	function wpdocs_custom_excerpt_length( $length ) {
	    return 18;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	function wpdocs_excerpt_more( $more ) {
	    return '';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




//Visual Composer Elements
require_once(get_theme_file_path( 'template-part/common/suite-page-header.php' ));
require_once(get_theme_file_path( 'template-part/homeslider.php' ));
require_once(get_theme_file_path( 'template-part/suite-about.php' ));
require_once(get_theme_file_path( 'template-part/cta-countdown.php' ));
require_once(get_theme_file_path( 'template-part/suite-event.php' ));
require_once(get_theme_file_path( 'template-part/suite-gallery.php' ));
require_once(get_theme_file_path( 'template-part/suite-hotel-feature.php' ));
require_once(get_theme_file_path( 'template-part/suite-our-room.php' ));
require_once(get_theme_file_path( 'template-part/suite-testimonial.php' ));
require_once(get_theme_file_path( 'inc/suite-vc.php' ));


	//theme customizer js file
	if(! function_exists('suite_customizer_js')):
		function suite_customizer_js(){
			wp_enqueue_script( 'suite-popper', get_template_directory_uri() . '/assets/js/suite-customizer.js', array( 'jquery', 'customize-preview' ));
		}
		add_action('customize_preview_init', 'suite_customizer_js');
	endif;
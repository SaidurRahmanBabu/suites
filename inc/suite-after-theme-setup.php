<?php
	if(! function_exists('suites_theme_setup')):
		function suites_theme_setup(){
			//load text domain
			load_theme_textdomain( 'suites', get_template_directory() . '/languages' );
			//theme supports
			require_once('suites-theme-supports.php');
		}
		add_action('after_setup_theme', 'suites_theme_setup');
	endif;
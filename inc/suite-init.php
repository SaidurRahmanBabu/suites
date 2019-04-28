<?php
	if( ! function_exists('suites_init')):

		function suites_init(){
			//Nav Menu
			register_nav_menus(array(
				'main-menu' 		=> __('Main Menu', 'suites'),
				'footer-menu1'		=> __('Footer Menu 1', 'suites'),
				'footer-menu2'		=> __('Footer Menu 2', 'suites')
			));

			function add_menuclass($ulclass) {
		   return preg_replace('/<ul /', '<ul class="list-unstyled"', $ulclass);
			}
		add_filter('wp_nav_menu','add_menuclass');
		
		}
		add_action('init', 'suites_init');

	endif;
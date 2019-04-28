<?php
	if(! function_exists('suite_widget')):

		function suite_widget(){
			
			register_sidebar(array(
				'id'						=> 'footer_about',
				'name'					=> __('Footer About', 'suites'),
				'description'		=> __('Footer Text With Button', 'suites'),
				'before_title'	=> '<h3 class="footer-heading mb-4 text-white">',
				'after_title' 	=> '</h3>',
				'before_widget' => '',
				'after_widget'	=> ''
			));
			
			register_sidebar(array(
				'id'						=> 'footer_menu_one',
				'name'					=> __('Footer Menu 1', 'suites'),
				'description'		=> __('Footer First Menu', 'suites'),
				'before_title'	=> '<h3 class="footer-heading mb-4 text-white">',
				'after_title' 	=> '</h3>',
				'before_widget' => '',
				'after_widget'	=> ''
			));



			//Custom widget
			require_once('suite-custom-wiget.php');

		}
		add_action('widgets_init', 'suite_widget');

	endif;
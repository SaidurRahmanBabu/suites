<?php
	if(! function_exists('suite_customizer')):
		function suite_customizer($suite_customize){

			//Menu colors
			$suite_customize->add_section('general_option', array(
				'title'			=> __('Theme Options', 'suites'), //customizer title
				'priority'	=> 20 //serialized
			));

			//footer licence
			$suite_customize->add_setting('footer_licence', array(
				'default'			=> '',
				'transport' 	=> 'postMessage'
			));

			$suite_customize->add_control(
				'footer_licence', array(
					'section'	=> 'general_option',
					'label'		=> __('Footer Licence Text', 'suites'),
					'type'		=> 'textarea'
				)
			);

		}
		add_action('customize_register', 'suite_customizer');
	endif;
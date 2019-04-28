<?php
	function suites_vc_element(){

		//Section Home page slider
		vc_map(array(
			'name' 										=> __('Slider', 'suites'),
			'description' 						=> __('Home Page Slider', 'suites'),
			'base' 										=> 'homeslider',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name'  => 'homepage_slider_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Slider Contents', 'suites'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'suites'),
							'description' => __('Slider Title Text', 'suites')
						),
						
						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Sub Title', 'suites'),
							'description' => __('Slider Sub Title Text', 'suites')
						),
						
						array(
							'param_name' 	=> 'image',
							'type' 				=> 'attach_image',
							'heading' 		=> __('Image', 'suites'),
							'description' => __('Slider Image', 'suites')
						),

					)//group params
				)
			)
		));
		//end of Home page slider

		//Section Hotel Feature
		vc_map(array(
			'name' 										=> __('Features', 'suites'),
			'description' 						=> __('Hotel Features', 'suites'),
			'base' 										=> 'hotel_feature',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'section_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Section Title', 'suites')
				),

				array(
					'param_name'  => 'feature_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Hotel Feature Contents', 'suites'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Feature Name', 'suites'),
							'description' => __('Hotel Feature title name', 'suites')
						),
						
						array(
							'param_name' 	=> 'icon',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Feature Icon', 'suites'),
							'description' => __('Hotel Feature Icon', 'suites')
						),

					)//group params
				)
			)
		));
		//end of hotel feature

		//Section About
		vc_map(array(
			'name' 										=> __('About', 'suites'),
			'description' 						=> __('About the website', 'suites'),
			'base' 										=> 'about',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('About Title', 'suites')
				),

				array(
					'param_name' 	=> 'video',
					'type' 				=> 'vc_link',
					'heading' 		=> __('Video Link', 'suites'),
					'description' => __('Video Url Link', 'suites')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'suites'),
					'description' => __('About Image', 'suites')
				),

				array(
					'param_name' 	=> 'vid_image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'suites'),
					'description' => __('Image over video as video thumbnail', 'suites')
				),

				array(
					'param_name' 	=> 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button', 'suites'),
					'description' => __('Button Text', 'suites')
				),

				array(
					'param_name' 	=> 'content',
					'type' 				=> 'textarea_html',
					'heading' 		=> __('Text', 'suites'),
					'description' => __('About Text', 'suites')
				),

			)
		));
		//end of about section

		//Section CTA Countdown
		vc_map(array(
			'name' 										=> __('CTA Countdown', 'suites'),
			'description' 						=> __('Cta countdown timer', 'suites'),
			'base' 										=> 'cta',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Gallery Title', 'suites')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'suites'),
					'description' => __('Upload Image', 'suites')
				),

				array(
					'param_name' 	=> 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button Text', 'suites'),
					'description' => __('Button Text', 'suites')
				),

				array(
					'param_name' 	=> 'countdown_caption',
					'type' 				=> 'textfield',
					'heading' 		=> __('Caption', 'suites'),
					'description' => __('Caption For Countdown Timer', 'suites')
				),

				array(
					'param_name' 	=> 'year',
					'type' 				=> 'textfield',
					'heading' 		=> __('Year', 'suites'),
					'description' => __('Year In Number', 'suites'),
					'value'				=> '2019'
				),

				array(
					'param_name' 	=> 'month',
					'type' 				=> 'textfield',
					'heading' 		=> __('Month', 'suites'),
					'description' => __('Month In Number', 'suites'),
					'value'				=> '9'
				),

				array(
					'param_name' 	=> 'day',
					'type' 				=> 'textfield',
					'heading' 		=> __('Day', 'suites'),
					'description' => __('Day In Number', 'suites'),
					'value'				=> '10'
				),

			)
		));
		//end of cta countdown section

		//Section Gallery
		vc_map(array(
			'name' 										=> __('Gallery', 'suites'),
			'description' 						=> __('Image Gallery', 'suites'),
			'base' 										=> 'gallery',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Gallery Title', 'suites')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_images',
					'heading' 		=> __('Image Gallery', 'suites'),
					'description' => __('Upload Images', 'suites')
				),

			)
		));
		//end of gallery section

		//Section Header Image
		vc_map(array(
			'name' 										=> __('Header', 'suites'),
			'description' 						=> __('Page Header Image And Text', 'suites'),
			'base' 										=> 'header',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Page Header Title', 'suites')
				),

				array(
					'param_name' 	=> 'sub_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Sub Title', 'suites'),
					'description' => __('Page Header Sub Title', 'suites')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'suites'),
					'description' => __('Upload Image', 'suites')
				),

			)
		));
		//end of Header Image

		//Section Events
		vc_map(array(
			'name' 										=> __('Blog and Events', 'suites'),
			'description' 						=> __('From The Recent Blog Post', 'suites'),
			'base' 										=> 'events',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Section Title', 'suites')
				),

				array(
					'param_name' 	=> 'category_name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Category Name', 'suites'),
					'description' => __('Name separate with comma (,)', 'suites')
				),

				array(
					'param_name' 	=> 'post_limit',
					'type' 				=> 'textfield',
					'heading' 		=> __('Select Post Limit', 'suites'),
					'description' => __('Select Post Limit', 'suites')
				),

			)
		));
		//end of Event section

		//Section Room
		vc_map(array(
			'name' 										=> __('Our Rooms', 'suites'),
			'description' 						=> __('Category Name Has To Be "room"', 'suites'),
			'base' 										=> 'room',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Section Title', 'suites')
				),

				array(
					'param_name' 	=> 'category_name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Category Name', 'suites'),
					'description' => __('Name separate with comma (,)', 'suites')
				),

				array(
					'param_name' 	=> 'post_limit',
					'type' 				=> 'textfield',
					'heading' 		=> __('Select Post Limit', 'suites'),
					'description' => __('Select Post Limit', 'suites')
				),

			)
		));
		//end of room section

		//Section testimonial
		vc_map(array(
			'name' 										=> __('Testimonial', 'suites'),
			'description' 						=> __('From testimonial category', 'suites'),
			'base' 										=> 'testimonial',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Suites Content', 'suites'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'suites'),
					'description' => __('Section Title', 'suites')
				),

				array(
					'param_name' 	=> 'category_name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Category Name', 'suites'),
					'description' => __('Name separate with comma (,)', 'suites')
				),

				array(
					'param_name' 	=> 'post_limit',
					'type' 				=> 'textfield',
					'heading' 		=> __('Number', 'suites'),
					'description' => __('Post Number How many to show', 'suites')
				),

			)
		));
		//end of testimonial section

	} //end functsuites suites_vc_element
	add_action('vc_before_init', 'suites_vc_element');
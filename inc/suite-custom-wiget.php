<?php
	//Custom widgets
	class suite_custom_widget extends WP_Widget {
		//Create Custom Widget in widget dashboard
		public function __construct(){
			parent::__construct(
				'suite_custom_widget', //Calss name
				esc_html__('Suite Footer About', 'suites'), //widget Title
				array(
					//widget Description
					'description' => esc_html__('Footer About Text With Button', 'suites')
				)
			);
		}//end construct


		//Create input field in widget
		public function form($instance){ 

			$title 			 = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'suites');
			$description = $instance['description'];
			$button 		 = $instance['button'];
			$button_url	 = !empty($instance['button_url']) ? $instance['button_url'] : esc_html__('http://', 'suites');

			?>
			<!-- Title -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
					<?php echo esc_html__('Title', 'suites'); ?>
				</label>
				<input 
					type="text"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('title')); ?>"
					value="<?php echo esc_attr($title); ?>" 
					>
			</p>
			<!-- description -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('description')); ?>">
					<?php echo esc_html__('Description', 'suites'); ?>
				</label>

				<textarea 
					class="widefat"
					name="<?php echo stripslashes($this->get_field_name('description')); ?>"
					id="<?php echo esc_attr($this->get_field_id('description')); ?>"
					rows="5"
				>
				<?php echo $description; ?>
				</textarea>
				
			</p>
			<!-- button text -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('button')); ?>">
					<?php echo esc_html__('Button Text', 'suites'); ?>
				</label>
				<input 
					type="text"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('button')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('button')); ?>"
					value= "<?php echo esc_attr($button); ?>"
					>
			</p>
			<!-- button url -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('button_url')); ?>">
					<?php echo esc_html__('Button Url', 'suites'); ?>
				</label>
				<input 
					type="url"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('button_url')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('button_url')); ?>"
					value= "<?php echo esc_attr($button_url); ?>"
					>
			</p>

		<?php 
		}//end form function


		//This will show in front end of the website
		public function widget($args, $instance){

			$title 			 = $instance['title'];
			$description = $instance['description'];
			$button 		 = $instance['button'];
			$button_url	 = $instance['button_url'];

			echo $args['before_widget'];

			echo $args['before_title'];
			echo esc_html( $title );
			echo $args['after_title'];

			echo '<p>' . $description . '</p>';
			if($button):
				echo '<p><a href="'.$button_url.'" class="btn btn-primary pill text-white px-4">' . esc_html( $button ) . '</a></p>';
			endif;

			echo $args['after_widget'];

		}//end widget function


		//update funciton
		public function update($new_instance, $old_instance){
			$instance    = $old_instance;

			$instance['title'] = $new_instance['title'];
			$instance['description'] = $new_instance['description'];
			$instance['button'] = $new_instance['button'];
			$instance['button_url'] = $new_instance['button_url'];

			return $instance;

		}//end update function


		

	}//end class

	//register the custom widget
	register_widget('suite_custom_widget');

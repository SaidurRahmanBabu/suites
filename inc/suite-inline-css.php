<?php
	if(! function_exists('suite_inline_css')):
		function suite_inline_css(){
			?>

			<?php
		}
		add_action('wp_head', 'suite_inline_css');
	endif;
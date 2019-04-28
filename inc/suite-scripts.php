<?php
	function suite_scripts(){
		//css files
		//google fonts
		wp_enqueue_style('suite-font', '//fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700');
		//fontawesome
		wp_enqueue_style('suite-fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		//icomoon
		wp_enqueue_style( 'suite-icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css','null','all');
		//bootstrap
		wp_enqueue_style( 'suite-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css','null','all');
		//magnific
		wp_enqueue_style( 'suite-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css','null','all');
		//jquery
		wp_enqueue_style( 'suite-jquery', get_template_directory_uri() . '/assets/css/jquery-ui.css','null','all');
		//owl.carousel 
		wp_enqueue_style( 'suite-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css','null','all');
		//owl.theme.default 
		wp_enqueue_style( 'suite-owl.theme.default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css','null','all');
		//datepicker 
		wp_enqueue_style( 'suite-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css','null','all');
		//animate 
		wp_enqueue_style( 'suite-animate', get_template_directory_uri() . '/assets/css/animate.css.css','null','all');
		//fontawesome
		wp_enqueue_style('suite-fontawesome', '//cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css');
		//flaticon 
		wp_enqueue_style( 'suite-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css','null','all');
		//aos 
		wp_enqueue_style( 'suite-aos', get_template_directory_uri() . '/assets/css/aos.css','null','all');
		//theme main css file
		wp_enqueue_style( 'suite-style', get_template_directory_uri() . '/assets/css/style.css','null','all');
		//theme css
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), time(), 'all' );


		//js files
		//jquery-ui
		wp_enqueue_script( 'suite-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array ( 'jquery' ), null, true);
		//popper
		wp_enqueue_script( 'suite-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), null, true);
		//bootstrap
		wp_enqueue_script( 'suite-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), null, true);
		//carousel
		wp_enqueue_script( 'suite-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), null, true);
		//stellar
		wp_enqueue_script( 'suite-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array ( 'jquery' ), null, true);
		//countdown
		wp_enqueue_script( 'suite-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), null, true);
		//magnific-popup
		wp_enqueue_script( 'suite-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), null, true);
		//datepicker
		wp_enqueue_script( 'suite-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js', array ( 'jquery' ), null, true);
		//aos
		wp_enqueue_script( 'suite-aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), null, true);
		//mediaelement
		wp_enqueue_script( 'suite-mediaelement', get_template_directory_uri() . '/assets/js/mediaelement-and-player.min.js', array ( 'jquery' ), null, true);
		//main
		wp_enqueue_script( 'suite-main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), null, true);

	}
	add_action('wp_enqueue_scripts', 'suite_scripts');
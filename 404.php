<?php get_header(); ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg); background-color: #333;" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-4">
              	<?php _e('OPPS!!!', 'suites'); ?>
              </h1>
              <h2 style="color:#fff">
              	<?php _e('404 Error.', 'suites'); ?>
              	<?php _e('Page Not Found!', 'suites'); ?>
              </h2>
            </div>
          </div>
        </div>
      </div> 
<?php get_footer(); ?>
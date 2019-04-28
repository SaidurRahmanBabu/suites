<?php
  function suite_testimonial($atts){

    extract(shortcode_atts(array(
      'title'         => '',
      'post_limit'    => '',
      'category_name' => 'testimonial',

    ), $atts));

    ob_start();

    ?>

    <div class="site-section block-14 bg-light">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2><?php echo esc_html($title); ?></h2>
          </div>
        </div>
        <div class="nonloop-block-14 owl-carousel">

          <?php
            $args = array(
              'posts_per_page'  => $post_limit,
              'post_status'     => 'publish',
              'post_type'       => 'post',
              'category_name'   => $category_name
            );
            $custom_post = new WP_Query($args);

            while($custom_post->have_posts()) : $custom_post-> the_post();

          ?>
          
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5"><?php the_title(); ?></h2>
                <?php echo '"' . get_the_content() . '"'; ?>
              </div>
            </div>
          </div>

          <?php endwhile; ?>

        </div>
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('testimonial', 'suite_testimonial');
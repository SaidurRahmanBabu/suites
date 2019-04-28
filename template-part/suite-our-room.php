<?php
  function suite_room($atts){

    extract(shortcode_atts(array(
      'title'         => '',
      'post_limit'    => '',
      'category_name' => ''

    ), $atts));

    ob_start();

    ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5"><?php echo esc_html($title); ?></h2>
          </div>
        </div>
        <div class="row">

        <?php
          $args = array(
            'posts_per_page'  => $post_limit,
            'post_status'     => 'publish',
            'post_type'       => 'post',
            'category_name'   => $category_name
          );
          $room_query = new WP_Query($args);

           while($room_query->have_posts()) : $room_query-> the_post();
        ?>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="<?php the_permalink(); ?>" class="d-block mb-0 thumbnail">
                <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="Image" class="img-fluid">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <strong class="price">
                  <?php 
                    if(function_exists('get_field')){
                      echo get_field('cost');
                    }
                  ?>
                </strong>
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
add_shortcode('room', 'suite_room');
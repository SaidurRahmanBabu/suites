<?php
  function suite_cta($atts){

    extract(shortcode_atts(array(
      'title'             => '',
      'image'             => '',
      'button'            => '',
      'countdown_caption' => '',
      'year'              => '',
      'month'             => '',
      'day'               =>''

    ), $atts));

    ob_start();

    ?>
  <?php
    $image = wp_get_attachment_image_src($image, 'full');
  ?>
  <div class="py-5 upcoming-events" style="background-image: url(<?php echo esc_url($image[0]); ?>); background-attachment: fixed; background-color: red">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2 class="text-white">
              <?php echo esc_html($title); ?>
            </h2>
            <a href="#" class="text-white btn btn-outline-warning rounded-0 text-uppercase">
              <?php echo esc_html( $button ); ?>
            </a>
          </div>
          <div class="col-md-6">
            <span class="caption">
              <?php echo esc_html( $countdown_caption ); ?>
            </span>
            <div id="date-countdown"></div>    
          </div>
        </div>
        
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('cta', 'suite_cta');
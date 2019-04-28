<?php
  function suite_header($atts){

    extract(shortcode_atts(array(
      'title'     => '',
      'sub_title' => '',
      'image'     => ''

    ), $atts));

    ob_start();

    ?>

    <?php
      $image = wp_get_attachment_image_src($image);
      if($image):
    ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo esc_attr($image[0]); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      
      <?php endif; ?>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade">
            <span class="caption mb-3"><?php echo esc_html($sub_title); ?></span>
            <h1 class="mb-4"><?php echo esc_html($title); ?></h1>
          </div>
        </div>
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('header', 'suite_header'); 
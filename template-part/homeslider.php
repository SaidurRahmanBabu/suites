<?php
  function suite_home_slider($atts){
    extract(shortcode_atts(array(
      'homepage_slider_group' => '',
      'title'       => '',
      'sub_title'   => '',
      'image'     => ''

    ), $atts));
    ob_start();
    ?>
    <div class="slide-one-item home-slider owl-carousel">
    <?php
      $homepage_slider_groups = vc_param_group_parse_atts($homepage_slider_group);
      foreach($homepage_slider_groups as $slider):
        $image = wp_get_attachment_image_src($slider['image']);
    ?>
      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo esc_url($image[0]); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              
              <h1 class="mb-2"><?php echo esc_html($slider['title']); ?></h1>
              <h2 class="caption"><?php echo esc_html($slider['sub_title']); ?></h2>
            </div>
          </div>
        </div>
      </div> 
      <?php endforeach; ?>
    </div>
  <?php
  return ob_get_clean();
}
add_shortcode('homeslider', 'suite_home_slider');
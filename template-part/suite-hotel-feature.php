<?php
  function suite_hotel_feature($atts){
    extract(shortcode_atts(array(
      'section_title' => '',
      //team param group
      'feature_group'   => '',
      'icon'        => '',
      'title'      => ''

    ), $atts));

    ob_start();


    ?>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5"><?php echo esc_html($section_title); ?></h2>
          </div>
        </div>
        <div class="row">

          <?php
            $feature_groups = vc_param_group_parse_atts($feature_group);
            foreach($feature_groups as $feature):
          ?>
          
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="<?php echo esc_attr($feature['icon']); ?> display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5"><?php echo esc_html($feature['title']); ?></h2>
            </div>
          </div>

        <?php endforeach; ?>
          
        </div>
      </div>
    </div>


  <?php

  return ob_get_clean();
}
add_shortcode('hotel_feature', 'suite_hotel_feature');
<?php
  function suite_about($atts, $content=null){

    extract(shortcode_atts(array(
      'title'     => '',
      'video'     => '',
      'vid_image' => '',
      'button'    => '',
      'image'     => ''

    ), $atts));

    ob_start();

    ?>

<div class="site-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-5 mb-md-0">
        
          <div class="img-border">
            <?php $href = vc_build_link( $video ); ?>
            <a href="<?php echo esc_url($href['url']); ?>" class="popup-vimeo image-play">
              <span class="icon-wrap">
                <span class="icon icon-play"></span>
              </span>

              <?php
                $vid_image = wp_get_attachment_image_src($vid_image, 'full');
                if($vid_image):
              ?>
              <img src="<?php echo esc_url($vid_image[0]); ?>" alt="" class="img-fluid">
            <?php endif; ?>

            </a>
          </div>

        <?php
          $image = wp_get_attachment_image_src($image);
          if($image):
        ?>
          <img src="<?php echo esc_url($image[0]); ?>" alt="Image" class="img-fluid image-absolute">
        <?php endif; ?>
        
      </div>
      <div class="col-md-5 ml-auto">
        

        <div class="section-heading text-left">
          <h2 class="mb-5"><?php echo esc_html($title); ?></h2>
        </div>
        <?php $contents = wpb_js_remove_wpautop($content); ?>
        <p class="mb-4"><?php echo $contents; ?></p>
        <p>
          <a href="<?php echo esc_url($video['url']); ?>" class="popup-vimeo text-uppercase"><?php echo esc_html($button); ?>
            <span class="icon-arrow-right small"></span>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>


  <?php
  return ob_get_clean();
}
add_shortcode('about', 'suite_about');
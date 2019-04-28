<?php
  function suite_gallery($atts){

    extract(shortcode_atts(array(
      'title'     => '',
      'image'     => ''

    ), $atts));

    ob_start();

    ?>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5"><?php echo esc_html($title); ?></h2>
          </div>
        </div>

        <div class="row no-gutters suite-gallery">

        <?php
          $image_ids = explode(',',$image);
          foreach($image_ids as $img):
          $images = wp_get_attachment_image_src($img, 'full');

        ?>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo esc_url($images[0]); ?>" class="image-popup img-opacity">
              <img src="<?php echo esc_url($images[0]); ?>" alt="Image" class="img-fluid">
            </a>
          </div>

        <?php endforeach; ?>
          

        </div>
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('gallery', 'suite_gallery'); 
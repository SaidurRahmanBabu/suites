<?php
  function suite_events($atts){

    extract(shortcode_atts(array(
      'title'         => '',
      'post_limit'    => '',
      'category_name' => 'Uncategorized'

    ), $atts));

    ob_start();

    ?>

    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2><?php echo esc_html($title); ?></h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">

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

            <div class="media-with-text p-md-5">
              <div class="img-border-sm mb-4">
                <a href="<?php echo esc_url(the_post_thumbnail_url()); ?>" class="popup-vimeo image-play">
                  <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <span class="mb-3 d-block post-date"><?php echo get_the_date('M 20, Y'); ?> &bullet; By <?php the_author_posts_link(); ?>
              </span>
              <p><?php the_excerpt(); ?></p>
            </div>

          <?php endwhile; ?>

        </div>

      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('events', 'suite_events');
<?php get_header(); ?>
  
  <!-- page headr -->
  <?php get_template_part('template-part/common/suite-page-header'); ?>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
        <?php if(have_posts()): ?>
          <?php while(have_posts()) : the_post(); ?>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <?php
                    $image = get_the_post_thumbnail_url();
                    if($image):
                  ?>
                <a href="<?php echo $image; ?>" class="popup-vimeo image-play">
                  
                  <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                <?php endif; ?>
                </a>

              </div>
              <h2 class="heading mb-0">

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

              </h2>
              <span class="mb-3 d-block post-date">

                <?php echo get_the_date( 'M d, Y' ); ?> &bullet; By 
                <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>

              </span>

              <p><?php the_content(); ?></p>
            </div>
          </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
          

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <?php the_posts_pagination( array(
                  'mid_size' => 2,
                  'prev_text' => __( '<i class="fa fa-angle-left"></i>', 'suites' ),
                  'next_text' => __( '<i class="fa fa-angle-right"></i>', 'suites' ),
                  'screen_reader_text' =>' '
                )); ?>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    
<!-- footer -->
<?php get_footer(); ?>
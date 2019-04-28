<?php get_header(); ?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>

  <div class="suite-single" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <div class="media-with-text">
              <h2 class="heading mb-0">

                <?php the_title(); ?>

              </h2>
              <span class="mb-3 d-block post-date">

                <?php 
                  if(get_field('cost')){
                    echo get_field('cost');
                  }
                ?>

              </span>
              <span class="mb-3 d-block post-date">

                <?php echo get_the_date('M d, Y'); ?> &bullet; By 
                <span style="color: red"><?php the_author(); ?></span>
                
              </span>

              <p><?php the_content(); ?></p>
            </div>
          </div>

          <?php endwhile; ?>
        <?php endif; ?>

        <!-- ========= Blog Pagination =========== -->
        <nav class="blog-pagination">
            <ul class="justify-content-between pagination">

            <?php if(get_previous_post_link()): ?>
                <li class="page-item newer-post pl-15">
                    <p class="page-link border-0 hvr-icon-back">
                    <?php previous_post_link( '%link', 'Previous Post', false, '', 'category' ); ?>
                    </p>
                </li>
            <?php endif; ?>
            
            <?php if(get_next_post_link()): ?>
                <li class="page-item newer-post pl-15">
                    <p class="page-link border-0 hvr-icon-forward">
                    <?php next_post_link( '%link', 'Next Post', false, '', 'category' ); ?>
                    </p>
                </li>
            <?php endif; ?>

            </ul>
        </nav>
        <!-- //Pagination -->

      </div>

      <!-- author info -->
      <div class="row">
        <div class="col-md-8">
          <h3><?php _e('About Author', 'suites'); ?></h3>
          <div class="author media-with-text">
            
            <?php
                echo get_avatar(get_the_author_meta('id'));
            ?>
            <h2 class="heading mb-0">
              <?php echo _e('Author: ', 'suites') . get_the_author_meta('display_name'); ?>
            </h2>
            <p class="card-text">
              <?php echo get_the_author_meta('description'); ?>
            </p>
          </div><br><br>

          <!-- ================= Comment Area ================= -->

          <div class="comments-area">
              <div class="comments-title">
                  <h2>
                      <?php _e('Comments', 'suites'); ?>
                  </h2>
              </div>

              <?php comments_template(); ?>
          </div>
          <!-- ================= //Comment Area ================= -->
        </div>
      </div>
          

      </div>
    </div>
    
<!-- footer -->
<?php get_footer(); ?>
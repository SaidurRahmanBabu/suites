<?php get_header(); ?>
  
  <!-- page headr -->
  <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
    
<!-- footer -->
<?php get_footer(); ?>
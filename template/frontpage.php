<?php
/*
* Template Name: Home page
*/
?>
<?php get_header(); ?>


<?php
  while(have_posts()){
    the_post();
    the_content();
  }
?> 

<!-- footer -->
<?php get_footer(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo">
                  <a href="<?php esc_url(bloginfo('home')); ?>">
                    <?php bloginfo('name'); ?>
                  </a>
                </h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li class="has-children">
                        <a href="rooms.html">Rooms</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="rooms.html">Standard Room</a></li>
                          <li><a href="rooms.html">Family Room</a></li>
                          <li><a href="rooms.html">Single Room</a></li>
                          <li class="has-children">
                            <a href="rooms.html">Rooms</a>
                            <ul class="dropdown">
                              <li><a href="rooms.html">America</a></li>
                              <li><a href="rooms.html">Europe</a></li>
                              <li><a href="rooms.html">Asia</a></li>
                              <li><a href="rooms.html">Africa</a></li>
                              
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li><a href="events.html">Events</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>

                  <?php
                    wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'menu_class'     => 'site-menu js-clone-nav d-none d-lg-block',
                      'container'      => 'ul',
                      'walker'         => new WP_Bootstrap_Navwalker(),
                      'depth'          => 3
                    ));
                  ?>


                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">

          <div class="col-md-4">
            <?php dynamic_sidebar('footer_about'); ?>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <?php dynamic_sidebar('footer_menu_one'); ?>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white footer3"> Ministeries</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Children</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Bible Study</a></li>
                    <li><a href="#">Church</a></li>
                    <li><a href="#">Missionaries</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white footer4">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="footer-licence">
              <?php echo get_theme_mod('footer_licence'); ?>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script>


      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });


 AOS.init({
  duration: 800,
  easing: 'slide',
  once: false
 });


    </script>


  <?php wp_footer(); ?>
  </body>
</html>
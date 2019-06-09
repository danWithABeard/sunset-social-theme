    <div class="footer">        
      <div class="container w-container">
        <div class="dog-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-front-left.svg" alt="" class="dog-front-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-dog.svg" alt="" class="dog-body">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-back-left.svg" alt="" class="dog-back-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-dog-tail.svg" alt="" class="image-6">
        </div>

        <div class="donna-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-donna-cherry.svg" data-w-id="0aae5f4e-d91e-bad6-a1e4-134a692e885b" style="-webkit-transform:translate3d(23PX, 0, 0) scale3d(0.7, 0.7, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(23PX, 0, 0) scale3d(0.7, 0.7, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(23PX, 0, 0) scale3d(0.7, 0.7, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(23PX, 0, 0) scale3d(0.7, 0.7, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="image-7">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-donna.svg" alt="" class="image-8">
        </div>
        
        <h1 class="heading footer-heading"></h1>
      </div>
      
      <div class="w-container">
        <div class="div-block">
          
          <div>
            <div class="menu-item">Contact Us</div>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>  
          </div>
          
          <div class="social-wrapper">
            <div class="icon">
              <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="w-inline-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-logo.svg" alt="">
              </a>
            </div>
            <div class="icon">
              <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="w-inline-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-logo-silhouette.svg" alt="">
              </a>
            </div>
            <div class="icon">
              <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="w-inline-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-letter-logo.svg" alt="">
              </a>
            </div>
          </div>
          
          <?php wp_nav_menu( array( 'theme_location' => 'menu-3' ) ); ?>  
        </div>
      </div>
    </div>

    <div class="order-button__outer">
      <a href="https://www.toasttab.com/sunset-social/v2/online-order#!/" title="Order online from Sunset Social" class="order-button__inner">ORDER NOW!</a>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js" type="text/javascript"></script>

    <?php wp_footer(); ?>
  </body>
</html>
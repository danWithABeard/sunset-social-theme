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
        
        <!-- <div class="text-block-4"><br>join our team, email us today</div> -->
        
        <!-- <div class="form-wrapper">
          <div class="w-form">
            <form id="wf-form-Job-Inquiry" name="wf-form-Job-Inquiry" data-name="Job Inquiry" class="form">
              <label for="email" class="field-label">Email Address:</label>
              <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="email address" id="email" required="">
              <input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
            </form>
            
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div> -->
        
        <!-- <div class="form-arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/sunset-arrow.svg" width="81" alt="" class="image-4"></div> -->
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
          
          <ul class="menu menu--credits">
            <li><a href="http://brandywinerealty.com/" target="_blank" class="menu-item menu-item-right">Brandywine realty trust</a></li>
            <li><a href="https://www.warrenhq.com/" target="_blank" class="menu-item menu-item-right">warren</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="order-button__outer"><a href="https://www.toasttab.com/sunset-social/v2/online-order#!/" title="Order online from Sunset Social" class="order-button__inner">ORDER NOW!</a></div>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js" type="text/javascript"></script>

    <?php wp_footer(); ?>
  </body>
</html>
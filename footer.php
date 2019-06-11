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
        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
          <h3>Subscribe to our mailing list</h3>
          <form action="https://sunsetsocialphl.us20.list-manage.com/subscribe/post?u=d8c5649765efbe7df0f48d1a0&amp;id=f936fa6d44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
                <input type="email" value="" name="EMAIL" class="required email text-field w-input" id="mce-EMAIL" placeholder="donna@sunsetsocialphl.com"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="submit-button w-button">
              </div>
                
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    

              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->      
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d8c5649765efbe7df0f48d1a0_f936fa6d44" tabindex="-1" value=""></div>
            </div>
          </form>
        </div>
        
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
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
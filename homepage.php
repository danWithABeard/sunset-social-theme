  <?php /* Template Name: Homepage */ ?>
  <?php get_header("homepage"); ?>

  <div class="heading-wrap">
    <div class="w-container">
      <div class="burger-character-wrap">
        <div class="burger-desktop-shift">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-hat.svg" alt="" class="hat">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-arm.svg" alt="" class="arm">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sunset-burger.svg" alt="" class="burger">
        </div>
      </div>
      <div class="burger-clip-bg"></div>
      <h1 class="heading">Mellow out atop Cira Green<br>Open 7 days a week</h1>
    </div>
  </div>

  <?php # Display the menu ?>

  <div class="menu-wrapper w-container">
    <?php if( have_rows('menu') ): ?>
      <?php while( have_rows('menu') ): the_row(); ?>
        <div class="menu__section">
          <h2><?php the_sub_field('category_name'); ?></h2>
          <ul>
            <?php while( have_rows('category_items') ): the_row(); ?>
              <li>
                <h3><?php the_sub_field('item'); ?></h3>
                <p class="menu__description"><?php the_sub_field('description');?></p>
                <p class="menu__price"><?php the_sub_field('price'); ?></p>
              </li>
            <?php endwhile; ?>  
          </ul>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="gallery__callout w-container">
    <a href="<?php echo get_home_url(); ?>/gallery" title=""><h2>Check out the space!</h2></a>
  </div>

  <div class="sunset-social__details-wrapper w-container">
    <div class="store-hours">
      <h2>Mon <span class="store-hours-sub">thru</span> Sun
      <br>
      11AM - Midnight</h2>
    </div>

    <div class="store-hours">
      <p>Sunset Social is located at <a href="https://goo.gl/maps/fnxvqN5DuczjT88r5" title="Find Sunset Social on Google Maps">129 S 30th Street</a>, on the Roof Cira Green. You can reach us via the elevators in the parking garage, connected to the FMC Tower. Parking is validated for the FMC tower after 4 PM. We are 2 blocks south of the 30th Street train station, and easily accessible via SEPTA trolley routes and the market Frankford line.</p>
    </div>
  </div>

  <div class="sunset-social__events-wrapper w-container">
    <h2>Events @ Sunset Social</h2>
    <div class="header-bg__design"></div>
    <h3>Coming Soon!</h3>
    <p>Check our facebook for the current schedule</p>
  </div>

<?php get_footer(); ?>
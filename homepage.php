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
      <h1 class="heading"><?php echo get_bloginfo("description") ?><br>Open 7 days a week</h1>
    </div>
  </div>

  <div class="menu-wrapper w-container">
    <?php # Display the food menu ?>
    <div class="menu-section menu-section--food">
      <?php if( have_rows('menu') ): ?>
        <?php while( have_rows('menu') ): the_row(); ?>
          <div class="menu__category category__<?php echo get_row_index(); ?>">
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

    <div class="menu-section menu-section--drink">
      <?php if( have_rows('drink_menu') ): ?>
        <?php while( have_rows('drink_menu') ): the_row(); ?>
          <div class="menu__category category__<?php echo get_row_index(); ?>">
            <h2><?php the_sub_field('drink_category_name'); ?></h2>
            <ul>
              <?php while( have_rows('drink_category_items') ): the_row(); ?>
                <li>
                  <h3><?php the_sub_field('drink_item'); ?></h3>
                  <p class="menu__description"><?php the_sub_field('drink_description');?></p>
                  <p class="menu__price"><?php the_sub_field('drink_price'); ?></p>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="gallery__callout w-container">
    <a href="<?php echo get_home_url(); ?>/gallery" title="">
      <h3>Check out the space</h3>
    </a>
    <a href="https://www.toasttab.com/sunset-social/giftcards" title="Buy a Sunset Social gift card">
      <h3>Buy a gift card</h3>
    </a>
  </div>

  <div class="sunset-social__details-wrapper w-container">
    <div class="store-hours">
      <h2>Mon <span class="store-hours-sub">thru</span> Sun</h2> <h2><?php the_field('open_hours'); ?></h2>
    </div>

    <div class="store-hours">
      <p><?php the_field('location_information'); ?></p>
    </div>
  </div>

  <div class="sunset-social__events-wrapper w-container">
    <h2>Upcoming Events</h2>
    <div class="header-bg__design"></div>

    <?php if( have_rows('event_flyers') ) { ?>

      <?php while( have_rows('event_flyers') ): the_row(); ?>
        <img class="events__flyer" src="<?php the_sub_field('single_flyer'); ?>" alt="" />
      <?php endwhile; ?>

    <?php } else { ?>

      <h3>More Events Coming Soon!</h3>
      <p>Check our facebook for the current schedule</p>

    <?php } ?>

    <div class="button--primary">
      <a href="<?php echo get_home_url(); ?>/events/" title="Book a Party with us">
        <h3>Book a Party with us</h3>
      </a>
    </div>
  </div>

<?php get_footer(); ?>

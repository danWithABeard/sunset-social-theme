<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <script src="https://use.typekit.net/fwv3xza.js" type="text/javascript"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

  <link href="<?php echo get_template_directory_uri(); ?>/images/SunsetSocial-Favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>

<body <?php body_class(); ?>>
  <div class="header__wrapper">

    <div>Call us: <a href="tel:<?php the_field('phone_number', 'option'); ?>" title="Call Sunset Social">267-634-6779</a></div>

    <div class="delivery__wrapper">
      <div>Order online: </div>

      <?php if(get_field('caviar', 'option')) { ?>
      <a href="<?php the_field('caviar', 'option'); ?>" title="Order from Sunset Social on Caviar" class="delivery__logo delivery__logo--caviar"></a>
      <?php } ?>

      <?php if(get_field('grubhub', 'option')) { ?>
      <a href="<?php the_field('grubhub', 'option'); ?>" title="Order from Sunset Social on Grubhub" class="delivery__logo delivery__logo--grubhub"></a>
      <?php } ?>
    </div>
  </div>

  <div class="content">
    <div class="w-container">
      <a href="<?php echo get_home_url(); ?>" title="Welcome to Sunset Social"><img src="<?php echo get_template_directory_uri(); ?>/images/sunset-logo.svg" class="image" /></a>
    </div>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description');?>">

    <?php wp_head(); ?>

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>">
          <?php $logo = wp_get_attachment_image_src(6, 'full'); ?> 
          <img class="w-50" src="<?php echo $logo[0] ?>" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
            </div>
        </div> -->
        <?php
          wp_nav_menu( array(
              'theme_location'    => 'header',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse flex-row-reverse',
              'container_id'      => 'navbarNavAltMarkup',
              'menu_class'        => 'navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker()
          ) );
        ?>
    </nav>


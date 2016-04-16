<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="row no-max pad main">
  <h1><a class='current' href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
  <a href="" class="nav-toggle"><span></span><?php _e('Menu', 'primus'); ?></a>
  <nav>
    <h1 class="open"><a class='current' href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>

    <?php

	    $defaults = array(
		    'container' => false,
		    'theme_location' => 'primary-menu',
		    'menu_class' => 'no-bullet'
	    );

	    wp_nav_menu( $defaults );

    ?>
    
  </nav>

</header>

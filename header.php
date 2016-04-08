<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

      <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
      <![endif]-->
      
	<?php wp_head(); ?>
	
  </head>

  <body <?php body_class(); ?>>

    <header class="row no-max pad main">
  <h1><a class='current' href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
  <a href="" class="nav-toggle"><span></span>Menu</a>
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
<html>
  <head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pinkblack" href="<?php bloginfo('pinkblack_url'); ?>" >
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">        
	      <?php get_search_form('name'); ?>
        <?php wp_nav_menu(array( 'header-menu' =>( 'Header Menu' ), 'extra-menu' =>( 'Extra Menu' ) )); ?>
	      <h1>This is the header</h1>
        <div id="nav">
          <a href="/home/">Home</a> |  
          <a href="/about/">About</a> |
          <a href="/content/">Content</a> |
          <a href="/resource/">Resource</a>   |
          <a href="/contact us/">Contact Us</a>  
        </div>
      </div>
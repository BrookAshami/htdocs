<!DOCTYPE html>
<html>
    <head>
        <title> <?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- [if it IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> </script><![endif] -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pinkblack" href="<?php bloginfo('pinkblack_url'); ?>" />
        <?php wp_head(); ?>         
    </head>

    <body>
        <div id="wrap">
            <div id="container" class="group">
                <header class="group">
                    <h1> <img src="<?php print IMAGES; ?> /logo.png" alt="<?php bloginfo('name'); ?>" /></h1>
                    <?php get_search_form('name'); ?> 
                    <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav')); ?>
                    
                </header>
                <!-- End Header -->
                <br/>
                <!-- Main Area -->
                <div id="content" class="group"> 

                
                

          
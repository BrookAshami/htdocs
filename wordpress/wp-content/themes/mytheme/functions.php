<?php

function register_my_menu(){
    register_nav_menus(
     
        array(
            'header-menu' => __( 'Header Main'), 
            'extera-menu' => __( 'Extra Menu' )
        )
    );
}
add_action('init', 'register_my_menu');

?>
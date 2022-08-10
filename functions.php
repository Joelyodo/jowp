<?php
function add_css ( )
{
   wp_register_style ( 'bootstrap' , get_template_directory_uri ( ) . '/assets/css/bootstrap.min.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'bootstrap' ) ; 
   wp_register_style ( 'style' , get_template_directory_uri ( ) . '/assets/css/style.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'style' ) ;
   wp_register_style ( 'responsive' , get_template_directory_uri ( ) . '/assets/css/responsive.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'responsive' ) ;
   wp_register_style ( 'scrollbar' , get_template_directory_uri ( ) . '/assets/css/jquery.mCustomScrollbar.min.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'scrollbar' ) ;
}
add_action ( 'wp_enqueue_scripts' , 'add_css' ) ;

function add_script ( )
{
   wp_register_script ( 'js-script' , get_template_directory_uri ( ) . '/assets/js/jquery.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'js-script' ) ; 
   wp_register_script ( 'change' , get_template_directory_uri ( ) . '/assets/js/popper.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'change' ) ; 
   wp_register_script ( 'popup' , get_template_directory_uri ( ) . '/assets/js/jquery-3.0.0.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'popup' ) ; 
   wp_register_script ( 'plugin' , get_template_directory_uri ( ) . '/assets/js/js/plugin.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'plugin' ) ; 
   wp_register_script ( 'bootstrap' , get_template_directory_uri ( ) . '/assets/js/bootstrap.bundle.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'bootstrap' ) ;
   wp_register_script ( 'scrollbar' , get_template_directory_uri ( ) . '/assets/js/jquery.mCustomScrollbar.concat.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'scrollbar' ) ;
   wp_register_script ( 'custom' , get_template_directory_uri ( ) . '/assets/js/custom.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'custom' ) ; 
}
add_action ( 'wp_enqueue_scripts' , 'add_script' ) ;

add_theme_support ( 'menus' ) ;
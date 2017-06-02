<?php

/*
Theme Name: lakcav01
Author: Jeanine Mars
Author URI: http://jeaninemars.com/
Description: This is my theme for Spring 2017 class 170
Version: 1.0
*/

//Register Side bar
register_sidebars(2, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

register_sidebar(array('name' => __('Jeanine', 'jeanine'), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

//Register My Menu Locations

register_nav_menus(array('main-menu' =>__('menu')));


//Adds theme support for post thumbnail images and featured images
add_theme_support('post-thumbnails');

//('footer-menu' =>__('Footer Menu')
//P.S. Mike I like watching the Spring.02 classes even thought I'm in Spring.01. I did notice that you included the footer in the .02 class but not in the .01 Spring class. 
//End My Menu Locations

?>
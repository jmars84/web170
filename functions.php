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

//add Post Type Support
add_post_type_support('page', 'excerpt');

//Function for SEO
    
    function get_jeanines_title_tag() {
    
    global $post; // DO NOT FORGET TO USE THIS IF USING A POST OBJECT
    
    
    if (is_front_page() || is_home()) {  //if on the front page or blog feed..
    
        bloginfo('description'); //..retrieve the site tagline

        
    } elseif (is_page() || is_single()) { // page or posting
        
        echo get_the_title($post->ID);
        
    } else {   // 404 or search.. everything else. 
        
        bloginfo('description'); //retrieves the site tagline
        
        
    }
    
    if ($post->post_parent) {  //for the sites Parent Pages
    
    echo ' | '; //separator with spaces
    echo get_the_title($post->post_parent); //retrieves the Parent Page Title
    
        
    }
    
    echo ' | ';
    echo 'Business Name'; //Business Name
    echo ' | ';
    echo 'Seattle, WA'; //Location
    
}

?>
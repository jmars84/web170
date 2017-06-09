    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title><?php get_jeanines_title_tag(); ?></title>
        <meta name="description" content="<?php echo get_the_excerpt(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" />
        
        <script src="js/script.js" <?php bloginfo( 'template_directory');?>
            >
        </script>

        <!--WP Style Sheets-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />

        <!--WP Header Function-->

        <?php wp_head(); ?>

    </head>



    <!--WP Body-->

    <body <?php body_class();?>>

        <div class="wrapper">
            <header>
                <a class="logo" id="logo" title="Lake Cavanaugh" href="http://www.jeaninemars.com/web170/wordpress/"><span>Lake Cavanaugh Community</span></a>
                <div class="hero">
                    <h1>Rent the Community Center</h1>
                    <a class="btn" title="Rent" href="rent.html">Rent</a>
                </div>
            </header>

            <!--Begin WP Nav-->
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation')); ?>



            <!--End WP Nav-->
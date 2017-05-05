<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('description');?> | <?php bloginfo('name');?> | Seattle, WA</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/script.js"<?php bloginfo('template_directory');?>></script>
   
    <!--WP Style Sheets-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
    
</head>
    
<!--WP Header Function-->
<?php wp_head(); ?>
    
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

         <nav>
            <ul class="topnav" id="myTopnav">
                <li>
                    <a href="home.html">Home</a>
                </li>
                <li>
                    <a href="main.html">Improvement Association</a>
                </li>   
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="contactme.html">Contact</a>
                </li>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav>

        <!--START LEFT COL -->
        

        <section class="other">
       
            
            
            <!--WP Loop-->
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    
                    <?php the_content(); ?>
               
            
            <?php endwhile; endif; ?>
            
            <small>index.php</small>
        </section>
        <!--END LEFT COL -->

        <!--START RIGHT COL -->
        <aside class="others">
            <div class="vertical-menu">
                <ul>
                    <li><a href="home.html" class="active">Home</a></li>
                    <li><a href="main.html">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="calendar.html">Upcoming Events</a></li>
                    <li><a href="map.html">Directions</a></li>
                    <li><a href="newsletter.html">Newsletter</a></li>
                    <li><a href="ad.html">Ad Rates</a></li>
                    <li><a href="fire.html">Fire Department</a></li>
                    <li><a href="contactme.html">Contact</a></li>
                </ul>
            </div>
        </aside>
        <!--END RIGHT COL -->

        <!-- START Footer -->
        <footer>
            <p>
                <small>
                    <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
                    <a href="disclaimer.html">Disclaimer</a>
                </small>
            </p>
        </footer>
        <!-- END Footer -->
        
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>
    
    <!--WP Foooter Function-->
    <?php wp_footer();?>
    
</body>

</html>
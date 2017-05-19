<?php get_header()?>

        
        
        
        <!--START LEFT COL -->


        <!-- START MAIN section -->

        <section class="main">
            <!-- First Aside -->
            <aside>
                <div class="content upcoming">
                    <!-- Two Classes -->
                    <h3><a href="improve.php">Visit</a></h3>
                    <p>Lake Cavanaugh Improvement Association is a Washington non-profit association founded in 1953
                    </p>
                </div>
            </aside>
            <!-- Second Aside -->
            <aside>
                <!-- Two Classes -->
                <div class="content find-it">
                    <h3><a href="map.php">Directions</a></h3>
                    <p>
                        For your convience here are the google map directions to Lake Cavanaugh.
                    </p>
                </div>
            </aside>
            <!-- Third Aside -->
            <aside>
                <!-- Two Classes -->
                <div class="content blog">
                    <h3><a href="blog.php">Check out our Blog</a></h3>
                    <p>
                        Learn more about water safety, our water quality, and many other things.
                    </p>
                </div>
            </aside>
        </section>

        <section class="water">
            
                <h2>About Me:</h2>
                 <!--WP Loop-->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="article-<?php the_ID(); ?>" class="article"> 

            <?php the_content(); ?>


            <?php endwhile; endif; ?>

            <small>front-page.php</small>
            
               
            </article>

        </section>
        <!-- END MAIN section -->

        <!-- START HOW TO section -->
        <section class="how-to">
            <!-- First Aside -->
            <aside>
                <div class="content">
                    <h4>Latest Articles:</h4>
                    <ul>
                        <?php rewind_posts(); //this will stop the previous loop ?>
                        <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'articles')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title()?> <?php the_time('F jS, Y') ;?></a><?php the_category();?></li>
                    <?php endwhile; endif;?>
                    </ul>
                
                </div>
            </aside>
            <!-- Second Aside -->
            <aside>
                <div class="content">
                    <h4>Latest Stories:</h4>
                    <ul>
                        <?php rewind_posts(); //this will stop the previous loop ?>
                        <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'stories')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title()?> <?php the_time('F jS, Y') ;?></a><?php the_category();?></li>
                    <?php endwhile; endif;?>
                    </ul>
                        
                </div>
            </aside>
            <!-- Blockquotee -->
            <blockquote>
                <p class="quote">
                    Look deep into nature and you will understand everything better.
                </p>
                <p class="credit">
                    <strong>Albert Einstien</strong> <em>~Inventor</em>
                </p>
            </blockquote>
        </section>
        <!-- END HOW TO Section -->

            
            
        <!--END LEFT COL -->

  

    <?php get_footer()?>  
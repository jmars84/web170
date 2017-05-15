<?php get_header()?>

        
        
        
        <!--START LEFT COL -->


        <section class="other">



            <!--WP Loop-->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p><small>Posted on <?php the_time('F j, Y')?> by <?php the_author()?> in <?php the_category()?></small></p>

            <?php the_content(); ?>


            <?php endwhile; endif; ?>

            <small>single.php</small>
            
            
        </section>
        <!--END LEFT COL -->

    <?php get_sidebar()?>  

    <?php get_footer()?>  
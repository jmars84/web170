<?php get_header()?>

             
        <!--START LEFT COL -->

        <section class="other">



            <!--WP Loop-->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article><?php the_ID(); ?></article>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>


            <?php the_content(); ?>


            <?php endwhile; endif; ?>

            <small>pages.php</small>
            
            
        </section>
        <!--END LEFT COL -->

<?php get_sidebar()?>

<?php get_footer()?>
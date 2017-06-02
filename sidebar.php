<!--START RIGHT COL -->
    <div id="sidebar" class="others">
    <div class="vertical-menu">
        
<!--Begin SubNav-->        
    <div id="sub-navigation" class="widget">        
        
        <h3>
    

        
<?php

        if(is_page()){

        echo get_the_title($post->post_parent);

    }else{

        echo 'Blog';
    }
            
    ?>
        </h3>

        <ul>

<?php

    if(is_page()){

    if($post->post_parent){

        wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent));

    }else{

        wp_list_pages(array('title_li' => '', 'child_of' => $post->ID));

    }

    }else{
        
        
        wp_list_categories(array('title_li' => ''));

    }

?>
    
        </ul>
        
<!--End SubNav-->
        </div>
        
<?php if(get_post_meta($post->ID, 'quote', true)) : //checks to see if it there is a quote ?>
        <!-- Begin Pull Quote -->
        <div id="pull-quote" class="widget">
            <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
        </div>
<?php endif; ?>
        
<!-- Begin Widgets -->        
<?php dynamic_sidebar(1) ?> 
<?php dynamic_sidebar(jeanine) ?>
        
            

    </div>
</div>
<!--END RIGHT COL -->
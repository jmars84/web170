<!--START RIGHT COL -->
    <div id="sidebar" class="others">
    <div class="vertical-menu">
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
        
    </div>
</div>
<!--END RIGHT COL -->
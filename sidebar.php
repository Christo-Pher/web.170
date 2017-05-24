<!-- start sidebar -->    
<aside>
    
    <!-- here is a completely unnecessary wp_list_pages function for the sole purpose of meeting Mike's assignment requirements. -->
    
    <h3><?php
    
    if(is_page()) {
        
        echo get_the_title($post->post_parent);
        
    } else {
        
        echo 'Blog';
        
    }
    
    ?></h3>
    
    <ul class="sub-navigation-items">
    <?php 
        
    if(is_page()) {
    
        if($post->post_parent) {

            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''),)); 

        } else {

            wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));

        }
    
    } else {
        
            wp_list_categories(array('title_li' => '',));

    }
    
    ?>
    </ul>
    
    <?php if(get_post_meta($post->ID, 'quote', true)) : ?>
    <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
    <?php endif; ?>
    
    <?php dynamic_sidebar(1); ?>
    
    <h3 class="sidebar-header">Product Reviews:</h3>
    
    <!-- start product review feed -->
    
    <?php rewind_posts(); ?>
    <?php query_posts(array('category__in' => 8 , 'posts_per_page' => '3')); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="product-review-container">
    <div class="pr-img">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('sidebar-img'); ?></a>
    </div>
    <h4 class="product-review-header"><a href="<?php the_permalink(); ?>" class="sidebar-link"><?php the_title(''); ?></a></h4>
    <p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="sidebar-link">....READ MORE</a></p>
    </div>
    <?php endwhile; endif ; ?>
    
    <!-- end product review feed -->
    
</aside>
<!-- end sidebar --> 
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
    
    <h3 class="sidebar-header">Product Reviews:</h3>
    
    <!-- start product review feed --> 
    <div class="product-review-container">
        <div class="pr-img">
        <a href="product-review-osprey-kestrel.php"><img src="<?php bloginfo('template_directory'); ?>/images/osprey-kestrel.jpg" alt="Osprey Kestrel Backpack" class="product-review-thumbnail"></a>
        </div>
        <h4 class="product-review-header"><a href="product-review-osprey-kestrel.php" class="sidebar-link">Osprey Kestrel 38 Bag</a></h4>
        <p>Tattooed fam activated charcoal, brooklyn cronut ramps four loko celiac beard tousled. Gentrify tacos chambray brooklyn jean shorts godard. Stumptown green juice typewriter, tbh squid tumeric brooklyn put a bird on it brooklyn tots cliche glossier....<a href="product-review-osprey-kestrel.php" class="sidebar-link">READ MORE</a></p> 
    </div>
    
    <div class="product-review-container">
        <div class="pr-img">
        <a href="product-review-steripen.php"><img src="<?php bloginfo('template_directory'); ?>/images/steripen.jpg" alt="Steripen Water Purifier" class="product-review-thumbnail"></a>
        </div>
        <h4 class="product-review-header"><a href="product-review-steripen.php" class="sidebar-link">Steripen Water Purifier</a></h4>
        <p>tote bag pinterest crucifix art party direct trade keytar migas. Kale chips cold-pressed cronut YOLO leggings DIY occupy. Plaid unicorn street art skateboard yr, disrupt squid gentrify crucifix leggings.  Wolf marfa post-ironic pok pok gobbldigook foop.....<a href="product-review-steripen.php" class="sidebar-link">READ MORE</a></p>
    </div>
    
    <div class="product-review-container">
        <div class="pr-img">
        <a href="product-review-creative-edge.php"><img src="<?php bloginfo('template_directory'); ?>/images/creative-edge-solar-charger.jpg" alt="Creative Edge Solar Charger" class="product-review-thumbnail"></a>
        </div>
        <h4 class="product-review-header"><a href="product-review-creative-edge.php" class="sidebar-link">Creative Edge Solar Charger</a></h4>
        <p>Direct trade keytar migas. Kale chips cold-pressed leggings DIY occupy. Plaid readymade unicorn street art skateboard yr, disrupt squid gentrify crucifix leggings. XOXO brooklyn cronut ramps four loko celiac beard tousled. Gentrify tacos chambray brooklyn jean shorts zots godard....<a href="product-review-creative-edge.php" class="sidebar-link">READ MORE</a></p>
    </div>
    <!-- end product review feed --> 
    
</aside>
<!-- end sidebar --> 
<?php get_sidebar() ?>

<!-- start footer --> 
<footer>
    
    <div class="footer-container">
    
    <div class="social-media-container-footer">
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.svg" class="social-media-icon"></a>
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/Twitter.svg" class="social-media-icon"></a>
    </div>
    
    <div class="footer-ul-1">
    <h6>Annual Itineraries</h6>
    <ul>
        <li><a href="itineraries-kenya.php">Lewa Conservancy - Kenya</a></li>
        <li><a href="itineraries-canada.php">Polar Bear Expedition - Canada</a></li>
        <li><a href="itineraries-nepal.php">Tihar Festival - Nepal</a></li>
        <li><a href="itineraries-costa-rica.php">Kekoldi Reserve - Costa Rica</a></li>
    </ul>    
    </div>
        
    <div class="footer-ul-2">
    <h6>Product Reviews</h6>
    <ul>
        <li><a href="product-review-osprey-kestrel.php">Osprey Kestrel Backpack</a></li>
        <li><a href="product-review-steripen.php">Steripen Water Purifier</a></li>
        <li><a href="product-review-creative-edge.php">Creative Edge Solar Charger</a></li>
    </ul>
    </div>
        
    <div class="footer-ul-3">
    <h6>Travel Tips</h6>
    <ul>
        <li><a href="product-reviews.php">Product Reviews</a></li>
        <li><a href="gearlist.php">Gearlist: Packing Tips</a></li>
        <li><a href="plan-a-trip.php">Planning Your Next Big Trip</a></li>
    </ul>
    </div>
    
    </div>
        
</footer>
<!-- end footer --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script defer src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/ght.js"></script>
<script type="text/javascript">
   
    //load flex-slider  
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshowSpeed: 5500,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
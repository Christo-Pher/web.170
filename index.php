<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="http://christophercornwell.net/projects/good-human-travel/images/ght-favicon.png">
<title>blah blah blah</title>
<meta name="description" content="Good Human Travel is changing the way people experience culture.  We do this by sharing sustainable travel techniques, helping tavelers support local economies, and through volunteer work at local nature conservancies and/or human rights organizations." />
<meta name="keywords" content="Ecotourism, Sustainable Travel, Volunteer Work, Voluntourism, Wildlife Protection, Nature Conservancy, International Culture, Human's Rights." />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/south-street/jquery-ui.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/form.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>

<?php wp_head(); ?>    

</head>

<body <?php body_class(); ?>>

<!-- start header -->
    <div class="header-container">
        <a href="home.php"><img src="<?php bloginfo('template_directory'); ?>/images/GHT.svg" class="logo" alt="Good Human Travel" /></a>
        <div class="header">
            <div class="social-media-container">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.svg" class="social-media-icon"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/Twitter.svg" class="social-media-icon"></a>
            </div>
        <h1 class="tagline">"an illuminating new<br class="tag-break"/> perspective on travel"</h1>
            
         
        <div class="nav-container">
        <a href="#"><img id="sandwich" src="<?php bloginfo('template_directory'); ?>/images/sandwich.svg" /></a>
            
        <!-- start static navigation
        <div class="nav">
        <ul>
            <li><a href="about.php">about</a></li><br/>
            <li class="dropdown"><a class="dropbtn" href="#">itineraries</a>
                <div class="dropdown-content">
                <a href="itineraries-kenya.php">spring - kenya</a><br/>
                <a href="itineraries-canada.php">summer - canada</a><br/>
                <a href="itineraries-nepal.php">fall - nepal</a><br/>
                <a href="itineraries-costa-rica.php">winter - costa rica</a><br/>
                </div>
            </li><br/>    
            <li><a href="travel-blog.php">travel blog</a></li><br/>
            <li><a href="get-involved.php">get involved</a></li><br/>
            <li class="dropdown"><a class="dropbtn" href="#">travel tips</a>
                <div class="dropdown-content">
                <a href="product-reviews.php">product reviews</a><br/>
                <a href="gearlist.php">gearlist: packing tips</a><br/>
                <a href="plan-a-trip.php">planning a trip</a><br/>
                </div>
            </li><br/>
            <li><a href="contact.php">contact</a></li>
        </ul>
        </div>
        end static navigation -->
            
        <!-- begin wordpress menu -->
        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'nav')); ?>    
        <!-- end wordpress menu -->   
            
        </div>
         
            
        
            
        </div>
    </div>
<!-- end header -->
<!-- start main article -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
	<article id="article-<?php the_ID ?>" class="article">
    <img src="<?php bloginfo('template_directory'); ?>/images/ho-chi-minh.jpg" class="main-header-img" />
    <div class="article-wrap">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
    <?php the_content(); ?>
    <?php endwhile; endif ; ?>
    <?php if(is_404()) {echo 'Sorry, dude.'; } ?>
    </div>
    </article>   

<!-- end main article -->

<!-- start sidebar -->    
<aside>
    
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
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/ght.js"></script>
<?php wp_footer(); ?>
</body>
</html>
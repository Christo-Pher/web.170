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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/form.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" />
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
<?php get_header(); ?>

<!-- start flexslider --> 
<div class="carousel-container">
    
        <div class="flexslider">
          <ul class="slides">
            <li>
            <a href="itineraries-kenya.php"><img src="<?php bloginfo('template_directory'); ?>/images/kenya.jpg" alt="Kenya" title="Kenya" /></a>
            </li>
            <li>
            <a href="itineraries-canada.php"><img src="<?php bloginfo('template_directory'); ?>/images/canada.jpg" alt="Canada" title="Canada" /></a>
            </li>
            <li>
            <a href="itineraries-nepal.php"><img src="<?php bloginfo('template_directory'); ?>/images/nepal.jpg" alt="Nepal" title="Nepal" /></a>
            </li>
            <li>
            <a href="itineraries-costa-rica.php"><img src="<?php bloginfo('template_directory'); ?>/images/costa-rica.jpg" alt="Costa Rica" title="Costa Rica" /></a>
            </li>
          </ul>
        </div>
    
    <a href="sign-up.php"><img src="<?php bloginfo('template_directory'); ?>/images/carousel-cta.svg" class="carousel-cta"/></a>
</div>
    
<!-- end flexslider -->

<!-- start main article -->


<?php query_posts(array('posts_per_page' => '3')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
	<article id="article-<?php the_ID ?>" class="article">
    <div class="article-wrap">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <?php the_content(); ?>
    <?php endwhile; endif ; ?>
    </div>
    </article>

<!-- end main article -->

<?php get_footer(); ?>
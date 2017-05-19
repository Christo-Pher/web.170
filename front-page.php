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

<article id="article-<?php the_ID ?>" class="article">
    <div class="article-wrap">

<!-- start about us query -->

    <h2>Welcome</h2>
    <?php rewind_posts(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>

<!-- finish about us query -->


<!-- start blog posts -->

    <?php rewind_posts(); ?>
    <?php query_posts(array('posts_per_page' => '4')); ?>   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h4>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> by <?php the_author(); ?></small><br>
    <div class="thumbnail-excerpt-container">
    <a href="<?php the_permalink(); ?>"><?php if (class_exists('MultiPostThumbnails')) :
    MultiPostThumbnails::the_post_thumbnail( get_post_type(), 'secondary-image' ); endif; ?></a>
    <p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">....READ MORE</a></p>
    </div>
    <?php endwhile; endif ; ?>
    <small>front-page.php</small>

<!-- finish blog posts -->

    </div>
</article>

<!-- end main article -->

<?php get_footer(); ?>
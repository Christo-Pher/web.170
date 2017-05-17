<?php get_header(); ?>
    
<!-- start main article -->

            
	<article id="article-<?php the_ID ?>" class="article">
    <div class="article-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> by <?php the_author(); ?></small><br>
    <div class="thumbnail-excerpt-container">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('my-thumb'); ?></a>
    <p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">....READ MORE</a></p>
    </div>
    <?php endwhile; endif ; ?>
    <small>index.php</small>
    </div>
    </article>   

<!-- end main article -->

<?php get_footer(); ?>
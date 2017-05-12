<?php get_header(); ?>
    
<!-- start main article -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
	<article id="article-<?php the_ID ?>" class="article">
    <div class="article-wrap">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <?php the_content(); ?>
    <?php endwhile; endif ; ?>
    <small>page.php</small>
    </div>
    </article>   

<!-- end main article -->

<?php get_footer(); ?>
<?php get_header(); ?>
    
<!-- start main article -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
	<article id="article-<?php the_ID ?>" class="article">
    <div class="article-wrap">
    <h2><?php the_title(''); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; endif ; ?>
    <small>page.php</small>
    </div>
    </article>   

<!-- end main article -->

<?php get_footer(); ?>
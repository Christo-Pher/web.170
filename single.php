<?php get_header(); ?>
    
<!-- start main article -->

           
	<article id="article-<?php the_ID ?>" class="article">
    <?php the_post_thumbnail('blogpost-header-img'); ?>
    <div class="article-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
    <h2><?php the_title(''); ?></h2>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <?php the_content(); ?>
    <?php endwhile; endif ; ?>
    <small>single.php</small>
    </div>
    </article>   

<!-- end main article -->

<?php get_footer(); ?>
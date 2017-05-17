<?php

/* 
Theme Name: Good Human Travel
Theme URI: https://github.com/Christo-Pher/web.170
Author: Christopher Cornwell
Author URI: http://christophercornwell.net/
Description: This is the theme I've created for Good Human Travel, a local eco-tourism startup.
Version: 1.0
*/

//register navigation menu
register_nav_menus(array('main-menu' => __('Main Navigation')));

//add featured image and post thumbnail support
add_theme_support('post-thumbnails');

add_image_size('my-thumb', 260, 173, true);
add_image_size('blogpost-header-img', 660, 300);

//this function to add a second featured image isn't working.  outdated plugin?
add_filter( 'kdmfi_featured_images', function( $featured_images ) {
    $args = array(
        'id' => 'featured-image-2',
        'desc' => 'Your description here.',
        'label_name' => 'Featured Image 2',
        'label_set' => 'Set featured image 2',
        'label_remove' => 'Remove featured image 2',
        'label_use' => 'Set featured image 2',
        'post_type' => array( 'page' ),
    );

    $featured_images[] = $args;

    return $featured_images;
});

?>
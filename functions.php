<?php

/* 
Theme Name: Good Human Travel
Theme URI: https://github.com/Christo-Pher/web.170
Author: Christopher Cornwell
Author URI: http://christophercornwell.net/
Description: This is the theme I've created for Good Human Travel, a local eco-tourism startup.
Version: 1.0
*/

//register widgets
register_sidebars(3, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

//register navigation menu
register_nav_menus(array('main-menu' => __('Main Navigation')));

//add featured image and post thumbnail support
add_theme_support('post-thumbnails');

set_post_thumbnail_size(260, 173, true);
add_image_size('blogpost-header-img', 660, 300);
add_image_size('sidebar-img', 280);

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Secondary Image',
            'id' => 'secondary-image',
            'post_type' => 'post'
        )
    );
}

?>
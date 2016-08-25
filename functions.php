<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 
// 

add_theme_support( 'post-thumbnails' ); 

set_post_thumbnail_size( 138, 138, true );
add_image_size( 'gallery-thumb', 138, 138, true ); // gallery thumbnails on category pages
add_image_size( 'bannerspace', 958, 300, true );
add_image_size( 'post-featured', 552, 9999 ); // full size will open in lightbox; 
add_image_size( 'large-thumb', '575', '575', array( "1", "") );

function custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * (C)2008 savride.wordpress.com
 * @return String cut to needed length and with suffix if need one
 * for example "..." as default or "<a href=" or what you just enter
 * @param $_str Object given string
 * @param $_len Object new length to set
 * @param $_more Object[optional] suffix string instead of "..." fe. <a href="http://set_some.link.com">Link name set</a>
  * @param $_cnt_words - cut to given words NUM - UPDATE
 */

function _str_cut( $_str, $_len, $_more = " ...", $_cnt_words = false, $_separator = " ")
{
  $_str = strip_tags( $_str );

  // return by WORD COUNT - update
  if( $_cnt_words )
  {
  $_new_str = "";

  if( $_cnt_words == 1)
    return strtok( $_str, $_separator );

    $_new_str .= $_separator.strtok( $_str, $_separator );

    while( $_cnt_words > 0 )
     {
     $_new_str .= $_separator.strtok( $_separator );
     $_cnt_words--;
     }
   return trim($_new_str, $_separator);
  }
  // return by WORD COUNT - update

  $_start_len = strlen( $_str);
  $_new_len   = $_len - strlen( strip_tags($_more)); 
 
  if ( $_start_len >= $_new_len)
    {
    $_str = substr( $_str, 0, $_new_len);
    $_str = preg_replace( '/\s+[^\s]+?$/', "", $_str);
    $_str .= " ".$_more;
    }
 
  return( $_str);
}
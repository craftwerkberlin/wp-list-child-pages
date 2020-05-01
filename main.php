<?php
/*Plugin Name: WP List Child Pages
Plugin URI: https://bootscore.me/plugins/
Description: List WordPress child pages in a parent page. [bootscore_childpages]
Version: 1.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/







// List Child Pages
function bootscore_list_child_pages() { 
 
global $post; 
 
if ( is_page() && $post->post_parent )
 
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
 
if ( $childpages ) {
 
    $string = '<ul>' . $childpages . '</ul>';
}
 
return $string;
 
}
 
add_shortcode('bootscore_childpages', 'bootscore_list_child_pages');

// List Child Pages End

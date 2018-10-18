<?php

function my_recent_posts_shortcode($atts){
 $q = new WP_Query(
   array( 'orderby' => 'date', 'posts_per_page' => '5', 'cat' => '7')
 );

$list = '<div class="bxslider">';

while($q->have_posts()) : $q->the_post();

 $list .= '<div>' . '<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a><div class="caption"><h3>' . get_the_title() . '</h3><p>' . get_the_excerpt() . '</p><a class="button danger right" href="'. get_permalink() .'">Read More &raquo;</a></div></div>' ;

endwhile;

wp_reset_query();

return $list . '</div>';

}

add_shortcode('recent-posts', 'my_recent_posts_shortcode');

// Recent Videos

function my_video_shortcode($atts){


$rows = get_field('youtube_video_links', 'option');
if($rows)
{
    $vid = '<div class="videos">';

    foreach($rows as $row)
    {
        $vid .= '<div class="small-12 medium-6 large-6 columns vid-yo"> <iframe width="100%" height="330" src="' . $row['video_link'] . '?rel=0&amp;controls=0&amp;showinfo=0?ecver=1&amp" frameborder="0" allowfullscreen></iframe>  <p>' . $row['video_name'] .'</p></div>';
    }

    $vid .= '</div>';
}

    return $vid;
}

add_shortcode('my-videos', 'my_video_shortcode');


register_sidebar( array(
'name' => 'Footer 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer 4',
'id' => 'footer-sidebar-4',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer 5',
'id' => 'footer-sidebar-5',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );


// Function to add subscribe text to posts and pages
 // function social_links_shortcode() {

 //   return '<a href="https://www.facebook.com/FertilityandEndocrineAssociates" class="social-links" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="http://www.pinterest.com/ivfky/" class="social-links" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> <a href="http://www.pinterest.com/ivfky/" class="social-links" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
//	
// add_shortcode('social-links', 'social_links_shortcode');


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Home Slider',
        'menu_title'    => 'Home Slider',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Video Settings',
        'menu_title'    => 'Videos',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}


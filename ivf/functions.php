<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');


register_sidebar( array(
	'name' => 'Footer 1',
	'id' => 'footer-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Footer 2',
	'id' => 'footer-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Footer 3',
	'id' => 'footer-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Footer 4',
	'id' => 'footer-4',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );


function my_recent_posts_shortcode($atts){
 $q = new WP_Query(
   array( 'orderby' => 'date', 'posts_per_page' => '4')
 );

$list = '<ul class="recent-posts">';

while($q->have_posts()) : $q->the_post();

 $list .= '<li>' . '<a href="' . get_permalink() . '"><span class="date">' . get_the_date('M j') . '</span><p class="entry-title">' . get_the_title() . '</p><p>' . get_the_excerpt() . '</p></a></li>' ;

endwhile;

wp_reset_query();

return $list . '</ul>';

}

add_shortcode('recent-posts', 'my_recent_posts_shortcode');





?>
<?php

/*
Template Name: Treatment Options
*/

get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>

	<div class="small-12 large-4 columns" id="sidebar" role="complementary">
		<h3>Treatment Options</h3>
		<?php

		    global $post;
			if(wp_get_post_parent_id( $post->ID ))
			{
			    $nav = array(
			        'post_type' => 'page',
			        'orderby' => 'title',
			        'order' => 'ASC',
			        'post_parent' => wp_get_post_parent_id( $post->ID )
			    );
			}
			else{
			    $nav = array(
			    'post_type' => 'page',
			    'orderby' => 'title',
			    'order' => 'ASC',
			    'post_parent' => $post->ID
			    );
			}
			$child_pages = get_posts($nav); ?>
			
	</div>
	<?php //get_sidebar(); ?>
		
<?php get_footer(); ?>

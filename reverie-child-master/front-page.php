<?php

get_header(); ?>

	</div>
</div>

<?php //echo do_shortcode('[recent-posts]'); ?>

<?php 

$images = get_field('slides', 'option');

if( $images ): ?>
    <div class="bxslider">
        
            <?php foreach( $images as $image ): ?>
               
                	<div>
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    <div class="caption">
	                    	<h3><?php echo $image['title']; ?></h3>
	                    	<p><?php echo $image['caption']; ?></p>
	                    	<a class="button danger right" href="<?php echo $image['description']; ?>">Read More &raquo;</a>
	                    </div>
                	</div>
            	
            <?php endforeach; ?>
        
    </div>
<?php endif; ?>

	
	<div class="clearfix"></div>
	<section id="learn-about-fertility">
		<div class="section-heading">
			<div class="heading-container row">
				<h2 style="margin-top: -20px;">Learn About Fertitlity</h2>
			</div>
		</div>
		<div class="big-content">
			<div class="big-content-content small-6 medium-6 small-12 columns">
				<h3>What is infertility?</h3>
				<p>Infertility is defined as the inability to become pregnant after one year of trying for women less than 35 years of age or after six months of trying for women over 35. Women who are able to become pregnant but cannot stay pregnant may also be infertile. About 10 percent of women ages 15-44 in the United States have difficulty getting pregnant or staying pregnant, according to the CDC. Approximately 15% of American women of childbearing age receive care for infertility each year.</p>

				<p>Both women and men can have problems that cause infertility. About one-third of infertility cases involve problems with the female, one-third are due to problems with the male, and the other cases are due to a mixture of male and female problems or unknown problems.</p>

				<a class="button danger right" href="#0">Learn More &raquo;</a>
			</div>
			<div class="big-content-img small-6 medium-6 small-12 columns">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/11/baby.png" >
			</div>
				
		</div>

	</section>
	<div class="stats">
		<div class="small-12 medium-4 large-4 columns">
			<div class="big-stat primary">
				<span>1<small>st</small></span>
			</div>
			<div class="stat">
				<p>Privately run IVF Laboratory in Kentucky.</p>
			</div>
		</div>

		<div class="small-12 medium-4 large-4 columns">
			<div class="big-stat success">
				<span>50+</span>
			</div>
			<div class="stat">
				<p>Years of proven experience combined between providers.</p>
			</div>
		</div>

		<div class="small-12 medium-4 large-4 columns">
			<div class="big-stat danger">
				<span>400</span>
			</div>
			<div class="stat">
				<p>New patients seen in the 2017 calendar year.</p>
			</div>
		</div>
	</div>

<div class="container" role="document">
	<div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>
</div>

<?php

	$rows = get_field('youtube_video_links', 'options' ); // get all the rows
	$first_row = $rows[0]; // get the first row
	$first_row_video = $first_row['video_link' ]; // get the sub field value 
	$first_row_name = $first_row['video_name' ]; // get the sub field value 
	$first_row_desc = $first_row['video_description' ]; // get the sub field value 

?>

<section id="videos">
	<div class="section-heading">
		<div class="heading-container row">
			<h2 style="margin-top: -20px;"><?php echo $first_row_name; ?></h2>
		</div>
	</div>
	<div class="row" style="margin-top: 40px;">
		<div class="small-12 medium-8 large-8 columns vid-yo"> 
			<iframe width="100%" height="500" src="<?php echo $first_row_video; ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1&amp" frameborder="0" allowfullscreen></iframe> 
		</div>
		<div class="small-12 medium-4 large-4 columns"> 
		<p><?php echo $first_row_desc; ?></p>
		<p><a href="/videos/" class="button danger right">View More Videos &raquo;</a></p>
	</div>
	
</section>



<section id="instafeed">
	<div class="section-heading">
		<div class="heading-container row">
			<h2 style="margin-top: -20px;">Instagram Feed</h2>
		</div>
	</div>
	<div class="row" style="margin-top: 40px;">
		
		<div class="small-12 medium-12 large-12 columns" style="padding: 20px 0 60px 0;"> 
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</div>
	<?php //echo do_shortcode('[my-videos]'); ?>
	
</section>

<div class="testimonial" style="background: url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/11/baby-2266475_1920.jpg'); background-size: 100%;">
	<div class="row quote">
		<blockquote>
			<p>During our IVF cycles and my pregnancies, I spent a lot of time at the office, and everyone was always so kind and caring. We cannot express our gratitude enough to Dr. Homm and Dr. Devine for giving us our three greatest blessings.</p>
			<p class="tester">Ellen B, Louisville, KY</p>
		</blockquote>
	</div>
</div>

<div class="container" role="document">
	<div class="row">		
<?php get_footer(); ?>

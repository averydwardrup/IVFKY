<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<?php wp_head(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script>
	$(function(){
	  $('.bxslider').bxSlider({
	    mode: 'fade',
	    captions: true,
	    responsive: true,
      auto: true,
      touchEnabled: true,
      autoHover: true,
      pause: 8000

	  });
	});

	jQuery(document).ready(function(){
		jQuery(window).scroll(function(){
		    if (jQuery(this).scrollTop() > 220) {
		        jQuery('.contain-to-grid').addClass("sticky");
		    } else {
		        jQuery('.contain-to-grid').removeClass('sticky');
		    }
		});

	});

	jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 50 ) {
        jQuery('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        jQuery('.scrolltop').stop(true, true).fadeOut();
    }
});
jQuery(function(){jQuery(".scroll").click(function(){jQuery("html,body").animate({scrollTop:jQuery(".thetop").offset().top},"1000");return false})})

</script>

</head>

<body <?php body_class('antialiased'); ?>>

<div class="thetop"></div>

<div class="scrolltop">
    <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
</div>

<header class="contain-to-grid">
	<!-- Starting the Top-Bar -->
	<nav class="top-bar" data-topbar>
	    <!--<ul class="title-area">
	        <li class="name">
	        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	        </li> -->
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<!--<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>-->
	    <section class="top-bar-section">
	    	<div class="social large-4 columns">
	    		
	    		<a href="https://www.facebook.com/FertilityandEndocrineAssociates" class="social-links" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="http://www.pinterest.com/ivfky/" class="social-links" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> <a href="https://www.instagram.com/ivfkentucky/" class="social-links" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://www.youtube.com/channel/UCfeeidcsQAm5vyBk3SC0Dyg" class="social-links" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
	    	</div>
	    	<div class="fixed-logo">
	    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/transparent-Logo.png"></a>
	    	</div>
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	    ?>

	    <a class="floating-contact hidden-sm hidden-xs" href="/our-office/contact-us/">Contact Us</a>
	    <?php
	    	//Uncomment the following to enable the right menu (additional menu)
			
	    	/*
	        wp_nav_menu( array(
	            'theme_location' => 'additional',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	        */
	    ?>
	    </section>
	</nav>
	<!-- End of Top-Bar -->

</header>

<section id="main-header">
	<div class="header-logo" style="background: url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/clouds-bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/logo-stacked.png"></a>
							<h3 class="phone-number"><a href="tel:5028972144">502-897-2144</a></h3>
					</div>
				</div>
				
				<div class="large-6 medium-6 small-12 columns hide-for-small">
					<div class="stork">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/stork.png">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom-border" style="background: url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/header-border-bottom.png');"></div>
</section>
<?php if ( is_front_page() ){
	//echo do_shortcode('[recent-posts]'); ?>
	<!--<div class="clearfix"></div>
	<section id="learn-about-fertility">
		<div class="section-heading">
			<div class="heading-container row">
				<h2 style="margin-top: -20px;">Learn About Fertitlity</h2>
			</div>
		</div>
		<div class="big-content">
			<div class="big-content-content small-6 medium-6 columns">
				<h3>What is infertility?</h3>
				<p>Infertility is defined as the inability to become pregnant after one year of trying for women less than 35 years of age or after six months of trying for women over 35. Women who are able to become pregnant but cannot stay pregnant may also be infertile. About 10 percent of women ages 15-44 in the United States have difficulty getting pregnant or staying pregnant, according to the CDC. Approximately 15% of American women of childbearing age receive care for infertility each year.</p>

				<p>Both women and men can have problems that cause infertility. About one-third of infertility cases involve problems with the female, one-third are due to problems with the male, and the other cases are due to a mixture of male and female problems or unknown problems.</p>

				<a class="button success" href="#0">Learn More &raquo;</a>
			</div>
			<div class="big-content-img small-6 medium-6 columns">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/11/baby-img.png" >
			</div>
				
		</div>

	</section>-->

	<div class="clearfix"></div>
<?php }?>
<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">
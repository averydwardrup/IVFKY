	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		
		<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1" class="large-6 medium-6 small-12 columns" style="margin-bottom: 15px;">
				<?php
					if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
					}
				?>
			</div>
			<div id="footer-sidebar2" class="large-6 medium-6 small-12 columns">
				<?php
					if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
					}
				?>
			</div>
		</div>
	</div>
</div>
<footer class="full-width" role="contentinfo" style="background: url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/clouds-bg.jpg');">
	<div class="row">
		<div class="large-3 medium-6 columns">
			<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2017/10/logo-stacked.png"></a>
							<h3 class="show-for-small-only" style="text-align: center;"><a href="tel:5028972144">502.897.2144</a></h3>
							<h3 style="text-align: center;">502.897.2144</h3>
					</div>
		</div>

		<div id="footer-sidebar3" class="large-3 medium-6 small-12 columns">
				<?php
					if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
					}
				?>
		</div>

		<div id="footer-sidebar4" class="large-3 medium-6 small-12 columns">
				<?php
					if(is_active_sidebar('footer-sidebar-4')){
						dynamic_sidebar('footer-sidebar-4');
					}
				?>
		</div>

		<div id="footer-sidebar5" class="large-3 medium-6 small-12 columns">
				<?php
					if(is_active_sidebar('footer-sidebar-5')){
						dynamic_sidebar('footer-sidebar-5');
					}
				?>
		</div>
		
		<?php dynamic_sidebar("Footer"); ?>
		
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>
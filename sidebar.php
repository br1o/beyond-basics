<?php
/*
@package WordPress
@subpackage Beyond Basics
@author Bruno Bichet <bruno.bichet@gmail.com>
@version 0.3.2
@since Version 0.2
@todo Check the markup http://validator.w3.org/
For Those About to Rock. Fire!
*/
?>
	<?php if ( is_active_sidebar( 'war-3' ) ) : ?>
		<aside id="sidebar-0" class="sidebar" role="complementary">
			<section id="widget-area-3" class="widget">	
				<?php dynamic_sidebar( 'war-3' ); ?>
			</section> <!-- eo #widget-area-3 .widget -->
		</aside>
	<?php endif; ?>
	
		<?php echo basics_searchform(); ?>
		
	<?php if ( ! is_singular() ) : ?>
		<?php get_sidebar( '2' ); ?>
	<?php endif; ?>
	
		<?php get_sidebar( '3' ); ?>
		
	<?php if ( is_active_sidebar( 'war-4' ) ) : ?>
		<aside id="sidebar-4" class="sidebar" role="complementary">
			<section id="widget-area-4" class="widget">
				<?php dynamic_sidebar( 'war-4' ); ?>
			</section> <!-- eo #widget-area-4 .widget -->
		</aside>
	<?php endif; ?>
<?php
/*
@package WordPress
@subpackage Beyond Basics
@author Bruno Bichet <bruno.bichet@gmail.com>
@version 0.3.2
@since Version 0.1
@todo Check the markup http://validator.w3.org/
For Those About to Rock. Fire!
*/
?>
<?php get_header(); ?>
		<div id="main">
			<section role="main">
				<?php get_template_part( 'content', '404' ); ?>
			</section>
		</div> <!-- eo #main -->
		<div id="sidebar">
		<?php if ( is_active_sidebar( 'war-3' ) ) : ?>
			<section id="widget-area-3" class="widget">
				<?php dynamic_sidebar( 'war-3' ); ?>
			</section> <!-- eo #widget-area-3 .widget -->
		<?php endif; ?>
			<?php echo basics_searchform(); ?>
            <?php get_sidebar( '2' ); ?>
            <?php get_sidebar( '3' ); ?>
		<?php if ( is_active_sidebar( 'war-4' ) ) : ?>
			<section id="widget-area-4" class="widget">
				<?php dynamic_sidebar( 'war-4' ); ?>
			</section> <!-- eo #widget-area-4 .widget -->
		<?php endif; ?>
		</div> <!-- eo #sidebar -->
<?php get_footer(); ?>
  

<?php
/*
@package WordPress
@subpackage Beyond Basics
@author Bruno Bichet <bruno.bichet@gmail.com>
@version 0.2
@since Version 0.2
@todo Check the markup http://validator.w3.org/
For Those About to Rock. Fire!
*/
?>
				<aside id="sidebar-2" class="sidebars" role="complementary">

					<h1 class="section-title"><?php _e('Aside Sidebar 2', 'basics' ); ?></h1>
					
				<?php if ( is_active_sidebar( 'war-7' ) ) : ?>
					<section id="widget-area-7" class="widget">
						<h1 class="section-title"><?php _e('Section widget area 7', 'basics' ); ?></h1>
						<?php dynamic_sidebar( 'war-7' ); ?>
					</section> <!-- eo #widget-area-7 .widget -->
				<?php endif; ?>

					<section id="widget-area-8" class="widget">
						<h1 class="section-title"><?php _e('Section widget area 8', 'basics' ); ?></h1>
				<?php if ( ! dynamic_sidebar( 'war-8' ) ) : ?>
						<div id="basics-archives">
							<h2><?php _e( 'Archives', 'basics' ); ?></h2>
							<ul><?php wp_get_archives( array( 'type' => 'monthly' ) ); ?></ul>
						</div>
				<?php endif; ?>
					</section> <!-- eo #widget-area-8 .widget -->
					
				</aside> <!-- eo #sidebar-2 .sidebars -->
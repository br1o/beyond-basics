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
				<aside id="sidebar-3" class="sidebars" role="complementary">

					<h1 class="section-title"><?php _e('Aside Sidebar 3', 'basics' ); ?></h1>
					
				<?php if ( is_active_sidebar( 'war-9' ) ) : ?>
					<section id="widget-area-9" class="widget">
						<h1 class="section-title"><?php _e('Section widget area 9', 'basics' ); ?></h1>
						<?php dynamic_sidebar( 'war-9' ); ?>
					</section> <!-- eo #widget-area-9 .widget -->
				<?php endif; ?>

					<section id="widget-area-10" class="widget">
						<h1 class="section-title"><?php _e('Section widget area 10', 'basics' ); ?></h1>
				<?php if ( ! dynamic_sidebar( 'war-10' ) ) : ?>
						<div id="basics-categories">
							<h2><?php _e( 'Categories', 'basics' ) ; ?></h2>
							<?php $args = array(
							'use_desc_for_title' => 0,
							'title_li' => ''
							); ?>
							<ul><?php wp_list_categories( $args ); ?></ul>
						</div>
				<?php endif; ?>
					</section> <!-- eo #widget-area-10 .widget -->
					
				</aside> <!-- eo #sidebar-3 .sidebars -->
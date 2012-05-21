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
<?php get_header(); ?>
        <div id="main">
			<section role="main">
			<?php if ( have_posts() ) : ?>
				<header>
					<hgroup>
						<?php $section = basics_section_heading(); ?>
						<h1 class="section-title"><?php echo $section['section_title']; ?></h1>
						<h2 class="section-description"><?php echo $section['section_description']; ?></h2>
					</hgroup>
				</header>
					<?php basics_content_nav( 'nav-above', 'menu' ); ?>			
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
					<?php basics_content_nav( 'nav-below', 'menu' ); ?>
			<?php else : ?>
				<header>
					<hgroup>
						<h1 id="entry-result" class="section-title"><?php printf( __( 'No Search Results for: %s', 'basics' ), '<mark>' . get_search_query() . '</mark>' ); ?></h1>
						<h2 class="section-description"><?php _e( 'Sorry, but nothing matched your search criteria.', 'basics' ); ?></h2>
					</hgroup>
				</header>
				<article id="post-0" class="post no-result not-found">
					<div class="entry-content">
						<p class="info help"><?php _e( 'Please try again with some different keywords.', 'basics' ); ?></p>
						<p class="info help"><?php _e( '<strong>Just type in, hit &lt;enter&gt; and let me handle it for you.</strong>', 'basics' ); ?></p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif; ?>
			</section>
        </div> <!-- eo #main -->
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div> <!-- eo #sidebar -->
<?php get_footer(); ?>  
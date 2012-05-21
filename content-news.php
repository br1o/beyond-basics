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
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
					<h1 class="entry-title">
					<?php if ( ! is_singular() ) : // Don't display links when not in singular context ?>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'basics' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?>
						</a>
					<?php else : ?>
						<?php the_title(); ?>
					<?php endif; ?>
					</h1>
                    <?php if ( 'post' == $post->post_type ) : ?>                                     
                    <div class="entry-meta">
                        <?php echo basics_posted_on(); ?>
                    </div>
                    <?php endif; ?>
                </header>
				<?php 
				/* Print a thumbnail
				* Display a placeholder image if thumbnail is missing
				* Thanks to @piouPiouM 
				*/
				$thumb_size = 'thumbnail';
				$thumb_class = 'entry-thumbnail thumb-small';
				?>
				<figure class="<?php echo $thumb_class; ?>">
			<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail( $thumb_size ); /* Check Media settings for default value */ ?>
			<?php else: ?>
					<img src="<?php printf( '%s/img/%s.png', get_bloginfo('template_directory', 'display' ), $thumb_size ); ?>" alt>
			<?php endif; ?>
				</figure>
                <div class="entry-summary">
                    <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'basics' ) ); ?>
                </div> <!-- eo .entry-summary -->
				<footer class="entry-meta">
                    <?php echo basics_posted_in(); ?>
                </footer> <!-- eo #entry-meta -->
            </article> <!-- eo #post-<?php the_ID(); ?> -->
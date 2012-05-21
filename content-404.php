<?php
/*
@package WordPress
@subpackage Beyond Basics
@author Bruno Bichet <bruno.bichet@gmail.com>
@version 0.2.3
@since Version 0.2
@todo Check the markup http://validator.w3.org/
For Those About to Rock. Fire!
*/
?>
            <article id="post-0" class="post error404 not-found">
                <header>
					<hgroup>
						<?php $section = basics_section_heading(); ?>
						<h1 class="section-title"><?php echo $section['section_title']; ?></h1>
						<h2 class="section-description"><?php echo $section['section_description']; ?></h2>
					</hgroup>
                </header>
                <div class="entry-content">
					<?php the_widget( 'WP_Widget_Recent_Posts', 'title='.__('Recent Posts', 'basics').'&number=3', 'widget_id' ); ?>
                    <div class="widget">
                        <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'basics' ); ?></h2>
                        <ul>
                            <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
                        </ul>
                    </div>			
					<?php
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'basics' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1&count=0', "after_title=</h2>$archive_content" );
					?>
					<script>
                        var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),
                        GOOG_FIXURL_SITE = location.host;
                    </script>
                    <script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
                </div> <!-- eo .entry-content -->
            </article> <!-- eo #post-0 -->
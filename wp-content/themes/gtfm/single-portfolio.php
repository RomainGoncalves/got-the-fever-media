<?php
/**
 * Single Portfolio Template
 *
 * @package WP Origin
 * @subpackage Template
 */
 
global $ct_options; 

get_header();

echo '<div id="left-content" class="animated fadeInUpBig col span_12">';

	echo '<header id="archive-header">';
		echo '<h1 class="marB0 marT0 left">';
		echo the_title();
		echo '</h1>';
		echo '<nav class="right">';
		echo '<div class="prev-port left">';
				next_post_link('%link', '<i class="icon-chevron-left"></i>', TRUE);
		echo '</div>';
		echo '<div class="port-grid left">';
		echo '<a href="' . get_home_url() .'/?post_type=portfolio"><i class="icon-th-large"></i></a>';
		echo '</div>';
		echo '<div class="next-port right">';
				previous_post_link('%link', '<i class="icon-chevron-right"></i>', TRUE);
		echo '</div>';
		echo '</nav>';
		echo '<div class="clear"></div>';
	echo '</header>';
	
			if ( have_posts() ) : while ( have_posts() ) : the_post();
	
			echo '<article>';

					if(get_post_meta($post->ID, "_ct_video", true)) {
						echo '<div class="video marB30">';
						echo stripslashes(get_post_meta($post->ID, "_ct_video", true));
						echo '</div>'; 
					} else {
						$attachments = get_children(
							array(
								'post_type' => 'attachment',
								'post_mime_type' => 'image',
								'post_parent' => $post->ID
							));
						if(count($attachments) > 1) {
							echo '<div class="flexslider">';
							echo	'<ul class="slides">';
										ct_slider_images();
							echo	'</ul>';
							echo '</div>';
						} elseif(has_post_thumbnail()) {
							echo '<figure class="marB40">';
									the_post_thumbnail(1100,800);  
							echo '</figure>';
						}
					}
				
				echo '<div class="pad60">';
				
						the_content();
						
						echo '<div class="clear"></div>';
						
						if($ct_options['ct_portfolio_single_info'] == "Yes") { ?>
							<ul id="portfolio-info">
								<?php if(get_post_meta($post->ID, "_ct_client", true)) { ?>
								<li><strong><em>Client:</em></strong> <?php echo get_post_meta($post->ID, "_ct_client", true); ?></li>
								<?php } ?>
								<li><strong><em>Date:</em></strong> <?php the_time($GLOBALS['ctdate']); ?></li>
								<?php if(get_post_meta($post->ID, "_ct_site", true)) { ?>
								<li><em><a href="<?php echo get_post_meta($post->ID, "_ct_site", true); ?>">Visit Site</a></em></li>
								<?php } ?>
							</ul>
						<?php } ?>
					
					<?php endwhile; endif; ?>
					
						<div class="clear"></div>
					
					<nav class="marT30">
						<div class="nav-prev left"><?php next_post_link('%link', '<i class="icon-chevron-left"></i>', TRUE); ?></div>
						<div class="view-grid"><a href="<?php bloginfo('siteurl'); ?>/?post_type=portfolio"><i class="icon-th-large"></i></a></div>
						<div class="nav-next right"><?php previous_post_link('%link', '<i class="icon-chevron-right"></i>', TRUE); ?></div>
							<div class="clear"></div>
					</nav>
						<div class="clear"></div>
						
				   <?php ct_related_portfolio(); ?>
				   
               				
                </div>
	
			</article>
        
<?php

echo '</div>';

get_footer(); ?>
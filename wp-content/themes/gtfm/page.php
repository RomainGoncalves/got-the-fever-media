<?php
/**
 * Page Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

$inside_page_title = get_post_meta($post->ID, "_ct_inside_page_title", true);

get_header();

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
			<?php
			
			echo '<div id="left-content" class="animated fadeInUpBig col span_7">';
			
				echo '<div class="pad60">';
            
					if($inside_page_title == "Yes") {
						echo '<h1 class="entry-title marT0 marB40">';
							the_title();
						echo '</h1>';
					}
					
					the_content();
					
					wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) );
				
				echo '</div>';
            
            endwhile; endif;
            
                echo '<div class="clear"></div>';
				
		 echo '</div>';
				
	echo '<div id="right-content" class="col span_5">';
		get_sidebar();
	echo '</div>';
	
	get_footer();

?>
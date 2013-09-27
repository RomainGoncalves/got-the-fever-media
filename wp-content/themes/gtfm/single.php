<?php
/**
 * Single Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

get_header();

$cat = get_the_category();
$cat = $cat[0];

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
			<?php
			
			echo '<div id="left-content" class="animated fadeInUpBig col span_7">';
            
				get_template_part( 'content', get_post_format() );
            
            endwhile; endif;
            
                echo '<div class="clear"></div>';

				echo '<div id="post-tools" class="pad60">';
				
					ct_related_posts();

					ct_post_nav();
					
					wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) );
					
					if($ct_options['ct_post_comments'] == "Yes" && comments_open()) {
						comments_template( '', true );
					}
				
				echo '</div>';
				
		 echo '</div>';
				
	echo '<div id="right-content" class="col span_5">';
		get_sidebar();
	echo '</div>';
	
	get_footer();

?>
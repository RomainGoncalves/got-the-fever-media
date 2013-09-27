<?php
/**
 * Archive Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

get_header();

echo '<div class="archive">';

        echo '<div id="left-content" class="col span_12">';
		
			echo '<div id="isotope-container">';
			
				echo '<ul class="grid cs-style-3 effect-6">';
				
						if ( have_posts() ) : while ( have_posts() ) : the_post();
				
							get_template_part( 'content', get_post_format() );
							
						endwhile;
					
				echo '</ul>';
			
			echo '</div>';
            
			ct_pagination();
            
            else :
            
                get_template_part( 'content', 'none' );
            
            endif;
        
echo '</div>';

get_footer(); ?>
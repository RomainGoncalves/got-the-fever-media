<?php
/**
 * Portfolio Archive Template
 *
 * @package WP Form
 * @subpackage Template
 */

get_header();
        
		echo '<header class="pad60">';
				ct_tags_nav();
		echo '</header>';
        
        echo '<div id="isotope-container">';
				get_template_part('loop','portfolio');
					echo '<div class="clear"></div>';
        echo '</div>';

echo '</div>';

get_footer(); ?>
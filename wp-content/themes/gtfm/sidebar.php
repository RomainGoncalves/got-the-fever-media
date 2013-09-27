<?php
/**
 * Sidebar Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

echo '<div id="sidebar-widgets">';
    echo '<div class="pad60">';
			
			if(is_page()) {
				if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar Pages') ) :else: endif;
			} elseif(is_single()) {
				if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar Single') ) :else: endif;
			}
				echo '<div class="clear"></div>';
		
    echo '</div>';
echo '</div>';

?>
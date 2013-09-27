<?php
/** Features Block 
 * A simple block that output the "features" HTML */
if(!class_exists('AQ_Portfolio_Block')) {
	class AQ_Portfolio_Block extends AQ_Block {
		
		function __construct() {
			$block_options = array(
				'name' => 'Portfolio',
				'size' => 'span12'
			);
			
			parent::__construct('aq_portfolio_block', $block_options);
		}
		
		function form($instance) {
			$defaults = array(
				'portnum' => '',
			);
			$instance = wp_parse_args($instance, $defaults);
			extract($instance);
			
			?>
			<p class="portnum">
				<label for="<?php echo $this->get_field_id('portnum') ?>">
					<?php _e('Number of items', 'contempo'); ?>
					<?php echo aq_field_input('portnum', $block_id, $portnum) ?>
				</label>
			</p>
			<?php
			
		}
		
		function block($instance) {
			extract($instance);
			
			ct_tags_nav();
        
			echo '<div id="isotope-container">';
					echo '<ul class="grid cs-style-3 effect-6">';
 
						$args = array(
								'post_type'			=> 'portfolio',
								'posts_per_page'	=> $portnum
							);
						$query = new WP_Query($args);
					
					while ( $query->have_posts() ) : $query->the_post(); ?>
						
						<li class="<?php ct_first_term(); ?> item col span_4">
							<?php ct_first_image_linked_portfolio(); ?>
						</li>   
						
					<?php endwhile;
                    
			echo 		'<div class="clear"></div>';
			echo '</div>';
			
		}
		
	}
}


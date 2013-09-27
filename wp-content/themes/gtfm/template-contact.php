<?php
/**
 * Template Name: Contact
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
			
				if($ct_options['ct_contact_map'] == "Yes") {
					contact_us_map();
				}
			
				echo '<div class="pad60">';
            
					if($inside_page_title == "Yes") {
						echo '<h1 class="entry-title marT0 marB40">';
							the_title();
						echo '</h1>';
					}
					
					the_content(); ?>
					
					<form id="contactform" class="formular marT20" method="post">
						<fieldset>
							<div class="input-prepend">
								<label><?php _e('Name', 'contempo'); ?> <span>*</span></label>
								<input type="text" name="name" id="name" class="validate[required,custom[onlyLetter]] text-input" value="" />
							</div>
							
							<div class="input-prepend">
								<label><?php _e('Email', 'contempo'); ?> <span>*</span></label>
								<input type="text" name="email" id="email" class="validate[required,custom[email]] text-input" value="" />
							</div>                                
							
							<label><?php _e('Message', 'contempo'); ?> <span>*</span></label>
							<textarea class="validate[required,length[2,1000]] text-input" name="message" id="message" rows="10" cols="10"></textarea>
							
							<input type="hidden" id="ctyouremail" name="ctyouremail" value="<?php echo $ct_options['ct_contact_email']; ?>" />
							<input type="hidden" id="ctsubject" name="ctsubject" value="<?php echo stripslashes($ct_options['ct_contact_subject']); ?>" />
							
								<div class="clear"></div>
							
							<input type="submit" name="Submit" value="Submit" id="submit" class="btn" />  
						</fieldset>
					</form>
					
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) );
				
				echo '</div>';
            
            endwhile; endif;
            
                echo '<div class="clear"></div>';
				
		 echo '</div>';
				
	echo '<div id="right-content" class="col span_5">';
		get_sidebar();
	echo '</div>';
	
	get_footer();

?>
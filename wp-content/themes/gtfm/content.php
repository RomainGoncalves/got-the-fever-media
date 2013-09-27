<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WP Neuehaus
 * @subpackage Template
 */
 
global $ct_options; 

$post_lead = get_post_meta($post->ID, "_ct_post_lead", true);
$post_title = get_post_meta($post->ID, "_ct_post_title", true);
$post_meta = get_post_meta($post->ID, "_ct_post_meta", true);
$post_social = get_post_meta($post->ID, "_ct_post_social", true);

if(is_single()) {
   
        if(get_post_meta($post->ID, "_ct_video", true)) {
			echo '<div class="video">';
			echo stripslashes(get_post_meta($post->ID, "_ct_video", true));
			echo '</div>'; 
		}
		
		if($post_lead == 'Yes') {
			echo '<div class="post-thumb">';
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
				echo '<figure>';
				the_post_thumbnail(620,200);  
				echo '</figure>';
			}
			echo '</div>';		
		}
		
		echo '<div class="pad60">';
		
			if($post_title == 'Yes') {
				echo '<header id="post-title col span_12 first marB20">';
					echo '<h1 class="entry-title marT0 marB10">';
					echo the_title();
					echo '</h1>';
					get_template_part('includes/post-meta');
				echo '</header>';
			}
			
			the_content();
			
			get_template_part('includes/post-social');
			
				echo '<div class="clear"></div>';
			
		echo '</div>';
	
} else { ?>
    
    <li class="<?php ct_first_term(); ?> item col span_4">
		<?php ct_first_image_linked_portfolio(); ?>
    </li>   

<?php } ?>

<?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) ); ?>    
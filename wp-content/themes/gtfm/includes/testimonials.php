<?php
/**
 * Testimonials
 *
 * @package WP Form
 * @subpackage Include
 */
 
global $ct_options;

$test_num = isset( $ct_options['ct_testimonial_num'] ) ? esc_attr( $ct_options['ct_testimonial_num'] ) : '';
 
	$args = array(
		'post_type' => 'testimonial', 
		'order' => 'DSC',
		'posts_per_page' => $test_num
	);
	$query = new WP_Query($args); ?>
	
<ul class="testimonials marT60">
	
	<?php
	
	while ( $query->have_posts() ) : $query->the_post();
	
	$title = get_post_meta($post->ID, "_ct_person_title", true);
	$business = get_post_meta($post->ID, "_ct_business", true);
	$site_url = get_post_meta($post->ID, "_ct_site_url", true);
	
	?>
	
	<li>
		<div class="col span_3">
			<?php if(has_post_thumbnail()) {
				echo '<figure class="marB5">';
				the_post_thumbnail(200,200);
				echo '</figure>';
			} ?>
		</div>
		<div class="col span_9">
                <div class="padL20">
                <h4 class="marB20"><?php the_content(); ?></h4>
                <h5 class="marB0"><?php the_title(); ?></h5>
                <h6 class="marT3"><?php echo $title; ?> &mdash; <a href="<?php echo $site_url; ?>"><?php echo $business; ?></a></h6>
            </div>
		</div>
            <div class="clear"></div>
	</li>
	
	<?php endwhile; wp_reset_query(); ?>
	
</ul>
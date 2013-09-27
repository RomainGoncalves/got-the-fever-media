<?php 
/**
 * Loop
 *
 * @package WP Capture
 * @subpackage Template
 */
 
global $ct_options;

$archive_num = $ct_options['ct_port_archive_num'];

echo '<ul class="grid cs-style-3 effect-6">';
 
if (have_posts()) {		

	$args = array(
		'post_type'			=> 'portfolio',
		'posts_per_page'	=> $archive_num
	);
	$query = new WP_Query($args);

while ( $query->have_posts() ) : $query->the_post(); ?>
	
    <li class="<?php ct_first_term(); ?> item col span_4">
		<?php ct_first_image_linked_portfolio(); ?>
    </li>   
    
<?php endwhile; ?>

</ul>

<?php } else { ?>

    <p class="nomatches left clear"><?php _e( 'Apologies, but no results were found for the requested archive.<br />Perhaps searching will help find a related post.', 'contempo' ); ?></p>
    
<?php } wp_reset_query(); ?>
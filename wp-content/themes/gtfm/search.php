<?php
/**
 * Archive Template
 *
 * @package WP Form
 * @subpackage Template
 */

get_header();

echo '<header id="archive-header" class="marB40">';
	echo '<div class="container content-fade">';
		echo '<h1 class="marB0 left">';
		echo sprintf( __( 'Search results for: %1$s', 'contempo' ), esc_attr( get_search_query() ) );
		echo '</h1>';
		echo ct_breadcrumbs();
		echo '<div class="clear"></div>';
	echo '</div>';
echo '</header>';

echo '<div class="container content-fade">';

		if($ct_options['ct_layout'] == 'left-sidebar') {
			get_sidebar();
		} ?>

        <div class="col span_9 <div class="col span_9 <?php if($ct_options['ct_layout'] == 'right-sidebar') { echo 'first'; } ?>">

			<?php get_template_part( 'content', get_post_format() ); ?>

        </div>
        
        <?php if($ct_options['ct_layout'] == 'right-sidebar') {
			get_sidebar();
		}
        
echo '</div>';

get_footer(); ?>
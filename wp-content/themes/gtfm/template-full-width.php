<?php
/**
 * Template Name: Full Width
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options; 

$page_title = get_post_meta($post->ID, "_ct_inside_page_title", true);

get_header();

echo '<div class="container">';

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <article class="col span_12">
            
            <?php if($page_title == "Yes") { ?>
                <h1 class="entry-title marT0 marB40"><?php the_title(); ?></h1>
            <?php } ?>
            
			<?php the_content(); ?>
            
            <?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) ); ?>
            
            <?php endwhile; endif; ?>
            
                <div class="clear"></div>

        </article>

<?php 

echo '</div>';

get_footer(); ?>
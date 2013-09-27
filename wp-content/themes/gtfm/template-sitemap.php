<?php
/**
 * Template Name: Sitemap
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options; 

$page_title = get_post_meta($post->ID, "_ct_inside_page_title", true);

get_header();

echo '<div class="pad60">';

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="col span_12">
        
			<?php if($page_title == "Yes") { ?>
                <h1 class="entry-title marT0 marB40"><?php the_title(); ?></h1>
            <?php } ?>
            
			<?php the_content(); ?>
            
            <?php endwhile; endif; ?>
            
            <section class="marT60">
                <div class="singlecol left">
                    <h5 class="marB10"><?php _e('Last Twenty Posts', 'contempo'); ?></h5>
                    <ul>
                    <?php		
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 20
                        );
                        $query = new WP_Query($args);
                    
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php } wp_reset_query(); ?>
                    </ul>                        
                </div>
                
                <div class="singlecol left">
                    <h5 class="marB10"><?php _e('Pages', 'contempo'); ?></h5>
                    <ul>
                        <?php wp_list_pages( 'depth=0&sort_column=menu_order&title_li=' ); ?>		
                    </ul>
                </div>
                
                <div class="singlecol left">
                    <h5 class="marB10"><?php _e('Categories', 'contempo'); ?></h5>
                    <ul>
                        <?php wp_list_categories( 'title_li=&hierarchical=0&show_count=1') ?>	
                    </ul>
                </div>
                
                <div class="singlecol left last">
                    <h5 class="marB10"><?php _e('Posts per category', 'contempo'); ?></h5>
                    <?php
                        $cats = get_categories();
                        foreach ( $cats as $cat ) {
                
                        query_posts( 'cat=' . $cat->cat_ID );
                    ?>
                    <h6 class="marB10"><strong><?php echo $cat->cat_name; ?></strong></h6>
                    <ul>	
                        <?php while ( have_posts() ) { the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } wp_reset_query(); ?>
                </div> 
            </section>
            
                <div class="clear"></div>

        </article>

<?php 

echo '</div>';

get_footer(); ?>
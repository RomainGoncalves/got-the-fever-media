<?php
/**
 * Post Meta
 *
 * @package WP Form
 * @subpackage Include
 */
 
$tags = get_the_tags();
 
 ?>

<div class="post-meta <?php if(is_single()) { echo 'marB40'; } ?>">
    <small class="marT0 marB0"><?php _e('By', 'contempo'); ?> <?php the_author_posts_link(); ?> <?php _e('in', 'contempo'); ?> <?php $cat = get_the_category(); $cat = $cat[0]; ?><a href="<?php echo home_url(); ?>/?cat=<?php echo $cat->cat_ID; ?>"><?php echo $cat->cat_name; ?></a> <?php _e('on', 'contempo'); ?> <?php the_time('M j, Y'); ?> <?php _e('with', 'contempo'); ?> <a href="<?php comments_link(); ?>"><?php comments_number('0 Comments','1 Comment','% Comments'); ?></a></span></small>
</div>
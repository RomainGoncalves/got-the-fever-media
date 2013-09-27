<?php
/**
 * Post Author Info
 *
 * @package WP Form
 * @subpackage Include
 */
 ?>

<div id="authorinfo" class="columns alpha omega marT30 marB20">
    <a href="<?php the_author_meta('url'); ?>"><?php echo get_avatar( get_the_author_meta('email'), '80' ); ?></a>
    <h5 class="marB10"><?php _e('By', 'contempo'); ?>: <a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a></h5>
    <p><?php the_author_meta('description'); ?></p>
        <div class="clear"></div>
</div>
<?php
/**
 * Post Social
 *
 * @package WP Form
 * @subpackage Include
 */
 
global $ct_options;

?>
 
<?php if($ct_options['ct_post_social'] == "Yes") { ?>
    <ul class="post-social marB0">
        <li><a class="facebook" href="javascript:void(0);" onclick="popup('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php _e('Check out this great article on', 'contempo'); ?> <?php bloginfo('name'); ?> &mdash; <?php the_title(); ?>', 'facebook',658,225);"><i class="icon-facebook"></i></a></li>
        <li><a class="twitter" href="javascript:void(0);" onclick="popup('http://twitter.com/home/?status=<?php _e('Check out this great article on', 'contempo'); ?> <?php bloginfo('name'); ?> &mdash; <?php the_title(); ?> &mdash; <?php the_permalink(); ?>', 'twitter',500,260);"><i class="icon-twitter"></i></a></li>
        <li><a class="linkedin" href="javascript:void(0);" onclick="popup('http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php _e('Check out this great article on', 'contempo'); ?> <?php bloginfo('name'); ?> &mdash; <?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>', 'linkedin',560,400);"><i class="icon-linkedin"></i></a></li>
        <li><a class="google" href="javascript:void(0);" onclick="popup('https://plusone.google.com/_/+1/confirm?hl=en&url=<?php the_permalink(); ?>', 'google',500,275);"><i class="icon-google-plus"></i></a></a></li>
    </ul>
<?php } ?>
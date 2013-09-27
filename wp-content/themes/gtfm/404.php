<?php
/**
 * 404
 *
 * @package WP Form
 * @subpackage Template
 */

get_header();
	
echo '<div class="pad60">'; ?>

        <article class="col span_12">
        
            <h1><?php _e('Page Not Found', 'contempo'); ?></h1>
            <p class="lead"><?php _e('Woah there! Looks like you\'ve gotten lost.', 'contempo'); ?></p>
            <a class="btn" href="<?php echo home_url(); ?>">Go back to the homepage</a>

        </article>

<?php

echo '</div>';

get_footer();

?>
<?php
/**
 * Footer Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

?>
                <div class="clear"></div>
            
            </div>
        
    </section>
    
    <?php if($ct_options['ct_tracking_code']) { ?>
        <?php echo stripslashes($ct_options['ct_tracking_code']); ?>
    <?php } ?>

	<?php wp_footer(); ?>
</body>
</html>
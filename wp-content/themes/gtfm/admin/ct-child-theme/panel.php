<?php
/**
 * Page for showing the child theme creation form. (In the Theme > Child Theme submenu.)
 *
 */
?>
<div class="wrap">
    <div id="col-left">
            <div class="col-wrap">
            
                <h2><?php _e('Create a Child Theme','ct-child-theme') ?></h2>
            
                <p class="copy"><?php printf( __( 'Easily create a child theme based on <strong>%s</strong> by filling out this form. This saves you time later when updates are released you don\'t have to worry about overwritting your customizations.', 'ct-child-theme' ), $parent_theme_name ); ?></p>
                
                <p class="copy"><?php printf( __( 'Once you\'ve created your child theme you can modify the CSS via Appearance > Editor. You can also do more advanced customizations, more on that <a href="http://themeshaper.com/modify-wordpress-themes/" target="_blank">here</a>.', 'ct-child-theme' ), $parent_theme_name ); ?>
                
            <?php
            if ( !empty( $error ) ) :
            ?>
                <div class="error"><?php echo $error; ?></div>
            <?php
            endif;
            ?>
    
            <div class="form-wrap">
                <form action="<?php echo admin_url( 'themes.php?page=ct-child-theme-page' ); ?>" method="post" id="create_child_form">
                    <div class="form-field">
                        <label>
                            <?php _e( 'Give your theme a name:', 'ct-child-theme' ) ?>
                            <input type="text" name="theme_name" value="<?php echo $theme_name; ?>" />
                        </label>
                    </div>
                    <div class="form-field">
                        <label>
                            <?php _e( 'Describe your theme:', 'ct-child-theme' ) ?><br />
                            <textarea name="description" value="<?php echo $description; ?>" rows="5" cols="40"/></textarea>
                        </label>
                    </div>
                    <div class="form-field">
                        <label>
                            <?php _e( 'Your Name:', 'ct-child-theme' ) ?>
                            <input type="text" name="author_name" value="<?php echo $author; ?>" />
                        </label>
                    </div>
                    <p class="submit">
                        <input type="submit" class="button-primary" value="<?php _e( 'Create Child', 'ct-child-theme' ); ?>" />
                    </p>
                </form>
            </div>
            
        </div>
    </div>
</div>


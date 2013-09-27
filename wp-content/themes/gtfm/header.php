<?php
/**
 * Header Template
 *
 * @package WP Form
 * @subpackage Template
 */

// Load Theme Options
global $ct_options;

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><html <?php language_attributes(); ?>><![endif]-->
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php ct_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>
    
</head>

<body<?php ct_body_id('top'); ?> <?php body_class(); ?>>

    <div id="masthead-anchor"></div>
    <div id="mobile-header">
        <i id="showLeft" class="icon-reorder"></i>
            <div class="clear"></div>
    </div>

    <section id="sidebar-left" class="col span_2 first">
        
            <?php if($ct_options['ct_text_logo'] == "Yes") { ?>
                
                <div id="logo" class="<?php if(is_home()) { echo 'animated fadeInDown'; } ?>">
                    <h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
                </div>
                
            <?php } else { ?>
                
                <?php if($ct_options['ct_logo']) { ?>
                    <a href="<?php echo home_url(); ?>"><img class="<?php if(is_home()) { echo 'animated fadeInDown'; } ?> logo" src="<?php echo $ct_options['ct_logo']; ?>" alt="<?php bloginfo('name'); ?>" /></a>
                <?php } else { ?>
                    <a href="<?php echo home_url(); ?>"><img class="<?php if(is_home()) { echo 'animated fadeInDown'; } ?> logo" src="<?php echo get_template_directory_uri(); ?>/images/form-logo.png" alt="WP Form, a WordPress theme by Contempo" /></a>
                <?php } ?>
                
            <?php } ?>
            
           <?php ct_nav(); ?>
           
           <div class="<?php if(is_home()) { echo 'animated fadeInUp'; } ?> pad30">
               <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Global Left Sidebar') ) :else: endif; ?>
           </div>
           
                <div class="clear"></div>   
    </section>
    
    <div id="wrapper">
        
        <div id="main-content" class="col span_10">
        
            <div id="main-content-inner">
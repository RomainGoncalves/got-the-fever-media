<?php
/**
 * Functions
 *
 * @package WP Prohibtion
 * @subpackage Admin
 */
 
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Global Left Sidebar',
		'description' => 'Widgets in this area will be shown globally in the left sidebar.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s left">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Right Sidebar Pages',
		'description' => 'Widgets in this area will be shown in the right sidebar area of pages.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s left">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));
 
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Right Sidebar Blog',
		'description' => 'Widgets in this area will be shown in the right sidebar area of archives.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s left">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));
 
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Right Sidebar Single',
		'description' => 'Widgets in this area will be shown in the right sidebar area of single posts.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s left">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));

// Add Automatic Feed Links
add_theme_support( 'automatic-feed-links' );

// Localization Support
load_theme_textdomain( 'contempo', get_template_directory() . '/languages' );
 
$locale = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/*-----------------------------------------------------------------------------------*/
/* Framework Functions
/*-----------------------------------------------------------------------------------*/

// Define some constant paths
define('INC_PATH', get_template_directory() . '/includes/');

// Load Framework
require_once ('admin/index.php');

function ct_is_plugin_active( $plugin ) {
    return in_array( $plugin, (array) get_option( 'active_plugins', array() ) );
}

// PressTrends
global $ct_options;
if($ct_options['ct_presstrends'] == "No") {
//require_once (ADMIN_PATH . 'presstrends.php');	
}

// Update Notifier
require_once (ADMIN_PATH . 'update-notifier.php');

// Child Theme Creator
require_once (ADMIN_PATH . 'ct-child-theme/ct-child-theme.php');

// Fonts
require_once (ADMIN_PATH . 'ct-fonts.php');

// Plugin Activation
require_once (ADMIN_PATH . 'plugins/class-tgm-plugin-activation.php');
require_once (ADMIN_PATH . 'plugins/register.php');

// Aqua Resizer
require_once (ADMIN_PATH . 'aq-resizer/aq_resizer.php');

// Page Builder
require_once (ADMIN_PATH . 'page-builder/page-builder.php');
require_once (ADMIN_PATH . 'page-builder/page-builder-block-functions.php');

// Custom Taxonomies
require_once (ADMIN_PATH . 'ct-custom-taxonomies.php');

// Custom Metaboxes
require_once(ADMIN_PATH . 'metabox/metaboxes.php');

// Theme Functions
require_once (ADMIN_PATH . 'theme-functions.php');

// CT Social Widget
require_once (ADMIN_PATH . 'ct-social/ct-social.php');

// Widgets
require_once (INC_PATH . 'widgets.php');

add_action('wp_head', 'ct_wp_head');

?>
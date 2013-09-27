<?php

global $ct_options;

?>
<style type="text/css">
<?php if(!empty($ct_options['ct_left_sidebar_bg'])) { echo "#sidebar-left { background: " . $ct_options['ct_left_sidebar_bg'] . ";}"; } ?>
<?php if(!empty($ct_options['ct_left_sidebar_nav_bg'])) { echo "#sidebar-left #nav a { background: " . $ct_options['ct_left_sidebar_nav_bg'] . ";}"; } ?>

<?php if(!empty($ct_options['ct_right_sidebar_bg'])) { echo "#sidebar-widgets { background: " . $ct_options['ct_right_sidebar_bg'] . ";}"; } ?>

<?php if(!empty($ct_options['ct_link_color'])) { echo " a, .more, .pagination .current {color: " . $ct_options['ct_link_color'] . ";}"; } ?>
<?php if(!empty($ct_options['ct_visited_color'])) { echo " a:visited {color: " . $ct_options['ct_visited_color'] . ";}"; } ?>
<?php if(!empty($ct_options['ct_hover_color'])) { echo " a:hover, .more:hover, .pagination a:hover {color: " . $ct_options['ct_hover_color'] . ";}"; } ?>
<?php if(!empty($ct_options['ct_active_color'])) { echo " a:active, .more:active, .pagination a:active {color: " . get_option("ct_alink_color", true) . ";}"; } ?>
<?php if(!empty($ct_options['ct_widget_heading_color'])) { echo " .widget > h6:after {background: " . $ct_options['ct_widget_heading_color'] . ";}"; } ?>
<?php if(!empty($ct_options['ct_custom_css'])) { print($ct_options['ct_custom_css']); } ?>
</style>
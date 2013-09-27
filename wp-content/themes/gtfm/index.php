<?php
/**
 * Index Template
 *
 * @package WP Form
 * @subpackage Template
 */
 
global $ct_options;

get_header(); 

	if($ct_options['ct_home_posts'] == 'Posts') {
		get_template_part('archive');
	} else {
		get_template_part('archive', 'portfolio');
	}

get_footer(); ?>
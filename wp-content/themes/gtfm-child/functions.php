<?php

function my_login_stylesheet() { ?>

    <style type="text/css">
        body.login img#background {
		  width: 100%;
		  position: absolute;
		  top: 0;
		  left: 0;
		  z-index: 1;
		}
		body.login div#login{
			position: relative;
			z-index: 12;
		}
		body.login div#login form{
			background: none;
			border: none;
			position: relative;
			top: -296px;
			color: white;
		}
		body.login div#login h1, body.login #nav, body.login #backtoblog{
			position: relative;
			top: -296px;
		}
		body.login #nav, body.login #backtoblog {
			margin-left: 0;
		}
		body.login #nav{
			float: left;
		}
		body.login div#login p#extra{
			padding: 26px 24px 46px;
			background: white;
			position: relative;
			margin-left: 8px;
			opacity: 0.4;
			-webkit-border-radius: 3px;
			border-radius: 3px;
		}
		body.login form label{
			color: white;
		}
    </style>

<?php }

function addImgBg(){

	wp_enqueue_script( 'bg-img', get_stylesheet_directory_uri().'/js/bg-img.js', array('jquery'), $ver = 0.1, $in_footer = true ) ;

}

add_action( 'login_head', addImgBg, $priority = 10 );
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
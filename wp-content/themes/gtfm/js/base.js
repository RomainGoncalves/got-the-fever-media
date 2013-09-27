/**
 * Core
 *
 * @package WP Form
 * @subpackage JavaScript
 */

jQuery.noConflict();

(function($) {
	$(document).ready(function(){
		
		/*-----------------------------------------------------------------------------------*/
		/* Accordian Main Menu */
		/*-----------------------------------------------------------------------------------*/
		
		$('#nav li a').click(function(){
			$('#nav li a').removeClass('selected');
			$('.sub-menu').slideUp();
			$(this).addClass('selected').next('.sub-menu').slideDown();
		});
		
			/*-----------------------------------------------------------------------------------*/
			/* Add drop class to sub-menus */
			/*-----------------------------------------------------------------------------------*/
			
			$('ul.sub-menu').closest('li').addClass('drop');
		
			//$('nav .drop a').after('<i class="icon-chevron-down"></i>');
			$('nav .sub-menu li a').after('<i class="icon-chevron-right"></i>');
		
		/*-----------------------------------------------------------------------------------*/
		/* Slide Left Sidebar for Mobile */
		/*-----------------------------------------------------------------------------------*/
		
		$('#sidebar-left').addClass('cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left');
		
		var menuLeft = document.getElementById( 'sidebar-left' );
		body = document.body;
		
		showLeft.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( menuLeft, 'cbp-spmenu-open' );
			disableOther( 'showLeft' );
		};
		
		function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
		
		/*-----------------------------------------------------------------------------------*/
		/* Testimonials Widget */
		/*-----------------------------------------------------------------------------------*/
		
		$('.widget_ct_testimonials .testimonials').cycle({ 
			fx:     'fade', 
			speed:  'fast', 
			timeout: 0, 
			next:   '.next.test', 
			prev:   '.prev.test' 
		});
		
		/*-----------------------------------------------------------------------------------*/
		/* Portfolio Widget */
		/*-----------------------------------------------------------------------------------*/
		
		$('.widget_ct_portfolio .portfolio').cycle({ 
			fx:     'fade', 
			speed:  'fast', 
			timeout: 0, 
			next:   '.next.port-item', 
			prev:   '.prev.port-item' 
		});
		
		/*-----------------------------------------------------------------------------------*/
		/* Testimonials Block */
		/*-----------------------------------------------------------------------------------*/
		
		$('.aq-block-aq_testimonial_block .testimonials').flexslider({
			animation: "fade",
			animationLoop: true,
			animationSpeed: 600,
			slideshowSpeed: 4000,
			directionNav: false,  
			controlNav: false,
			smoothHeight: true,
		});
		
		/*-----------------------------------------------------------------------------------*/
		/* Symple Skillbar Shortcode */
		/*-----------------------------------------------------------------------------------*/
		
		$('.symple-skillbar').each(function(){
			$(this).find('.symple-skillbar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
		});
		
		/*-----------------------------------------------------------------------------------*/
		/* Initialize FitVids */
		/*-----------------------------------------------------------------------------------*/
		
		$(".container").fitVids();
		
		/*-----------------------------------------------------------------------------------*/
		/* Add class for prev/next icons */
		/*-----------------------------------------------------------------------------------*/
		
		$('.prev-next .nav-prev a').addClass('icon-arrow-left');
		$('.prev-next .nav-next a').addClass('icon-arrow-right');
		
		/*-----------------------------------------------------------------------------------*/
		/* Add Font Awesome Icon to Sitemap list */
		/*-----------------------------------------------------------------------------------*/
		
		$('.page-template-template-sitemap-php #main-content li a').before('<i class="icon-caret-right"></i>');
		
		/*-----------------------------------------------------------------------------------*/
		/* Isotope for portfolio filtering */
		/*-----------------------------------------------------------------------------------*/
		
		var $container = $('#isotope-container');
		$container.imagesLoaded( function(){
			$container.isotope();
		});
		$container.isotope({
			itemSelector: '.item',
			layoutMode: 'fitRows',
			animationOptions: {
				duration: 400,
				easing: 'swing',
				queue: false
			}
		});
		// filter items when filter link is clicked
		$('#tags-nav a').click(function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		});
		
		function wpexPortfolioIsotope() {
			var $container = $('#isotope-container');
				$container.isotope({
				itemSelector: '.item'
			});
		} wpexPortfolioIsotope();
	   
		// Resize
		var isIE8 = $.browser.msie && +$.browser.version === 8;
		if (!isIE8) {
			$(window).resize(function () {
				wpexPortfolioIsotope();
			});
		}
	   
		// Orientation change
		if (window.addEventListener) {
			window.addEventListener("orientationchange", function() {
				wpexPortfolioIsotope();
			});
		}
		
		/*-----------------------------------------------------------------------------------*/
		/* Add last class to every fourth related portfolio item */
		/*-----------------------------------------------------------------------------------*/
		
		$(".single-portfolio .grid li:nth-child(4n+4)").css("margin-right", "0");
		
		/*-----------------------------------------------------------------------------------*/
		/* Add last class to every third related item, and every second testimonial */
		/*-----------------------------------------------------------------------------------*/
		
		$("li.related:nth-child(3n+3), .testimonial-home li:nth-child(2n+1)").addClass("last");
		
		/*-----------------------------------------------------------------------------------*/
		/* Initialize PrettyPhoto */
		/*-----------------------------------------------------------------------------------*/
		
		$("a[rel^='prettyPhoto']").prettyPhoto();
		
		/*-----------------------------------------------------------------------------------*/
		/* Add last class to footer widgets */
		/*-----------------------------------------------------------------------------------*/
		
		$("#latest-shoots li:nth-child(4n)").addClass("omega");

		/*-----------------------------------------------------------------------------------*/
		/* Image overlay on hover */
		/*-----------------------------------------------------------------------------------*/
		
		$(".overlay").css("opacity","0");
		 
		$(".overlay").hover(function () {
			$(this).stop().animate({
			opacity: 0.9
			}, "fast");
			},
			function () {
			$(this).stop().animate({
			opacity: 0
			}, "fast");
		});
		
		/*-----------------------------------------------------------------------------------*/
		/* Fade opacity on images when hovered */
		/*-----------------------------------------------------------------------------------*/
		
		$("#logo, #topbar img, #articles img, .featured-wrap img, #archive article.post img, .post-type-archive-portfolio section img, .single .lead-image, .widget img, #listing-tools a, #featured-listings a img, article a img").hover(function() {
			$(this).stop().animate({opacity: "0.7"}, 'slow');
		},
		function() {
			$(this).stop().animate({opacity: "1"}, 'slow');
		});
		
	});
	
	
})(jQuery);

/*-----------------------------------------------------------------------------------*/
/* Social Popups */
/*-----------------------------------------------------------------------------------*/
	
function popup(pageURL,title,w,h) {
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
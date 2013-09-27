/**
 * CT Mobile Menu
 *
 * @package WP Form
 * @subpackage JavaScript
 */

jQuery(function($){
	$(document).ready(function(){

		$("<select />").appendTo("header#masthead nav");
		$("<option />", {
		   "selected": "selected",
		   "value" : "",
		   "text" : "Go To..."
		}).appendTo("header#masthead nav select");

		$("header#masthead nav a").each(function() {
			var el = $(this);
			if(el.parents('.sub-menu').length >= 1) {
				$('<option />', {
				 'value' : el.attr("href"),
				 'text' : '- ' + el.text()
				}).appendTo("header#masthead nav select");
			}
			else if(el.parents('.sub-menu .sub-menu').length >= 1) {
				$('<option />', {
				 'value' : el.attr('href'),
				 'text' : '-- ' + el.text()
				}).appendTo("header#masthead nav select");
			}
			else {
				$('<option />', {
				 'value' : el.attr('href'),
				 'text' : el.text()
				}).appendTo("header#masthead nav select");
			}
		});

		$("header#masthead nav select").change(function() {
		  window.location = $(this).find("option:selected").val();
		});
	
	});
});
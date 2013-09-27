(function() {
	tinymce.create('tinymce.plugins.ct_shortcodesPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mcect_shortcodes', function() {
				ed.windowManager.open({
					file : url + '/shortcodes_iframe.php', // file that contains HTML for our modal window
					width : 600 + parseInt(ed.getLang('ct_shortcodes.delta_width', 0)), // size of our window
					height : 700 + parseInt(ed.getLang('ct_shortcodes.delta_height', 0)), // size of our window
					inline : 1
				}, {
					plugin_url : url
				});
			});
			 
			// Register ct_shortcodess
			ed.addButton('ct_shortcodes', {title : 'Insert Shortcode', cmd : 'mcect_shortcodes', image: url + '/images/shortcodes.png' });
		},
		 
		getInfo : function() {
			return {
				longname : 'Insert Shortcode',
				author : 'AJ Clarke',
				authorurl : 'http://ctplorer.com',
				infourl : 'http://ctplorer.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	 
	// Register plugin
	// first parameter is the ct_shortcodes ID and must match ID elsewhere
	// second parameter must match the first parameter of the tinymce.create() function above
	tinymce.PluginManager.add('ct_shortcodes', tinymce.plugins.ct_shortcodesPlugin);

})();
<script type="text/javascript">
var TabsDialog = {
	local_ed : 'ed',
	init : function(ed) {
		TabsDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertTabs(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var columns = jQuery('select#gallery-columns').val();
		var image_height = jQuery('input#gallery-image_height').val();
		var exclude = jQuery('input#gallery-exclude').val();
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		
		// setup the output of our shortcode
		output = '&nbsp;';
			output += '[ct_gallery ';
			
			if(columns) {
				output += 'columns=\"'+columns +'\"';
			} else {
				output += 'columns="3"';
			}
			
		if(image_height) {
				output += ' image_height=\"'+image_height +'\"';
			} else {
				output += ' image_height="100%';
			}
			
		if(exclude) {
			output += ' exclude=\"'+exclude +'\"';
		}
				
			output += ']';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(TabsDialog.init, TabsDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
        <div class="form-section clearfix">
            <label for="gallery-columns">Columns</label>
            <select name="gallery-columns" id="gallery-columns" size="1">
                <option value="two" selected="selected">2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
                <option value="six">6</option>
            </select>
        </div>
        <div class="form-section clearfix">
            <label for="gallery-exclude">Exclude Photos<br /><small>Enter the ID's of photos to exclude seperated by commas.</small></label>
            <textarea type="text" name="gallery-exclude" value="" id="gallery-exclude"></textarea>
        </div>
    
    <a href="javascript:TabsDialog.insert(TabsDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
    
</form>
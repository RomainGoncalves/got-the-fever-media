<?php
/* FindWPConfig - searching for a root of wp */
function FindWPConfig($directory){
	global $confroot;
	foreach(glob($directory."/*") as $f){
		if (basename($f) == 'wp-config.php' ){
			$confroot = str_replace("\\", "/", dirname($f));
			return true;
		}
		if (is_dir($f)){
		$newdir = dirname(dirname($f));
		}
	}
	if (isset($newdir) && $newdir != $directory){
		if (FindWPConfig($newdir)){
			return false;
		}	
	}
	return false;
}
if (!isset($table_prefix)){
	global $confroot;
	FindWPConfig(dirname(dirname(__FILE__)));
	include_once $confroot."/wp-load.php";

}
?>
<script type="text/javascript">
var ButtonDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ButtonDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertButton(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var color = jQuery('input#button-color').val();
		var font_size = jQuery('input#font-size').val();
		var icon = jQuery('select#button-icon').val(); 
		var margin_top = jQuery('input#font-margin-top').val();
		var margin_bottom = jQuery('input#font-margin-bottom').val();
		var margin_left = jQuery('input#font-margin-left').val();
		var margin_right = jQuery('input#font-margin-right').val();	 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output = '[font_icon ';
		
		if(icon) {
			output += ' icon=' + icon;
		} else {
			output += ' icon=beaker';
		}
		
		if(font_size) {
			output += ' font_size=' + font_size;
		} else {
			output += ' font_size=12px';
		}
		
		if(color){
			output += ' color=' + color + '';
		} else {
			output += ' color=#000';
		}
		
		if(margin_top){
			output += ' margin_top=' + margin_top + ' '; }
			
		if(margin_bottom){
			output += ' margin_bottom=' + margin_bottom + ' '; }
			
		if(margin_left){
		output += ' margin_left=' + margin_left + ' '; }
		
		if(margin_right){
		output += ' margin_right=' + margin_right + ' '; }	
		
		output += ']';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ButtonDialog.init, ButtonDialog);
 
</script>
<form action="/" method="get" accept-charset="utf-8">
	<?php
	//awesome icons
	$awesome_icons = ct_get_awesome_icons();
	?>
    <div class="form-section clearfix">
        <label for="button-icon">Icon</label>
        <select name="button-icon" id="button-icon" size="1">
        	<?php
			$icon_count = 0;
            foreach($awesome_icons as $awesome_icon) { $icon_count++; ?>
            	<?php if ($icon_count == '1') { ?>
                	<option value="<?php echo $awesome_icon; ?>" selected="selected"><?php echo $awesome_icon; ?></option>
                <?php } else { ?> 
                	<option value="<?php echo $awesome_icon; ?>"><?php echo $awesome_icon; ?></option>
			<?php } } ?>
        </select>
    </div>
    <div class="form-section clearfix">
      <label for="button-color">Color<br /><small>Example #000<br /><a href="http://www.colorpicker.com/" target="_blank">Get your color</a></small></label>
        <input type="text" name="button-color" value="" id="button-color" />
    </div>
    <div class="form-section clearfix">
        <label for="font-size">Font Size<br /><small>Example 16px</small></label>
        <input type="text" name="font-size" value="" id="font-size" />
    </div>
        <div class="form-section clearfix">
        <label for="font-margin-top">Margin Top<br /><small>Ex: 20px</small></label>
        <input type="text" name="font-margin-top" value="" id="font-margin-top" />
    </div>
    </div>
        <div class="form-section clearfix">
        <label for="font-margin-bottom">Margin Bottom<br /><small>Ex: 20px</small></label>
        <input type="text" name="font-margin-bottom" value="" id="font-margin-bottom" />
    </div>
    </div>
        <div class="form-section clearfix">
        <label for="font-margin-left">Margin Left<br /><small>Ex: 20px</small></label>
        <input type="text" name="font-margin-left" value="" id="font-margin-left" />
    </div>
    </div>
        <div class="form-section clearfix">
        <label for="font-margin-right">Margin Right<br /><small>Ex: 20px</small></label>
        <input type="text" name="font-margin-right" value="" id="font-margin-right" />
    </div>
	<a href="javascript:ButtonDialog.insert(ButtonDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
</form>
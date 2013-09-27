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
		var service = jQuery('select#social-service').val(); 
		var target = jQuery('select#social-target').val(); 
		var url = jQuery('input#social-url').val();
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output = '[social ';
		
		if(service){
			output += ' service=' + service;
		}
		
		if(url) {
			output += ' url=' + url;
		}
		
		if(target != 'self'){
			output += ' target=' + target;
		}
		
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
	$ct_social_services = ct_get_social();
	?>
    <div class="form-section clearfix">
        <label for="social-service">Icon</label>
        <select name="social-service" id="social-service" size="1">
        	<?php
			$ct_social_count = 0;
            foreach($ct_social_services as $ct_social_service) { $ct_social_count++; ?>
            	<?php if ($ct_social_count == '1') { ?>
                	<option value="<?php echo strtolower($ct_social_service); ?>" selected="selected"><?php echo $ct_social_service; ?></option>
                <?php } else { ?> 
                	<option value="<?php echo strtolower($ct_social_service); ?>"><?php echo $ct_social_service; ?></option>
			<?php } } ?>
        </select>
    </div>
    <div class="form-section clearfix">
        <label for="social-target">Target</label>
        <select name="social-target" id="social-target" size="1">
            <option value="self" selected="selected">Self</option>
            <option value="blank">Blank</option>
        </select>
    </div>
    <div class="form-section clearfix">
        <label for="social-url">URL</label>
        <input type="text" name="social-url" value="" id="social-url" />
    </div>
	<a href="javascript:ButtonDialog.insert(ButtonDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
</form>
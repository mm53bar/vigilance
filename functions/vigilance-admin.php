<?php
// Vigilance Options stylesheet
function vigilance_admin_head() { 
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/functions/admin.css" media="screen" />';
		echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/functions/admin.js"></script>';
}
?>
<?php 
function vigilance_add_admin() {
	global $themename, $shortname, $options;
	if ( $_GET['page'] == basename(__FILE__) ) {
  	if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
      	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
			}
			foreach ($options as $value) {
				
        if ( isset( $_REQUEST[ $value['id'] ] ) ) { 
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
				} 
				else { 
					delete_option( $value['id'] ); 
				} 
			}		
			header("Location: themes.php?page=vigilance-admin.php&saved=true");
	   	die;
		} 
		else if( 'reset' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
      	delete_option( $value['id'] ); 
			}
		header("Location: themes.php?page=vigilance-admin.php&reset=true");
    die;
		}
  }
	add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_admin() {
	global $themename, $shortname, $options;
	if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' Settings saved!</strong></p></div>';
	if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' Settings reset.</strong></p></div>';
?>

<div id="v-options">
	<div id="vop-header">
		<h1>Vigilance Options</h1>
		<p><strong>Need help with these options?</strong> Please <a href="http://themes.jestro.com/tutorials/vigilance.htm">Read the tutorials</a> or visit the <a href="http://themes.jestro.com/forums/">support forums</a>.</p>
	</div><!--end vop-header-->
	<div id="vop-body">
		<div class="v-option v-custom-logo">
			<h3>Custom Logo <span>your custom logo image in the header</span></h3>
			<div class="v-option-body clear">
				<p>This feature is for users with a PRO membership. Please download and activate the PRO Child theme and these features will automatically be enabled.</p>
				<div class="v-field check clear">
					<div class="v-field-d">Check this box to use a custom logo in the header of your theme.</div>
					<input id="V_logo" type="checkbox" name="V_logo" value=""  />
					<label for="V_logo">Enable custom logo image</label>
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Place your images in the <code>/wp-content/themes/vigilance/images</code> subdirectory.</div>
					<label for="V_logo_img">Logo image file name:</label>
					<input id="V_logo_img" type="text" name="V_logo_img" value="" />
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Add an <code>alt</code> tag to your logo image. This is important for SEO.</div>
					<label for="V_logo_img_alt">Logo image file name:</label>
					<input id="V_logo_img_alt" type="text" name="V_logo_img_alt" value="" />
				</div>
				<div class="v-field check clear">
					<div class="v-field-d">When using a custom logo the tagline is disabled by default. Check this box to show your tagline below your logo.</div>
					<input id="V_tagline" type="checkbox" name="V_tagline" value=""  />
					<label for="V_tagline">Show tagline</label>
				</div>
				<div class="v-save-button submit">
					<input type="submit" value="Save changes" name="save"/>
				</div>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-navigation">
			<h3>Navigation <span>control your navigation menu</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-footer">
			<h3>Footer <span>special options for your footer</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
	</div><!--end vop-body-->
</div>

<?php


}
add_action('admin_menu', 'vigilance_add_admin'); 
?>
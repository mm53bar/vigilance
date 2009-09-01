<?php
// Vigilance Options stylesheet and javascript
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
			<h3>Custom Logo <span>insert your custom logo image in the header</span></h3>
			<div class="v-option-body clear">
				<p>This feature is for users with a PRO membership. Please download and activate the PRO Child theme and these features will automatically be enabled.</p>
				<div class="v-field check clear">
					<div class="v-field-d">Check this box to use a custom logo in the header of your theme.</div>
					<input id="V_logo" type="checkbox" name="V_logo" value=""  />
					<label for="V_logo">Enable custom logo image</label>
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Place your images in the <code>/wp-content/themes/vigilance/images</code> subdirectory.</div>
					<label for="V_logo_img">Logo image file name</label>
					<input id="V_logo_img" type="text" name="V_logo_img" value="" />
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Add an <code>alt</code> tag to your logo image. This is important for SEO.</div>
					<label for="V_logo_img_alt">Logo image alt tag</label>
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
			<div class="v-option-body clear">
				<p>All pages and categories will be displayed by default. Use these options to hide specific pages and categories.</p>
				<div class="v-field check clear">
					<div class="v-field-d">Check this box and no pages will be displayed in your top navigation menu.</div>
					<input id="V_hide_pages" type="checkbox" name="V_hide_pages" value=""  />
					<label for="V_hide_pages">Hide all pages</label>
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Page ID's you do not want displayed in your header navigation. Use a comma-delimited list (eg. 1,2,3)</div>
					<label for="V_pages_to_exclude">Exclude specific pages</label>
					<input id="V_pages_to_exclude" type="text" name="V_pages_to_exclude" value="" />
				</div>
				<div class="v-field check clear">
					<div class="v-field-d">Check this box and no categories will be displayed in your top navigation menu.</div>
					<input id="V_hide_cats" type="checkbox" name="V_hide_cats" value=""  />
					<label for="V_hide_cats">Hide all categories</label>
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Category ID's you do not want displayed in your header navigation. Use a comma-delimited list (eg. 1,2,3)</div>
					<label for="V_categories_to_exclude">Exclude specific categories</label>
					<input id="V_categories_to_exclude" type="text" name="V_categories_to_exclude" value="" />
				</div>
				<div class="v-save-button submit">
					<input type="submit" value="Save changes" name="save"/>
				</div>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-color-scheme">
			<h3>Color Scheme <span>control you color scheme</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-top-banner">
			<h3>Top Banner Image <span>control your top banner image</span></h3>
			<div class="v-option-body clear">
				<p>This section gives you total control over your top banner image. The banner is set to rotate by default.</p>
				<div class="v-field select clear">
					<div class="v-field-d"> Place your images in the <code>/wp-content/themes/vigilance/images/top-banner</code> subdirectory and they will be added to the rotation. <a href="http://themes.jestro.com/tutorials/vigilance.htm#options-banner">Read this for page and post specific images.</a></div>
					<label for="V_banner_state">Banner state</label>
					<select id="V_banner_state" name="V_banner_state">
						<option value="rotate" selected="selected">Rotating images</option>
						<option value="static">Static image</option>
						<option value="custom">Custom code</option>
						<option value="hide">Do not show an image</option>
					</select>	
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">The height of your banner image. The width is fixed at 596px.</div>
					<label for="V_banner_height">Banner height</label>
					<input id="V_banner_height" type="text" name="V_banner_height" value="" />
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">The alt tag for your banner image(s). Will default to your blog title if left blank.</div>
					<label for="V_banner_alt">Banner alt tag</label>
					<input id="V_banner_alt" type="text" name="V_banner_alt" value="" />
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Replace your top banner with a static image. You must upload this image to <code>/wp-content/themes/vigilance/images/top-banner</code> and the banner state must be set to "Static Image".</div>
					<label for="V_banner_url">Static image</label>
					<input id="V_banner_url" type="text" name="V_banner_url" value="" />
				</div>
				<div class="v-field text clear">
					<div class="v-field-d">Replace your home top banner with a specific image.</div>
					<label for="V_banner_home">Home image</label>
					<input id="V_banner_home" type="text" name="V_banner_home" value="" />
				</div>
				<div class="v-field textarea clear">
					<div class="v-field-d">Replace your top banner with custom code. The banner state must be set to "Custom code".</div>
					<label for="V_banner_custom">Custom code</label>
					<textarea id="V_banner_custom" name="V_banner_custom"></textarea>
				</div>
				<div class="v-save-button submit">
					<input type="submit" value="Save changes" name="save"/>
				</div>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-alert-box">
			<h3>Alert Box <span>toggle on and off alerts</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-sidebar-image">
			<h3>Sidebar Image <span>take control of your sidebar image</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			</div><!--end v-option-body-->
		</div><!--end v-option-->
		<div class="v-option v-feed-box">
			<h3>Sidebar Feed Box <span>manage your feeds and social networking</span></h3>
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
		<div class="v-save-button submit">
			<input type="submit" value="Save all changes" name="save"/>
			<input class="v-reset" type="submit" value="Reset all options" name="reset"/>
		</div>
	</div><!--end vop-body-->
</div>

<?php


}
add_action('admin_menu', 'vigilance_add_admin'); 
?>
<?php
$themename = "Vigilance";
$shortname = "V";
$options = array(
	
				array(	"name" => __('Custom Logo Image <a href="https://themes.jestro.com/members/signup.php"><em>PRO Feature</em></a>', 'vigilance'),
								"type" => "subhead"),
        
        array(	"name" => __('Enable custom logo image', 'vigilance'),
					    	"id" => $shortname."_logo",
								"desc" => __('Check this box to use a custom logo.', 'vigilance'),
					    	"std" => __('false', 'vigilance'),
					    	"type" => "checkbox"),
        
        array(  "name" => __('Logo image file name', 'vigilance'),
              	"id" => $shortname."_logo_img",
              	"desc" => __('Place your images in the <code>/wp-content/themes/vigilance/images</code> subdirectory', 'vigilance'),
              	"std" => "",
              	"type" => "text"),
            
        array(  "name" => __('Logo image ALT tag', 'vigilance'),
              	"id" => $shortname."_logo_img_alt",
              	"desc" => __('An alt tag for your logo image. Important for SEO.', 'vigilance'),
              	"std" => "",
              	"type" => "text"),
              
        array( 	"name" => __('Display tagline', 'vigilance'),
					   		"id" => $shortname."_tagline",
								"desc" => __('Check this box to show your tagline below your logo.', 'vigilance'),
					    	"std" => __('false', 'vigilance'),
					    	"type" => "checkbox"),
                    
        array(	"name" => __('Navigation', 'vigilance'),
								"type" => "subhead"),
        
        array(  "name" => __('Exclude pages from header', 'vigilance'),
              	"id" => $shortname."_pages_to_exclude",
              	"desc" => __('Pages you wish to exclude from your top navigation. Use the page ID in a comma-delimited list (eg. 1,2,3)', 'vigilance'),
              	"std" => "",
              	"type" => "text"),
              
        array(	"name" => __('Color Scheme', 'vigilance'),
								"type" => "subhead"),
            
        array(	"name" => __('Customize colors', 'vigilance'),
								"id" => $shortname."_background_css",
								"desc" => __('If enabled the theme will use the layouts and colors you choose below.', 'vigilance'),	
					    	"std" => __('Disabled', 'vigilance'),
					    	"type" => "select",
					    	"options" => array(__('Disabled', 'vigilance'), __('Enabled', 'vigilance'))),
              
        array(	"name" => __('Background color', 'vigilance'),
					    	"id" => $shortname."_background_color",
								"desc" => __('Your background color. Use Hex values and leave out the leading #.', 'vigilance'),
					    	"std" => "dcdfc2",
								"type" => "text"),
        
        array(	"name" => __('Border color', 'vigilance'),
					    	"id" => $shortname."_border_color",
								"desc" => __('Your border color. Use Hex values and leave out the leading #.', 'vigilance'),
					    	"std" => "d7dab9",
					    	"type" => "text"),
        
        array(	"name" => __('Link color'. 'vigilance'),
					    	"id" => $shortname."_link_color",
								"desc" => __('Your link color. Use Hex values and leave out the leading #.', 'vigilance'),
					    	"std" => "772124",
					    	"type" => "text"),
        
        array(	"name" => __('Link hover color', 'vigilance'),
					    	"id" => $shortname."_hover_color",
								"desc" => __('Your link hover color. Use Hex values and leave out the leading #.', 'vigilance'),
					    	"std" => "58181b",
					    	"type" => "text"),
         
        array(	"name" => __('Disable hover images', 'vigilance'),
					    	"id" => $shortname."_image_hover",
								"desc" => __('This is useful if you use custom link colors and do not want the default red showing when a user hovers over the comments bubble or the sidebar menu items.', 'vigilance'),
					    	"std" => __('false', 'vigilance'),
					    	"type" => "checkbox"),
              
				array(	"name" => __('Top Banner Image', 'vigilance'),
								"type" => "subhead"),

				array(	"name" => __('Banner state', 'vigilance'),
								"id" => $shortname."_banner_state",
								"desc" => __('Place your images in the <code>/wp-content/themes/vigilance/images/top-banner</code> subdirectory and they will be added to the rotation. <br /><a href="http://themes.jestro.com/tutorials/vigilance.htm#options-banner">Read this for page and post specific images.</a>', 'vigilance'),
			    			"std" => __('Rotating images', 'vigilance'),
			    			"type" => "select",
			    			"options" => array(__('Rotating images', 'vigilance'), __('Static image', 'vigilance'), __('Custom code', 'vigilance'), __('Do not show an image', 'vigilance'))),
        
        array(	"name" => __('Banner height', 'vigilance'),
					    	"id" => $shortname."_banner_height",
								"desc" => __('The height of your image. The width is fixed at 596px.', 'vigilance'),
					    	"std" => "125",
					    	"type" => "text"),
        
        array(	"name" => __('Banner alt tag', 'vigilance'),
					    	"id" => $shortname."_banner_alt",
								"desc" => __('The alt tag for your banner image(s). Will default to your blog title if left blank.', 'vigilance'),
					    	"std" => "",
					    	"type" => "textarea",
              	"type" => "text"),
        
        array(	"name" => __('Static image', 'vigilance'),
					    	"id" => $shortname."_banner_url",
								"desc" => __('Replace your top banner with a static image.<br /><strong>Note:</strong> You must upload this image to <code>/wp-content/themes/vigilance/images/top-banner</code> <strong>and</strong> the <em>Banner State</em> must be set to "Static Image" for this to work.', 'vigilance'),
					    	"std" => "",
					    	"type" => "text"),
              
        array(	"name" => __('Home image', 'vigilance'),
					    	"id" => $shortname."_banner_home",
								"desc" => __('Replace your home top banner with a specific image.<br /><strong>Note:</strong> You must upload this image to <code>/wp-content/themes/vigilance/images/top-banner</code> <strong>and</strong> the <em>Banner State</em> must be set to "Post and page specific" for this to work.', 'vigilance'),
					    	"std" => "",
					    	"type" => "text"),
        
        array(	"name" => __('Custom code', 'vigilance'),
					    	"id" => $shortname."_banner_custom",
								"desc" => __('Replace your top banner with custom code.<br /><strong>Note:</strong> The <em>Banner State</em> must be set to "Custom code" for this to work.', 'vigilance'),
					    	"std" => "",
					    	"type" => "textarea",
              	"options" => array(	"rows" => "5",
										   							"cols" => "40") ),
                       
        array(	"name" => __('Alert Box', 'vigilance'),
								"type" => "subhead"),
            
        array(	"name" => __('Alert Box On/Off', 'vigilance'),
								"id" => $shortname."_alertbox_state",
								"desc" => __('Toggle the alert box.', 'vigilance'),
			    			"std" => __('Off', 'vigilance'),
			    			"type" => "select",
			    			"options" => array(__('Off', 'vigilance'), __('On', 'vigilance'))),
              
        array(	"name" => __('Alert Title', 'vigilance'),
					    	"id" => $shortname."_alertbox_title",
              	"desc" => __('The title of your alert.', 'vigilance'),
					    	"std" => "",
					    	"type" => "text"),
        
        array(	"name" => __('Alert Message', 'vigilance'),
								"id" => $shortname."_alertbox_content",
								"desc" => __('Must use HTML in the message including <code>&#60;p&#62;</code> tags.', 'vigilance'),
								"std" => "",
								"type" => "textarea",
								"options" => array(	"rows" => "8",
										   							"cols" => "70") ),
                   
        array(	"name" => __('Sidebar Image', 'vigilance'),
								"type" => "subhead"),

				array(	"name" => __('Image state', 'vigilance'),
								"desc" => __('Place your images in the <code>/wp-content/themes/vigilance/images/sidebar</code> subdirectory and they will be added to the rotation. <br /><a href="http://themes.jestro.com/tutorials/vigilance.htm#options-banner">Read this for page and post specific images.</a>', 'vigilance'),
			    			"id" => $shortname."_sideimg_state",
			    			"std" => __('Rotating images', 'vigilance'),
			    			"type" => "select",
			    			"options" => array(__('Rotating images', 'vigilance'), __('Static image', 'vigilance'), __('Page and post specific', 'vigilance'), __('Custom code', 'vigilance'), __('Do not show an image', 'vigilance'))),
        
        array(	"name" => __('Image height', 'vigilance'),
					    	"id" => $shortname."_sideimg_height",
              	"desc" => __('The height of your image. The width is fixed at 300px.', 'vigilance'),
					    	"std" => "250",
					    	"type" => "text"),
        
        array(	"name" => __('Image alt tag', 'vigilance'),
					    	"id" => $shortname."_sideimg_alt",
              	"desc" => __('The alt tag for your sidebar image(s). Will default to your blog title if left blank.', 'vigilance'),
					    	"std" => "",
					    	"type" => "textarea",
              	"options" => array(	"rows" => "2",
										   							"cols" => "40") ),
        
        array(	"name" => __('Static image', 'vigilance'),
					    	"id" => $shortname."_sideimg_url",
              	"desc" => __('Replace your sidebar image with a static image.<br /><strong>Note:</strong> You must upload this image to <code>/wp-content/themes/vigilance/images/sidebar</code> <strong>and</strong> the <em>Image State</em> must be set to "Static Image"" for this to work.', 'vigilance'),
					    	"std" => "",
					    	"type" => "text"),
        
        array(	"name" => __('Image link', 'vigilance'),
					    	"id" => $shortname."_sideimg_link",
              	"desc" => __('Define a hyperlink for your sidebar image. If left empty the anchor tags will not be included.', 'vigilance'),
					    	"std" => "",
					    	"type" => "textarea",
              	"options" => array(	"rows" => "2",
										   							"cols" => "40") ),
              
        array(	"name" => __('Custom code', 'vigilance'),
					    	"id" => $shortname."_sideimg_custom",
								"desc" => __('Replace your sidebar image with custom code.<br /><strong>Note:</strong> The <em>Image State</em> must be set to "Custom code" for this to work.', 'vigilance'),
					    	"std" => "",
					    	"type" => "textarea",
              	"options" => array(	"rows" => "5",
										   							"cols" => "40") ),
     
        array(	"name" => __('Sidebar Feed Box', 'vigilance'),
              	"type" => "subhead"),
        
        array(	"name" => __('Feed box state', 'vigilance'),
              	"desc" => __('Enable or disable the feed box in the sidebar.', 'vigilance'),
					    	"id" => $shortname."_feed_state",
					    	"std" => __('Enabled', 'vigilance'),
					    	"type" => "select",
					    	"options" => array(__('Enabled', 'vigilance'), __('Disabled', 'vigilance'))),
              
        array(	"name" => __('Feed box title text', 'vigilance'),
					    	"id" => $shortname."_feed_title",
              	"desc" => __('Title of your feed box.', 'vigilance'),
					    	"std" => __('Get Free Updates', 'vigilance'),
					    	"type" => "text"),
            
        array(	"name" => __('Feed box intro text', 'vigilance'),
								"id" => $shortname."_feed_intro",
								"desc" => __('Enter your feed intro text here.', 'vigilance'),
								"std" => __('Get the latest and the greatest news delivered for free to your reader or your inbox:', 'vigilance'),
								"type" => "textarea",
								"options" => array(	"rows" => "5",
										   							"cols" => "40") ),
        
        array(	"name" => __('<a href="http://www.feedburner.com">Feedburner</a> email updates link', 'vigilance'),
								"id" => $shortname."_feed_email",
								"desc" => __('Enter your feed email link here. <strong>Do not paste the entire link code, just the URL.</strong><br /><del>&#60;a href=&#34;</del> <code>http://feedburner.google.com/fb/a/mailverify?uri=YOURFEEDID&amp;loc=en_US</code> <del>&#34;&#62;Subscribe to Your Feed by Email&#60;/a&#62;</del>', 'vigilance'),
								"std" => "http://feedburner.google.com/fb/a/mailverify?uri=YOURFEEDID&loc=en_US",
								"type" => "textarea",
								"options" => array(	"rows" => "2",
										   							"cols" => "80") ),

				array( 	"name" => __('Enable Twitter', 'vigilance'),
			    			"id" => $shortname."_twitter_toggle",
				  			"desc" => __('Hip to Twitter? Check this box.', 'vigilance'),
			    			"std" => "",
			    			"type" => "checkbox"),
										
				array(	"name" => __('Twitter updates link', 'vigilance'),
								"id" => $shortname."_twitter",
								"desc" => __('Enter your twitter link here.', 'vigilance'),
								"type" => "textarea",
								"options" => array(	"rows" => "2",
									   								"cols" => "80") ),		
				
        array(	"name" => __('Footer', 'vigilance'),
								"type" => "subhead"),

				array(	"name" => __('Copyright notice', 'vigilance'),
					    	"id" => $shortname."_copyright_name",
              	"desc" => __('Enter your copyright info above.', 'vigilance'),
					    	"std" => __('Your Name Here', 'vigilance'),
					    	"type" => "text"),			
				
				array(	"name" => __('Stats code', 'vigilance'),
								"id" => $shortname."_stats_code",
								"desc" => __('If you use Google Analytics or need any other tracking script in your footer just copy and paste it here.<br /> The script will be inserted before the closing <code>&#60;/body&#62;</code> tag.', 'vigilance'),
								"std" => "",
								"type" => "textarea",
								"options" => array(	"rows" => "5",
										   							"cols" => "40") ),
		  );

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=vigilance-admin.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=vigilance-admin.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

//add_theme_page($themename . 'Header Options', 'Header Options', 'edit_themes', basename(__FILE__), 'headimage_admin');

function headimage_admin(){
	
}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2 class="updatehook" style=" padding-top: 20px; font-size: 2.8em;"><?php printf(__ ('%s Options', 'vigilance'), $themename)?></h2>
<p style="line-height: 1.6em; font-size: 1.2em; width: 75%;"><?php _e('Welcome to the Vigilance Options menu. If you have any questions or need support please sign up for a <a href="https://themes.jestro.com/members/signup.php">PRO Membership</a>. Vigilance was hand coded and brought to you by <a href="http://www.jestro.com/">Jestro</a>.', 'vigilance'); ?></p>
<form method="post">

<table class="form-table">

<?php foreach ($options as $value) { 
	
	switch ( $value['type'] ) {
		case 'subhead':
		?>
			</table>
			
			<h3 style="padding-top: 15px;"><?php echo $value['name']; ?></h3>
			
			<table class="form-table">
		<?php
		break;
		case 'text':
		option_wrapper_header($value);
		?>
		        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		<?php
		option_wrapper_footer_nobreak($value);
		break;
		
		case 'select':
		option_wrapper_header($value);
		?>
	            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                <?php foreach ($value['options'] as $option) { ?>
	                <option <?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                <?php } ?>
	            </select>
		<?php
		option_wrapper_footer($value);
		break;
		
		case 'textarea':
		$ta_options = $value['options'];
		option_wrapper_header($value);
		?>
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="<?php echo $ta_options['rows']; ?>"><?php 
				if( get_settings($value['id']) != "") {
						echo stripslashes(get_settings($value['id']));
					}else{
						echo stripslashes($value['std']);
				}?></textarea>
		<?php
		option_wrapper_footer($value);
		break;

		case "radio":
		option_wrapper_header($value);
		
 		foreach ($value['options'] as $key=>$option) { 
				$radio_setting = get_settings($value['id']);
				if($radio_setting != ''){
		    		if ($key == get_settings($value['id']) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				}?>
	            <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		<?php 
		}
		 
		option_wrapper_footer_nobreak($value);
		break;
		
		case "checkbox":
		option_wrapper_header($value);
						if(get_settings($value['id'])){
							$checked = "checked=\"checked\"";
						}else{
							$checked = "";
						}
					?>
		            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		<?php
		option_wrapper_footer_nobreak($value);
		break;

		default:

		break;
	}
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}

function option_wrapper_header($values){
	?>
	<tr valign="top"> 
	    <th scope="row"><?php echo $values['name']; ?>:</th>
	    <td>
	<?php
}
function option_wrapper_footer($values){
	?>
		<br />
		<?php echo $values['desc']; ?>
	    </td>
	</tr>
	<?php 
}
function option_wrapper_footer_nobreak ($values){
	?>
		<?php echo $values['desc']; ?>
	    </td>
	</tr>
	<?php 
}
add_action('admin_menu', 'mytheme_add_admin'); 
?>
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
		<p><strong>Need help with these options?</strong> <a href="http://themes.jestro.com/tutorials/vigilance.htm">Read the tutorials</a> or visit the <a href="http://themes.jestro.com/forums/">support forums</a>.</p>
	</div><!--end vop-header-->
	<div id="vop-body">
		<div class="v-option v-custom-logo">
			<h3>Custom Logo <span>your custom logo image in the header</span></h3>
			<div class="v-option-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
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
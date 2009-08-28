<?php 
function mytheme_add_admin() {
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

function headimage_admin(){
	
}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' Settings saved!</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' Settings reset.</strong></p></div>';
    
?>
<div id="theme-options">
	<p>Test</p>
</div>
<?php


}
add_action('admin_menu', 'mytheme_add_admin'); 
?>
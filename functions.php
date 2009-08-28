<?php
//Text Domain
load_theme_textdomain('vigilance', dirname(__FILE__) . '/language');

define ('FUNCTIONS', TEMPLATEPATH . '/functions');
define ('COPY', FUNCTIONS . '/vigilance.php');
require_once (FUNCTIONS . '/sidebars.php');
require_once (FUNCTIONS . '/comments.php');
require_once (FUNCTIONS . '/vigilance-options.php');
require_once (FUNCTIONS . '/vigilance-admin.php');

//Actions
add_action('admin_head', 'vigilance_admin_head'); 

// Use legacy comments template for versions less than 2.7
add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) 	$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}
?>
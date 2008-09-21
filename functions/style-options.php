<?php
require_once( dirname(__FILE__) . '../../../../../wp-config.php');
require_once( dirname(__FILE__) . '../../functions.php');
header("Content-type: text/css"); 
?>
<?php //Load Variables
  $background_color = get_option('V_background_color');
  $border_color = get_option('V_border_color'); 
  $link_color = get_option('V_link_color');
  $hover_color = get_option('V_hover_color');
?> 
/*Background
------------------------------------------------------------ */
body { background: #<?php echo $background_color; ?>; }
#wrapper{
	background: #fff;
	padding: 0 20px 10px 20px;
	border-left: 4px solid #<?php echo $border_color; ?>;
	border-right: 4px solid #<?php echo $border_color; ?>;
	}
/*Links 
------------------------------------------------------------ */
a:link, a:visited { color: #<?php echo $link_color; ?>; }
h1#title a:hover, div#title a:hover { color: #<?php echo $link_color; ?>; }
#nav .page_item a:hover { 
  color: #<?php echo $link_color; ?>;
	border-top: 4px solid #<?php echo $link_color; ?>;
	}
#nav .current_page_item a:link, #nav .current_page_item a:visited, #nav .current_page_item a:hover, #nav .current_page_parent a:link, #nav .current_page_parent a:visited, #nav .current_page_parent a:hover, #nav .current_page_ancestor a:link, #nav .current_page_ancestor a:visited, #nav .current_page_ancestor a:hover {
	color: #<?php echo $link_color; ?>;
	border-top: 4px solid #<?php echo $link_color; ?>;
	}
.post-header h1 a:hover, .post-header h2 a:hover { color: #<?php echo $link_color; ?>; }
.comments a:hover { color: #<?php echo $link_color; ?>; }
.meta a:hover { color: #<?php echo $link_color; ?>; }
.highlight-box { background: #<?php echo $link_color; ?>;	}
.post-footer a:hover { color: #<?php echo $link_color; ?>; }
#footer a:hover { color: #<?php echo $link_color; ?>; }
/*Hover 
------------------------------------------------------------ */
a:hover { color: #<?php echo $hover_color; ?>; }
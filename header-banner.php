<?php //Load Variables
  $banner_state = get_option('V_banner_state'); 
  $banner_height = get_option('V_banner_height'); 
  $banner_alt = get_option('V_banner_alt'); 
  $banner_url = get_option('V_banner_url'); 
  $banner_home = get_option('V_banner_home'); 
  $banner_custom = get_option('V_banner_custom');
  $static_banner_url = get_post_meta($post->ID, 'img-url', $single = true); 
  $static_banner_alt = get_post_meta($post->ID, 'img-alt', $single = true); 
  $static_banner_height = get_post_meta($post->ID, 'img-height', $single = true);  
  $static_banner_status = get_post_meta($post->ID, 'img-status', $single = true); 
?> 

<?php //-----Page and Post Specific---------------------------------------------------------------------------------//
if ((is_single() || is_page()) && $static_banner_url !== '' && $banner_home == '' && $static_banner_status !=='hidden') : ?>
  <div id="menu">
    <img src="<?php echo $static_banner_url; ?>" width="596" height="<?php if ($static_banner_height !== '') echo wp_filter_post_kses($static_banner_height); else echo wp_filter_post_kses($banner_height); ?>" alt="<?php if ($static_banner_alt !== '') echo stripslashes(wp_filter_post_kses($static_banner_alt)); else echo the_title(); ?>"/>
   </div><!--end menu-->

<?php //-----Home Page---------------------------------------------------------------------------------//
elseif ($banner_home !== '' && is_front_page()) : ?>
	<div id="menu">
  	<img src="<?php bloginfo('template_url'); ?>/images/top-banner/<?php echo $banner_home; ?>" width="596" height="<?php echo wp_filter_post_kses($banner_height); ?>" alt="<?php if ($banner_alt !== '') echo stripslashes(wp_filter_post_kses($banner_alt)); else echo bloginfo('name'); ?>"/>
  </div><!--end menu-->

<?php //-----Static Image---------------------------------------------------------------------------------//
elseif ($banner_state == 'Static image' && $banner_url !== '') : ?>
  <div id="menu">
  	<img src="<?php bloginfo('template_url'); ?>/images/top-banner/<?php echo wp_filter_post_kses($banner_url); ?>" width="596" height="<?php echo wp_filter_post_kses($banner_height); ?>" alt="<?php if ($banner_alt !== '') echo stripslashes(wp_filter_post_kses($banner_alt)); else echo bloginfo('name'); ?>"/>
  </div><!--end menu-->

<?php //------Custom Code---------------------------------------------------------------------------------//
elseif ($banner_state == 'Custom code') : ?>
  <div id="menu">
  	<?php echo stripslashes(wp_filter_post_kses($banner_custom)); ?>
  </div><!--end menu-->

<?php //-----Rotating Image---------------------------------------------------------------------------------//
else : ?>
  <div id="menu">
  	<img src="<?php bloginfo('template_url'); ?>/images/top-banner/rotate.php" width="596" height="<?php echo wp_filter_post_kses($banner_height); ?>" alt="<?php if ($banner_alt !== '') echo stripslashes(wp_filter_post_kses($banner_alt)); else echo bloginfo('name'); ?>"/>
  </div><!--end menu-->
<?php endif; ?>
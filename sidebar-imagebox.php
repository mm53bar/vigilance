<?php //Load Variables
  $sideimg_state = get_option('V_sideimg_state'); 
  $sideimg_height = get_option('V_sideimg_height'); 
  $sideimg_alt = get_option('V_sideimg_alt'); 
  $sideimg_url = get_option('V_sideimg_url');
  $sideimg_link = get_option('V_sideimg_link');
  $sideimg_custom = get_option('V_sideimg_custom');
  $custom_field_url = get_post_meta($post->ID, 'sideimg-url', $single = true); 
  $custom_field_alt = get_post_meta($post->ID, 'sideimg-alt', $single = true); 
  $custom_field_link = get_post_meta($post->ID, 'sideimg-link', $single = true); 
  $custom_field_height = get_post_meta($post->ID, 'sideimg-height', $single = true);  
  $custom_field_status = get_post_meta($post->ID, 'sideimg-status', $single = true); 
?> 
<?php //------Page and Post Specific---------------------------------------------------------------------------------//
if ($custom_field_status !== 'hidden' && $custom_field_url !== '')  : ?>
  <div id="sidebar-image">
      <?php if ($custom_field_link !== '') {?>
      <a href="<?php echo wp_filter_post_kses($custom_field_link); ?>">
      <?php } ?>
        <?php if (is_single() || is_page() && $custom_field_url !== '') { ?>
        <img src="<?php echo wp_filter_post_kses($custom_field_url); ?>" width="300" height="<?php if ($custom_field_height !== '') echo wp_filter_post_kses($custom_field_height); else echo wp_filter_post_kses($sideimg_height); ?>" alt="<?php if ($custom_field_alt !== '') echo stripslashes(wp_filter_post_kses($custom_field_alt)); else echo the_title(); ?>"/>
        <?php } ?>
      <?php if ($custom_field_link !== '') {?>
      </a>
      <?php } ?>
  </div><!--end sidebar-image-->			

<?php //------Static Image---------------------------------------------------------------------------------//
elseif ($sideimg_state == 'static' && $sideimg_url !== '') : ?>
  <div id="sidebar-image">
    <?php if ($sideimg_link !== '') {?>
      <a href="<?php echo $sideimg_link; ?>">
    <?php } ?>
  		<img src="<?php bloginfo('template_url'); ?>/images/sidebar/<?php echo wp_filter_post_kses($sideimg_url); ?>" width="300" height="<?php echo wp_filter_post_kses($sideimg_height); ?>" alt="<?php if ($sideimg_alt !== '') echo stripslashes(wp_filter_post_kses($sideimg_alt)); else echo bloginfo('name'); ?>"/>
    <?php if ($sideimg_link !== '') {?>
      </a>
    <?php } ?>
	</div><!--end sidebar-image-->

<?php //------Custom Code---------------------------------------------------------------------------------//
elseif ($sideimg_state == 'custom') : ?>
	  <div id="sidebar-image">
	  	<?php echo stripslashes($sideimg_custom); ?>
	  </div><!--end sidebar-image-->

<?php //------Rotating Images---------------------------------------------------------------------------------//
else : ?>
		<div id="sidebar-image">
	  	<?php if ($sideimg_link !== '') {?>
	      <a href="<?php echo wp_filter_post_kses($sideimg_link); ?>">
	    <?php } ?>
	    <img src="<?php bloginfo('template_url'); ?>/images/sidebar/rotate.php" width="300" height="<?php echo wp_filter_post_kses($sideimg_height); ?>" alt="<?php if ($sideimg_alt !== '') echo stripslashes(wp_filter_post_kses($sideimg_alt)); else echo bloginfo('name'); ?>"/>
	    <?php if ($sideimg_link !== '') {?>
	      </a>
	    <?php } ?>
		</div><!--end sidebar-image-->
<?php endif; ?>
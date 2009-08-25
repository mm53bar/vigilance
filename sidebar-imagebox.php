<?php //Load Variables
  $sideimg_state = get_option('V_sideimg_state'); 
  $sideimg_height = get_option('V_sideimg_height'); 
  $sideimg_alt = get_option('V_sideimg_alt'); 
  $sideimg_url = get_option('V_sideimg_url');
  $sideimg_link = get_option('V_sideimg_link');
  $sideimg_custom = get_option('V_sideimg_custom');
  $static_sideimg_url = get_post_meta($post->ID, 'sideimg-url', $single = true); 
  $static_sideimg_alt = get_post_meta($post->ID, 'sideimg-alt', $single = true); 
  $static_sideimg_link = get_post_meta($post->ID, 'sideimg-link', $single = true); 
  $static_sideimg_height = get_post_meta($post->ID, 'sideimg-height', $single = true);  
  $static_sideimg_status = get_post_meta($post->ID, 'sideimg-status', $single = true); 
?> 
<?php //------Page and Post Specific---------------------------------------------------------------------------------//
if ($static_sideimg_status !== 'hidden' && $static_sideimg_url !== '')  : ?>
  <div id="sidebar-image">
      <?php if ($static_sideimg_link !== '') {?>
      <a href="<?php echo wp_filter_post_kses($static_sideimg_link); ?>">
      <?php } ?>
        <?php if (is_single() || is_page() && $static_sideimg_url !== '') { ?>
        <img src="<?php echo wp_filter_post_kses($static_sideimg_url); ?>" width="300" height="<?php if ($static_sideimg_height !== '') echo wp_filter_post_kses($static_sideimg_height); else echo wp_filter_post_kses($sideimg_height); ?>" alt="<?php if ($static_sideimg_alt !== '') echo stripslashes(wp_filter_post_kses($static_sideimg_alt)); else echo the_title(); ?>"/>
        <?php } ?>
      <?php if ($static_sideimg_link !== '') {?>
      </a>
      <?php } ?>
  </div><!--end sidebar-image-->			

<?php //------Static Image---------------------------------------------------------------------------------//
elseif ($sideimg_state == 'Static image' && $sideimg_url !== '') : ?>
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
elseif ($sideimg_state == 'Custom code') : ?>
	  <div id="sidebar-image">
	  	<?php echo stripslashes($sideimg_custom); ?>
	  </div><!--end sidebar-image-->

<?php //------Rotating Images---------------------------------------------------------------------------------//
else : ?>
	<?php if ($sideimg_state !== 'Do not show an image') : ?>
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
<?php endif; ?>
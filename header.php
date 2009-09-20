<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php if( is_front_page() ) : ?>
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description');?></title>
		<?php elseif( is_404() ) : ?>
		<title><?php _e('Page Not Found |', 'vigilance') ?> <?php bloginfo('name'); ?></title>
    <?php elseif( is_search() ) : ?>
    <title><?php  print 'Search Results for ' . wp_specialchars($s); ?> | <?php bloginfo('name'); ?></title>
		<?php else : ?>
		<title><?php wp_title($sep = ''); ?> | <?php bloginfo('name');?></title>
		<?php endif; ?>

	<!-- Basic Meta Data -->
	<meta name="copyright" content="Vigilance Theme Design: Copyright 2008 - 2009 Jestro LLC" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if((is_single() || is_category() || is_page() || is_home()) && (!is_paged())){} else {?>
	<meta name="robots" content="noindex,follow" /><?php } ?>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

	<!--Stylesheets-->
	<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" rel="stylesheet" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/ie.css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/ie6.css" />
	<![endif]-->

	<!--Wordpress-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--WP Hook-->
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="header" class="clear">
		<?php if (is_home()) echo('<h1 id="title">'); else echo('<div id="title">');?>
		<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?> | <?php bloginfo('description');?>" class="sitelogo"></a>
		<?php if (is_home()) echo('</h1>'); else echo('</div>');?>
		<?php if (get_option('V_tagline') == 'true') : ?>
			<div id="description">
				<h2><?php bloginfo('description'); ?></h2>
			</div><!--end description-->
		<?php endif; ?>
		<div id="nav">
			<ul>
				<li class="page_item <?php if (is_front_page()) echo('current_page_item');?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'vigilance') ?></a></li>
        <?php $exclude_pages = get_option('V_pages_to_exclude'); ?>
        <?php $exclude_cats = get_option('V_categories_to_exclude'); ?>
				<?php $hide_pages = get_option('V_hide_pages'); ?>
				<?php $hide_cats = get_option('V_hide_cats'); ?>
				<?php if ($hide_pages !== 'true') : ?>
        	<?php wp_list_pages('title_li=&exclude=' . $exclude_pages); ?>
				<?php endif; ?>
				<?php if ($hide_cats != 'true') : ?>
        	<?php wp_list_categories('title_li=&exclude=' . $exclude_cats); ?>
				<?php endif; ?>
			</ul>
		</div><!--end nav-->
	</div><!--end header-->
	<div id="content" class="pad">
		<?php include (TEMPLATEPATH . '/header-banner.php'); ?>
    <?php if (is_front_page()) include (TEMPLATEPATH . '/header-alertbox.php'); ?>
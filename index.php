<?php get_header(); ?>
<div id="headline">
<?php query_posts("showposts=1&category_name=Featured"); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-header">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><span><?php the_time('Y') ?></span> <?php the_time(__ ('F j', 'vigilance')) ?></div>
				<div class="comments"><?php comments_popup_link(__ ('Leave a comment', 'vigilance'), __ ('1 Comment', 'vigilance'), __ngettext ('% Comment', '% Comments', get_comments_number (),'vigilance')); ?></div>
			</div><!--end post header-->
			<div class="meta clear">
				<div class="tags"><?php the_tags(__('tags: ', ', ', '', 'vigilance')); ?></div>
				<div class="author"><?php printf(__ ('by %s', 'vigilance'), get_the_author())?></div>
			</div><!--end meta-->
			<div class="entry clear">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
echo get_first_image(); ?>&w=300&h=275&zc=1&q=100"
alt="<?php the_title_attribute(); ?>" class="left" width="300px" height="275px"  /></a>			
				<?php the_excerpt(); ?>
        <?php edit_post_link(__('Edit This','<p>','</p>', 'vigilance')); ?>
				<?php wp_link_pages(); ?>
			</div><!--end entry-->
			<div class="post-footer">
				<p><?php _e('from &rarr;', 'vigilance') ?> <?php the_category(__(', ', 'vigilance')); ?></p>
			</div><!--end post footer-->
		</div><!--end post-->
		<?php endwhile; ?>
		<?php endif; ?>
</div>

	<div id="featured">
	<?php query_posts("showposts=3&offset=1&category_name=Featured"); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="date"><span><?php the_time('Y') ?></span> <?php the_time(__ ('F j', 'vigilance')) ?></div>
					<div class="comments"><?php comments_popup_link(__ ('Leave a comment', 'vigilance'), __ ('1 Comment', 'vigilance'), __ngettext ('% Comment', '% Comments', get_comments_number (),'vigilance')); ?></div>
				</div><!--end post header-->
				<div class="meta clear">
					<div class="tags"><?php the_tags(__('tags: ', ', ', '', 'vigilance')); ?></div>
					<div class="author"><?php printf(__ ('by %s', 'vigilance'), get_the_author())?></div>
				</div><!--end meta-->
				<div class="entry clear">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
	<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
	echo get_first_image(); ?>&w=100&h=65&zc=1&q=100"
	alt="<?php the_title_attribute(); ?>" class="left" width="100px" height="65px"  /></a>			
					<?php the_excerpt(); ?>
	        <?php edit_post_link(__('Edit This','<p>','</p>', 'vigilance')); ?>
					<?php wp_link_pages(); ?>
				</div><!--end entry-->
				<div class="post-footer">
					<p><?php _e('from &rarr;', 'vigilance') ?> <?php the_category(__(', ', 'vigilance')); ?></p>
				</div><!--end post footer-->
			</div><!--end post-->
			<?php endwhile; ?>
			<?php endif; ?>
	</div>


		<div id="asides">
		<?php query_posts("showposts=5&category_name=Asides"); ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-header">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="date"><span><?php the_time('Y') ?></span> <?php the_time(__ ('F j', 'vigilance')) ?></div>
						<div class="comments"><?php comments_popup_link(__ ('Leave a comment', 'vigilance'), __ ('1 Comment', 'vigilance'), __ngettext ('% Comment', '% Comments', get_comments_number (),'vigilance')); ?></div>
					</div><!--end post header-->
						<div class="post-footer">
							<p><?php _e('from &rarr;', 'vigilance') ?> <?php the_category(__(', ', 'vigilance')); ?></p>
						</div><!--end post footer-->
				</div><!--end post-->
				<?php endwhile; ?>
				<?php endif; ?>
		</div>
		
		
	</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
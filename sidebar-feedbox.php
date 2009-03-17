<?php 
  $feed_title = get_option('V_feed_title'); 
  $feed_intro = get_option('V_feed_intro');
  $feed_email = get_option('V_feed_email');
?>
    <h2 class="widgettitle"><?php if ($feed_title != '') echo stripslashes($feed_title); else echo "Get Free Updates"; ?></h2>
    <div id="rss-feed" class="clear"> 
      <p><?php if ($feed_intro != '') echo stripslashes($feed_intro); else echo "Get the latest and the greatest news delivered for free to your reader or your inbox:"; ?></p>
      <a class ="rss" href="<?php bloginfo('rss2_url'); ?>">Subscribe to RSS</a>
      <a class="email" href="<?php echo htmlspecialchars($feed_email, UTF-8); ?>">Receive email updates</a>
    </div>
  	
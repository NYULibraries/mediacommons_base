<!DOCTYPE html>
<html dir="<?php print $language->dir; ?>" class="<?php print $classes; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:700,400,900' rel='stylesheet' type='text/css'>  
  <?php print $scripts; ?>  
</head>
<body class="pane body imr" <?php print $attributes;?>>
  <div id="skip-link"><a href="#main-content" id="skip-to-main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
  <section class="mediacommons-network">
		<ul class="desktop">
			<li><a href="index.html"><img src="<?php echo $GLOBALS['base_url'].'/sites/mediacommons.futureofthebook.org/files/mediacommons_new.png' ?>"></a></li>
			<li><a href="imr-post.html">In Media Res</a></li>
			<li><a href="#">MediaCommons Press</a></li>
			<li><a href="tne-multi.html">The New Everyday</a></li>
			<li><a href="alt-search.html">#Alt-Academy</a></li>
			<li class="login"><a href="http://localhost:8888/mediacommons/user/login">Login</a></li>
		</ul>
		<ul class="mobile">
			<li><a href=""><img src="<?php echo $GLOBALS['base_url'].'/sites/mediacommons.futureofthebook.org/files/mediacommons_new.png' ?>"></a></li>
			<li class="login"><a href="#">Login</a></li>
		</ul>
	</section>
	<?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>



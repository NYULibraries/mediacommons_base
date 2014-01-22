<main role="main">
  <div id="page-inner" class="page-inner"> 
    <div id="top" class="pane top">
      <header class="header">
        <div class="wrapper"> <img src="<?php echo $GLOBALS['base_url'].'/sites/mediacommons.futureofthebook.org/themes/mediacommons_base/images/logos/tne_new.png' ?>">
          <div id="search"> <?php print render($page['search']); ?> </div>
          <div class="content-nav"> <?php print render($page['navigation']); ?> </div>
          
          <!--<?php if ($site_name) : ?>
            <<?php if ($title) : print 'h1'; else: print 'h2'; endif; ?> id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a></<?php if ($title) : print 'h1'; else: print 'h2'; endif; ?>>
          <?php endif; ?>-->
          
          <?php if ($main_menu || $secondary_menu) : ?>
          <div id="navigation" class="navigation">
            <?php if ($main_menu) : ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
            <?php endif; ?>
            <?php if ($secondary_menu) : ?>
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($messages) : ?>
          <?php print $messages; ?>
          <?php endif; ?>
          <?php if (isset($page['highlighted'])) : ?>
          <div id="highlighted"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
        </div>
      </header>
      <div class="wrapper"> <?php print render($title_prefix); ?> <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
    <article class="wrapper the-content">
      <?php if ($tabs) : ?>
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($page['content']); ?> </div>
    <?php if ($feed_icons) : ?>
    <?php print $feed_icons; ?>
    <?php endif; ?>
  </article>
</main>

<footer role="contentinfo">
  <?php print render($page['footer']); ?>
      <ul role="menu">
        <li role="menuitem"> <a href="#">Copyright/Fair Use Policy</a> </li>
        <li role="menuitem"> <a href="mailto:editors@mediacommons.futureofthebook.org">Help</a> </li>
        <li> <a href="#">About</a> </li>
      </ul>
      <p> <span class="extras">In Media Res: A <a href="http://mediacommons.futureofthebook.org/">MediaCommons</a> Project</span><br>
      <span class="powered">Powered by NYU <a href="http://dlib.nyu.edu">DLTS</a></span> </p>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="../js/underscore-min.js"></script>
    <script src="../js/modernizr.custom.23042.js"></script>
    <script src="../js/mc.js"></script>


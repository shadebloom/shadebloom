<div id="wrapper">

  <div id="header">

    <a href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/images/logo.jpg" alt="<?php print $site_name;?>" />
    </a>
    
    <?php if ($main_menu): ?>
      <?php print theme('links', $main_menu); ?>
    <?php endif; ?>

  </div>

  <div id="content">
    <!-- ALWAYS INCLUDE TITLE PREFIX & SUFFIX -->
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>

	<div id="footer">
	  <?php if ($page['footer']): ?>
	  	<?php print render($page['footer']); ?>
	  <?php endif; ?>
	</div>

</div>
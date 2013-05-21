<div id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <h4><?php print t('Comments'); ?></h4>
  <?php print render($title_suffix); ?>


  <?php if ($content['comment_form']): ?>
    <?php print render($content['comment_form']); ?>
  <?php endif; ?>
  <?php print render($content['comments']); ?>
</div>

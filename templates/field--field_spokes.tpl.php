<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <h2>Posts</h2>
  <ul class="spokes">
    <?php foreach ($items as $delta => $item) : ?>
      <li><?php print render($item); ?></li>
    <?php endforeach; ?>
  </ul>
</div>
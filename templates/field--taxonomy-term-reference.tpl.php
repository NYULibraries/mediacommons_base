<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<strong>Tags: </strong>
  <?php foreach ($items as $delta => $item) : ?>
    <?php print render($item); ?>
  <?php endforeach; ?>
</div>
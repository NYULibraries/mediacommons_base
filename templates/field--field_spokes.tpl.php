<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<strong>Spokes: </strong>
	<ul>
  <?php foreach ($items as $delta => $item) : ?>
    <li><?php print render($item); ?></li>
  <?php endforeach; ?>
</ul>
</div>
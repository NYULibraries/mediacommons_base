  <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print $title_safe; ?>
    <div class="content">
      <div class="image">
        <?php print $safe_tease; ?>
      </div>
      <div class="description">
        <?php print $description; ?>
        
        <div class="tease">
          <?php print $safe_tags; ?>      
        </div>
        <div class="trigger"><a href="javascript:void(0);" class="viewer">Articles &amp; Authors</a></div>
        <div class="associated" style="display:none">
          <div class="contributors">
            <?php print $contributors; ?>
          </div>  
          <?php print $spokes; ?>
        </div>
      </div>
    </div>
    
  </div>

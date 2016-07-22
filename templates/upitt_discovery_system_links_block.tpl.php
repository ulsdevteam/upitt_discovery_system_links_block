<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 */
?>
<?php if ($object_label): ?>
<div>
  <?php if (count($links) > 0): ?>
  <ul>
  <?php endif; ?>
  <?php foreach ($links as $link): ?>
    <li><?php print $link; ?></li>
  <?php endforeach; ?>
  <?php if (count($links) > 0): ?>
  </ul>
  <?php endif; ?>
</div> 
<?php endif; ?>

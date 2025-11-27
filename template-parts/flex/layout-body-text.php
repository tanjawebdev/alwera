<?php
$text = get_sub_field('text');
$alignment = get_sub_field('alignment');
?>

<div class="col-lg-6 <?php echo ($alignment === 'middle') ? 'offset-lg-3' : ''; ?>">
  <?php if ($text): ?>
    <div class="body-text rte">
      <?php echo wp_kses_post($text); ?>
    </div>
  <?php endif; ?>
</div>

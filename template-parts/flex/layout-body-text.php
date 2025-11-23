<?php
$text = get_sub_field('text');
?>
<?php if ($text): ?>
  <div class="body-text-middle rte">
    <?php echo wp_kses_post($text); ?>
  </div>
<?php endif; ?>


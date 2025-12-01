<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$direction = get_sub_field('direction');
?>

  <div class="statement statement-<?php echo esc_attr($direction ?: 'top'); ?>">
    <?php if ($title): ?>
      <h2><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    
    <?php if ($subtitle): ?>
      <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>
  </div>

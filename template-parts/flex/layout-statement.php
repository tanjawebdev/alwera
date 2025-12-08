<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$direction = get_sub_field('direction');
$subtitle_tag_name = $subtitle_tag ? esc_attr($subtitle_tag) : 'p';
?>

<div class="statement statement-<?php echo esc_attr($direction ?: 'top'); ?>">
  <?php if ($title): ?>
    <h2><?php echo esc_html($title); ?></h2>
  <?php endif; ?>

  <?php if ($subtitle): ?>
    <<?php echo $subtitle_tag_name; ?> class="subtitle"><?php echo esc_html($subtitle); ?></<?php echo $subtitle_tag_name; ?>>
  <?php endif; ?>
</div>
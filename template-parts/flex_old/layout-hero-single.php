<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image_id = get_sub_field('image');
?>
<div class="row align-items-center g-5">
  <div class="col-md-6">
    <?php if ($title): ?><h2><?php echo esc_html($title); ?></h2><?php endif; ?>
    <?php if ($subtitle): ?><div class="rte"><?php echo wp_kses_post($subtitle); ?></div><?php endif; ?>
  </div>
  <div class="col-md-6">
    <?php echo wp_get_attachment_image($image_id, 'large', false, ['class' => 'img-fluid rounded']); ?>
  </div>
</div>
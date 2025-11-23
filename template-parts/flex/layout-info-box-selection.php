<?php
$categories = get_sub_field('categories');
?>
<?php if ($categories): ?>
  <div class="info-box-selection">
    <?php foreach ($categories as $category): ?>
      <div class="info-box">
        <?php if ($category['title']): ?>
          <h3><?php echo esc_html($category['title']); ?></h3>
        <?php endif; ?>
        
        <?php if ($category['text']): ?>
          <div class="rte"><?php echo wp_kses_post($category['text']); ?></div>
        <?php endif; ?>
        
        <?php if ($category['images']): ?>
          <div class="info-box-images">
            <?php foreach ($category['images'] as $img): ?>
              <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'img-fluid']); ?>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>


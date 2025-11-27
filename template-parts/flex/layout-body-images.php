<?php
$images = get_sub_field('images');
?>
<?php if ($images): ?>
  <div class="body-images">
    <div class="row">
      <?php foreach ($images as $img): ?>
        <div class="body-image col-12 col-md-6">
          <picture>
            <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'img-fluid']); ?>
          </picture>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>


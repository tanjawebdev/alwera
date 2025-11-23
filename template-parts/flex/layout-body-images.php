<?php
$images = get_sub_field('images');
?>
<?php if ($images): ?>
  <div class="body-images">
    <div class="row g-4">
      <?php foreach ($images as $img): ?>
        <div class="col-md-4">
          <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'img-fluid']); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>


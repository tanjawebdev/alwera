<?php
$title = get_sub_field('title');
$cards = get_sub_field('card');
?>
<?php if ($title): ?>
  <h2><?php echo esc_html($title); ?></h2>
<?php endif; ?>

<?php if ($cards): ?>
  <div class="row g-4">
    <?php foreach ($cards as $card): ?>
      <div class="col-md-4">
        <div class="card">
          <?php if ($card['image']): ?>
            <?php echo wp_get_attachment_image($card['image']['ID'], 'medium', false, ['class' => 'card-img-top']); ?>
          <?php endif; ?>
          <div class="card-body">
            <?php if ($card['text']): ?>
              <p class="card-text"><?php echo esc_html($card['text']); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>


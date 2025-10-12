<?php
/**
 * Interaktiver Image Slider (Bootstrap Carousel)
 * Felder: images (gallery IDs), autoplay (bool), interval (ms)
 */
$ids      = get_sub_field('images') ?: [];
$autoplay = (bool) get_sub_field('autoplay');
$interval = (int) (get_sub_field('interval') ?: 5000);

if (!empty($ids)) :
  $carousel_id = 'carousel-' . wp_unique_id();
  // data-bs-ride="carousel" nur wenn Autoplay an ist
  $ride = $autoplay ? 'carousel' : 'false';
?>
<div id="<?php echo esc_attr($carousel_id); ?>"
     class="carousel slide"
     data-bs-ride="<?php echo esc_attr($ride); ?>"
     data-bs-interval="<?php echo esc_attr($interval); ?>">

  <div class="carousel-indicators">
    <?php foreach ($ids as $i => $img_id): ?>
      <button type="button"
              data-bs-target="#<?php echo esc_attr($carousel_id); ?>"
              data-bs-slide-to="<?php echo esc_attr($i); ?>"
              <?php if ($i === 0) echo 'class="active" aria-current="true"'; ?>
              aria-label="<?php echo esc_attr(sprintf(__('Slide %d','projecttheme'), $i+1)); ?>"></button>
    <?php endforeach; ?>
  </div>

  <div class="carousel-inner rounded">
    <?php foreach ($ids as $i => $img_id): ?>
      <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
        <?php echo wp_get_attachment_image($img_id, 'full', false, ['class'=>'d-block w-100','loading'=>'lazy','decoding'=>'async']); ?>
      </div>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden"><?php _e('Previous'); ?></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden"><?php _e('Next'); ?></span>
  </button>
</div>
<?php endif; ?>
<?php
$name = get_sub_field('name');
$address = get_sub_field('address');
$telephone = get_sub_field('telephone');
$fax = get_sub_field('fax');
$email = get_sub_field('email');
$location = get_sub_field('location');
$zoom = get_sub_field('zoom');
?>
<div class="google-maps-wrapper">
  <?php if ($name): ?>
    <h2><?php echo esc_html($name); ?></h2>
  <?php endif; ?>
  
  <div class="row g-4">
    <div class="col-md-6">
      <?php if ($address): ?>
        <p><strong>Adresse:</strong><br><?php echo nl2br(esc_html($address)); ?></p>
      <?php endif; ?>
      
      <?php if ($telephone): ?>
        <p><strong>Telefon:</strong> <a href="tel:<?php echo esc_attr($telephone); ?>"><?php echo esc_html($telephone); ?></a></p>
      <?php endif; ?>
      
      <?php if ($fax): ?>
        <p><strong>Fax:</strong> <?php echo esc_html($fax); ?></p>
      <?php endif; ?>
      
      <?php if ($email): ?>
        <p><strong>E-Mail:</strong> <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
      <?php endif; ?>
    </div>
    
    <div class="col-md-6">
      <?php if ($location): ?>
        <div class="acf-map" data-zoom="<?php echo esc_attr($zoom ?: 16); ?>">
          <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>


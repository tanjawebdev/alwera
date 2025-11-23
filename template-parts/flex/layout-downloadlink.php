<?php
$text = get_sub_field('text');
$downloadlink = get_sub_field('downloadlink');
?>
<?php if ($text && $downloadlink): ?>
  <div class="downloadlink">
    <a href="<?php echo esc_url($downloadlink); ?>" class="btn btn-primary" download>
      <?php echo esc_html($text); ?>
    </a>
  </div>
<?php endif; ?>


<?php
$text = get_sub_field('text');
$downloadlink = get_sub_field('downloadlink');
?>

<div class="download-wrapper">
<?php if ($text): ?>
  <h2><?php echo esc_html($text); ?></h2>
<?php endif; ?>

<?php if ($downloadlink): ?>
  <div class="downloadlink">
    <a href="<?php echo esc_url($downloadlink); ?>" class="btn btn-primary" download>Download</a>
  </div>
<?php endif; ?>
</div>
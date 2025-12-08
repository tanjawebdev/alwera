<?php
$text = get_sub_field('text');
$file_field = get_field('my_download_file');
$file_url = $file_field['url'];
?>

<div class="download-wrapper">
  <?php if ($text): ?>
    <h2><?php echo esc_html($text); ?></h2>
  <?php endif; ?>

  <?php if ($file_url): ?>
    <div class="downloadlink">
      <a href="<?php echo esc_url($file_url); ?>" class="btn btn-primary" download>Download</a>
    </div>
  <?php endif; ?>
</div>
<?php
$text = get_sub_field('text');

// IMPORTANT: Replace 'section_container_size' with the actual field name 
// you use to select the container (e.g., 'container_type', 'wrapper_size', etc.)
// You may need to fetch this from a parent/ancestor field.
$section_container_size = get_sub_field('container'); // Placeholder - adjust this line

// 1. Determine if the large column class should be used
$use_lg_cols = ($section_container_size === 'container-lg'); 

// 2. Build the column class based on the container size
$column_class = $use_lg_cols ? 'col-lg-6' : 'col-12'; 

// 3. Build the offset class, only applying it if we are using the large column size AND alignment is middle
$offset_class = ($use_lg_cols && $alignment === 'middle') ? 'offset-lg-3' : '';

// 4. Combine all classes
$classes = trim("$column_class $offset_class");
?>

<div class="<?php echo $classes; ?>">
  <?php if ($text): ?>
    <div class="body-text rte">
      <?php echo wp_kses_post($text); ?>
    </div>
  <?php endif; ?>
</div>
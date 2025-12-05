<?php
$selected_departments = get_sub_field('department');
?>

<?php if ($selected_departments): ?>
  <?php
  // Query employees from selected departments
  $args = array(
    'post_type' => 'employee',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => 'department',
        'field' => 'term_id',
        'terms' => $selected_departments,
      ),
    ),
  );

  $employees = new WP_Query($args);
  ?>

  <?php if ($employees->have_posts()): ?>
    <div class="row g-2">

      <?php while ($employees->have_posts()):
        $employees->the_post(); ?>
        <div class="col-md-3">

          <div class="contact-card d-block overflow-hidden position-relative">

            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('medium', ['class' => 'contact-card-img-top']); ?>
            <?php endif; ?>

            <div class="contact-card-body position-absolute bottom-0 start-0 w-100 text-white">
              <h3 class="contact-card-name"><?php the_title(); ?></h3>

              <div class="contact-card-info">

                <?php $departments = get_the_terms(get_the_ID(), 'department'); ?>
                <?php if ($departments): ?>
                  <?php foreach ($departments as $department): ?>
                    <p class="mb-1"><?php echo $department->name; ?></p>
                  <?php endforeach; ?>
                <?php endif; ?>

                <?php if (get_field('telephone')): ?>
                  <p class="mb-1">
                    <i class="bi bi-telephone"></i>
                    <a href="tel:<?php echo esc_attr(get_field('telephone')); ?>" class="text-white text-decoration-none">
                      <?php the_field('telephone'); ?>
                    </a>
                  </p>
                <?php endif; ?>

                <?php if (get_field('mobile')): ?>
                  <p class="mb-1">
                    <i class="bi bi-phone"></i>
                    <a href="tel:<?php echo esc_attr(get_field('mobile')); ?>" class="text-white text-decoration-none">
                      <?php the_field('mobile'); ?>
                    </a>
                  </p>
                <?php endif; ?>

                <?php if (get_field('mail')): ?>
                  <p class="mb-1">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:<?php echo esc_attr(get_field('mail')); ?>" class="text-white text-decoration-none">
                      <?php the_field('mail'); ?>
                    </a>
                  </p>
                <?php endif; ?>
              </div>
            </div>

          </div>

        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </div>
  <?php endif; ?>

<?php endif; ?>
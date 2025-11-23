<?php
$departments = get_sub_field('departments');
?>
<?php if ($departments): ?>
  <div class="accordion" id="accordionContacts">
    <?php foreach ($departments as $dept_index => $department): ?>
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDept<?php echo $dept_index; ?>" aria-expanded="false">
            <?php echo esc_html($department['name']); ?>
          </button>
        </h3>
        <div id="collapseDept<?php echo $dept_index; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionContacts">
          <div class="accordion-body">
            <?php if ($department['contacts']): ?>
              <div class="row g-4">
                <?php foreach ($department['contacts'] as $contact): ?>
                  <div class="col-md-6">
                    <div class="contact-card">
                      <?php if ($contact['image']): ?>
                        <?php echo wp_get_attachment_image($contact['image']['ID'], 'thumbnail', false, ['class' => 'contact-image']); ?>
                      <?php endif; ?>
                      
                      <?php if ($contact['name']): ?>
                        <h4><?php echo esc_html($contact['name']); ?></h4>
                      <?php endif; ?>
                      
                      <?php if ($contact['job_title']): ?>
                        <p class="job-title"><?php echo esc_html($contact['job_title']); ?></p>
                      <?php endif; ?>
                      
                      <?php if ($contact['phonenumber']): ?>
                        <p><strong>Tel:</strong> <a href="tel:<?php echo esc_attr($contact['phonenumber']); ?>"><?php echo esc_html($contact['phonenumber']); ?></a></p>
                      <?php endif; ?>
                      
                      <?php if ($contact['mobilenumber']): ?>
                        <p><strong>Mobil:</strong> <a href="tel:<?php echo esc_attr($contact['mobilenumber']); ?>"><?php echo esc_html($contact['mobilenumber']); ?></a></p>
                      <?php endif; ?>
                      
                      <?php if ($contact['email']): ?>
                        <p><strong>E-Mail:</strong> <a href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a></p>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>


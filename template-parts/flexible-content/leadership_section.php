<section class="leadership">
      <div class="container">
         <div class="leadership-content padding position-relative overflow-hidden">
            <div class="gradient-circle bottom-left"></div>
            <div class="shape shape-gradient-circle bottom-center position-absolute"></div>
            <div class="row g-4">
               <div class="col-md-6">
                  <div class="leadership-left-content">
                     <?php if( $avatar = get_sub_field('avatar') ): ?>
                     <img src="<?php echo $avatar ? esc_url($avatar['url']) : get_template_directory_uri() . '/assets/img/media/leader1.png'; ?>" alt="<?php echo $avatar ? esc_attr($avatar['alt']) : 'team member 1'; ?>">
                     <?php endif; ?>
                     <div class="leadership-left-text-content">
                        <p class="pretitle-bold"><?php echo esc_html(get_sub_field('pretitle')); ?></p>
                        <h3 class="mb-0"><?php echo esc_html(get_sub_field('name')); ?></h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="leadership-right-content p16 text-primary position-relative">
                        <?php echo wp_kses_post(get_sub_field('description')); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
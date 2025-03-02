<section class="membership">
      <div class="container">
         <div class="membership-content rounded-5 overflow-hidden position-relative bg-gradient padding d-md-flex align-items-center justify-content-between gap-5">
            <div class="shape shape-gradient-circle left-bottom position-absolute"></div>
            <?php if( get_sub_field('logo') ): 
                $logo = get_sub_field('logo');
            ?>
            <div>
               <img src="<?php echo $logo ? esc_url($logo['url']) : get_template_directory_uri() . '/assets/img/media/csc_master_logo-small.png'; ?>" alt="<?php echo $logo ? esc_attr($logo['alt']) : 'Cyber security council'; ?>">
            </div>
            <?php endif; ?>
            <div class="merbership-text-content">
               <h4 class="mb-4"><?php echo esc_html(get_sub_field('title')); ?></h4>
               <p class="p16 text-primary"><?php echo wp_kses_post(get_sub_field('description')); ?></p>
               <?php if( have_rows('card_items') ): ?>
                <?php while( have_rows('card_items') ): the_row(); ?>
               <div class="membership-sub-text-content padding rounded-2 p16 fw-normal">
                <?php echo wp_kses_post(get_sub_field('description')); ?>
               </div>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
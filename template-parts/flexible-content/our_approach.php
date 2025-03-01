<?php 
$block_content = get_sub_field('block_content');
?>
<section class="our-approach <?php echo esc_attr(get_sub_field('is_overlap_on_top') ? 'overlap-on-top' : ''); ?>">
      <div class="container">
         <div class="our-approach-content-wrapper d-flex align-items-center rounded-5 bg-gradient overlap-area overflow-hidden">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                    <?php if ($block_content['has_label']) : ?>
                     <p class="pretitle-bold"><?php echo esc_html($block_content['label']); ?></p>
                     <?php endif; ?>
                     <h3><?php echo esc_html($block_content['title']); ?></h3>
                     <div class="text-primary p16"><?php echo wp_kses_post($block_content['lead']); ?></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
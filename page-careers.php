<?php
/**
 * The template for displaying careers page
 *
 * This is the template that displays the careers pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>

   <section class="career-hero overflow-hidden position-relative">
      <div class="gradeint-circle"></div>
      <div class="gradeint-circle right"></div>
      <div class="shape shape-gradient-circle left-top position-absolute"></div>
      <div class="shape shape-gradient-circle right-bottom position-absolute"></div>
      <div class="container">
         <div class="career-content">
            <div class="career-main-content mx-auto text-center">
               <?php 
               $hero_section_group = get_field('career_hero_section');
               if($section_label = $hero_section_group['label']): 
               ?>
                  <p class="pretitle-bold"><?php echo esc_html($section_label); ?></p>
               <?php endif; ?>
               
               <?php if($title = $hero_section_group['title']) : ?>
                  <h1><?php echo esc_html($title); ?></h1>
               <?php endif; ?>
               
               <?php if($lead_text = $hero_section_group['lead']) : ?>
                  <p class="pt-1 mb-4"><?php echo esc_html($lead_text); ?></p>
               <?php endif; ?>
               
               <?php if($button = $hero_section_group['button']) : ?>
                  <a class="btn btn-primary" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']) ?: '_self'; ?>">
                     <?php echo esc_html($button['title']); ?>
                  </a>
               <?php endif; ?>
            </div>
            <div class="future-works bg-gradient rounded-5 overflow-hidden">
               <?php if(have_rows('value_boxes')): ?>
               <div class="future-works-boxes grid">
                  <?php while(have_rows('value_boxes')): the_row(); ?>
                  <div class="future-works-item position-relative">
                     <div class="future-works-item-content d-flex flex-column text-center align-items-center">
                        <?php if($icon = get_sub_field('icon')): ?>
                           <img class="mb-3" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                        <div class="d-flex flex-column pt-1">
                           <?php if($box_title = get_sub_field('title')): ?>
                              <h5><?php echo esc_html($box_title); ?></h5>
                           <?php endif; ?>
                           <?php if($description = get_sub_field('description')): ?>
                              <p class="p14 pt-1"><?php echo esc_html($description); ?></p>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
                  <?php endwhile; ?>
               </div>
               <?php endif; ?>
               
               <div class="future-bottom-text-content text-center mx-auto">
                  <?php if($bottom_title = get_field('future_works_title')): ?>
                     <h2 class="mb-3"><?php echo esc_html($bottom_title); ?></h2>
                  <?php endif; ?>
                  <?php if($bottom_text = get_field('future_works_lead')): ?>
                     <p class="p16 pt-1 mx-auto text-primary"><?php echo esc_html($bottom_text); ?></p>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section> <!-- section.career-hero -->
   
   <section class="grid future-block-section px-3 px-md-0">
      <div class="blocks-item d-flex align-items-center justify-content-center text-center text-md-start justify-content-md-end">
         <div class="content">
            <h2 class="text-white"><?php echo esc_html( get_field('future_box_title') ); ?></h2>
         </div>
      </div>
      <div class="blocks-item d-flex align-items-center justify-content-center text-center text-md-start">
         <div class="content text-white">
            <?php echo wp_kses_post(get_field('future_box_content')); ?>
         </div>
      </div>
   </section>
   <!-- image section end -->
   <!-- value section start -->
   <section class="value-section">
      <div class="container">
         <div class="value-content">
            <?php 
            $core_values = get_field('core_values_section');
            if($core_values) : ?>
            <div class="value-head">
               <div class="row">
                  <div class="col-lg-6">
                     <?php if($core_values['title']) : ?>
                        <h2 class="mb-3"><?php echo esc_html($core_values['title']); ?></h2>
                     <?php endif; ?>
                     <?php if($core_values['lead_text']) : ?>
                        <p class="p16 pt-1"><?php echo esc_html($core_values['lead_text']); ?></p>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <?php if(have_rows('values')): ?>
            <div class="values">
               <div class="row g-5">
                  <?php while(have_rows('values')): the_row(); ?>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <?php if($icon = get_sub_field('icon')): ?>
                           <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                        <hr class="opacity-100">
                        <?php if($title = get_sub_field('title')): ?>
                           <h5><?php echo esc_html($title); ?></h5>
                        <?php endif; ?>
                        <?php if($description = get_sub_field('description')): ?>
                           <p><?php echo esc_html($description); ?></p>
                        <?php endif; ?>
                     </div>
                  </div>
                  <?php endwhile; ?>
               </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
         </div>
      </div>
   </section>
   <!-- value section end -->
   <!-- opening section start -->
   <section class="openning-section">
      <div class="container">
         <div class="opening-content bg-gradient rounded-5 position-relative overflow-hidden">
            <div class="shape shape-bg position-absolute"></div>
            <?php 
            $openings_section = get_field('openings_section');
            if($openings_section) : ?>
               <div class="operning-content-head">
                  <h2 class="mb-3"><?php echo esc_html($openings_section['title']); ?></h2>
                  <p class="pt-1"><?php echo esc_html($openings_section['description']); ?></p>
               </div>
               
               <?php if(have_rows('openings_section_locations')): ?>
               <div class="location d-flex gap flex-wrap">
                  <?php while(have_rows('openings_section_locations')): the_row(); ?>
                     <span class="p14 px-3 border-0 item">
                        <?php echo esc_html(get_sub_field('location')); ?>
                     </span>
                  <?php endwhile; ?>
               </div>
               <?php endif; ?>
            <?php endif; ?>

            <div class="job-list d-flex flex-column gap-4">
               <?php
               $args = array(
                   'post_type' => 'job',
                   'posts_per_page' => -1
               );
               $jobs = new WP_Query($args);
               
               if($jobs->have_posts()) : 
                   while($jobs->have_posts()) : $jobs->the_post();
                       $job_details = get_field('job_details');
                       $job_link = $job_details['job_link'];
               ?>
                   <div class="list-item rounded-2 py-3 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                       <div>
                           <h5 class="mb-1"><?php the_title(); ?></h5>
                           <?php if($job_details) : ?>
                           <p class="p16">
                               <?php echo esc_html($job_details['location']); ?> - 
                               <?php echo esc_html($job_details['job_type']); ?>
                           </p>
                           <?php endif; ?>
                       </div>
                       <?php if($job_link) : ?>
                       <div class="d-inline-flex align-items-center gap-1">
                           <a class="h6 text-primary d-inline-flex align-items-center" href="<?php echo esc_url($job_link['url']); ?>">
                              <?php echo esc_html($job_link['title'] ? $job_link['title'] : 'More details'); ?>
                              <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/ArrowExpand.svg'; ?>" alt="ArrowExpand">
                           </a>
                       </div>
                       <?php endif; ?>
                   </div>
               <?php
                   endwhile;
                   wp_reset_postdata();
               else :
                   echo '<p>No current openings at this time.</p>';
               endif;
               ?>
            </div>
         </div>
      </div>
   </section>
   <!-- opening section end -->

<?php
// get_sidebar();
get_footer();

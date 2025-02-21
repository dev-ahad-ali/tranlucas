<?php
/**
 * Template Name: Home Page
 *
 * This is the front page template file in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>
   <section class="hero home-hero mx-auto bg-primary rounded-5 overflow-hidden">
      <div class="hero-content-container px-sm-4 px-lg-5 d-flex align-items-center justify-content-center  position-relative overflow-hidden">
         <div class="hero-content padding d-md-inline-flex align-items-center justify-content-between container">
            <h1 class="text-white mb-3 mb-lg-0"><?php echo esc_html( get_field('hero_section_title') ); ?></h1>
            <p class="p18"><?php echo wp_kses_post ( get_field('hero_section_lead') ); ?></p>
         </div>
         <div class="shape shape-gradient-circle color-1 position-absolute bg-gradient"></div>
         <div class="shape shape-gradient-circle color-2 position-absolute bg-gradient"></div>
         <div class="shape shape-bg position-absolute"></div>
      </div>
   </section> <!-- .home-hero -->

   <section class="certificate padding">
      <div class="container">
         <div class="certificate-content d-md-flex align-items-center">
            <div class="certificate-left-content mx-auto mx-md-0 mb-4 mb-md-0 position-relative">
               <p class="p14 mb-0 text-center text-md-start"><?php echo wp_kses_post ( get_field('certifications_section_lead') ); ?></p>
            </div>
            <?php if ( have_rows( 'certificate_logos' ) ) : ?> 
            <div class="certificate-img w-100 d-grid gap-3 gap-md-4 gap-lg-5 align-items-center justify-content-evenly justify-content-md-between">
            <?php while( have_rows('certificate_logos') ): the_row(); 
             $logo = get_sub_field('certificate_logo');
            ?>
               <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </section> <!-- .certificate -->

   <section class="service">
      <div class="container">
         <?php $title_group = get_field('we_are_tranchulas_section');
         if($title_group) : ?>
         <div class="service-content mx-auto text-center padding">
            <p class="text-uppercase pretitle-bold"><?php echo esc_html($title_group['label']); ?></p>
            <h2><?php echo esc_html($title_group['title']); ?></h2>
            <p class="p18"><?php echo wp_kses_post ( $title_group['lead']); ?></p>
         </div>
         <?php endif; ?>
         <div class="service-boxe grid">
            <!-- active service start -->
            <?php if(have_rows('technology_flaws')): 
                $featured_found = false;
                $non_featured = array();
                
                while(have_rows('technology_flaws')): the_row();
                    if(get_sub_field('is_featured')) {
                     // Only process the first featured item
                     if(!$featured_found) {
                        $featured_found = true;                         
                     ?>

               <div class="service-item active active-service padding bg-primary rounded-3 d-flex align-items-center">
                  <div class="d-inline-flex flex-column gap-4">
                     <!-- <img class="" src="<?php echo get_template_directory_uri() . '/assets/img/icons/Target.svg'; ?>" alt="target"> -->
                     <?php
                        $featured_item_icon = get_sub_field('icon');
                     if(!empty($featured_item_icon)) : ?>
                        <img src="<?php echo esc_url($featured_item_icon['url']); ?>" alt="<?php echo esc_attr($featured_item_icon['alt']); ?>">
                     <?php endif; ?>
                     <h4 class="text-white"><?php echo esc_html(get_sub_field('title')); ?></h4>
                     <p class="p16"><?php echo wp_kses_post(get_sub_field('description')); ?></p>
                     <div>
                        <?php $link = get_sub_field('explore_button'); ?>
                        <a class="btn btn-secondary" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                           <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Triangle.svg'; ?>" alt="Triangle">
                           <?php echo esc_html($link['title']); ?>
                        </a>
                     </div>
                  </div>
               </div>
            <?php 
            
                  } else {
                     // Skip subsequent featured items
                     continue;
                  }
            
               } else {
                     $non_featured[] = get_row(true); 
               }
            endwhile; ?>
            <!-- active service start -->
            <div class="service-right-boxe grid">
               <?php foreach($non_featured as $item): ?>
                  <div class="service-item d-flex flex-column gap-3 bg-primary rounded-3 position-relative">
                     <?php if(!empty($item['icon'])) : ?>
                        <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="<?php echo esc_attr($item['icon']['alt']); ?>">
                     <?php endif; ?>
                     <h6 class="p16 text-white"><?php echo esc_html($item['title']); ?></h6>
                     <?php if($item['explore_button']) : // Changed from 'link' to 'explore_button' ?>
                     <a class="position-absolute" href="<?php echo esc_url($item['explore_button']['url']); ?>" target="<?php echo esc_attr($item['explore_button']['target'] ?: '_self'); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Extend.svg'; ?>" alt="external link icon">
                     </a>
                     <?php endif; ?>
                  </div>
               <?php endforeach; ?>
            </div>
            <?php endif; ?>
         </div> <!-- .service-boxe -->
      </div>
   </section> <!-- .service -->

   <?php 
   if ( have_rows('partner_items') ) : ?>
   <section class="partner padding">
      <div class="container d-flex flex-column">
         <div class="partner-logo d-flex gap-3 flex-wrap align-items-center justify-content-center">
            <?php while( have_rows('partner_items') ) : the_row(); 
               $partnerLogo = get_sub_field('partner_logo');
            ?>
               <?php if(!empty($partnerLogo)) : ?>
                  <img class="mw-100" src="<?php echo esc_url( $partnerLogo['url']); ?>" alt="<?php echo esc_attr($partnerLogo['alt']); ?>">
                  <?php else : ?>
                  <p>Partner logo is not added please add partner logo.</p>
               <?php endif; ?>
            <?php endwhile; ?>
         </div>
      </div>
   </section> <!-- .partner -->
   <?php endif; ?>

   <section class="statistic-section">
      <div class="container">
         <div class="statistic-section-container bg-gradient padding position-relative overflow-hidden">
            <div class="gradeint-circle"></div>
            <div class="shape shape-bg position-absolute"></div>
            <?php if($stats = get_field('statistics_section')): ?>
            <div class="number-content mx-auto text-center padding">
               <?php if($stats['label']) : ?>
                  <p class="text-uppercase pretitle-bold"><?php echo esc_html($stats['label']); ?></p>
               <?php endif; ?>

               <h2><?php echo esc_html( $stats['title'] ); ?></h2>
               <p class="p18 text-primary"><?php echo wp_kses_post($stats['lead']); ?></p>
            </div> <!-- .number-content -->
            <div class="number-item-container grid">
               <?php foreach( get_field('statistics') as $stat): ?>
               <div class="number-item text-center position-relative">
                  <p class="h1" data-target="<?php echo esc_attr($stat['stat_number']); ?>">0</p>
                  <p class="p16"><?php echo esc_html($stat['stat_label']); ?></p>
               </div>
               <?php endforeach; ?>
            </div> <!-- .number-item-container -->
            <?php endif; ?>
         </div>
      </div>
   </section> <!-- .statistic-section -->
   
   <section class="offices padding">
      <div class="container">
         <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/media/Offices.png'; ?>" alt="">
      </div>
   </section> <!-- .offices -->

   <section class="blog padding">
      <div class="container">
         <div class="blog-content">
            <p class="pretitle-bold">The latest news</p>
            <h2>Our word on security</h2>
            <div class="blog-post padding">
               <div class="main-blog-post grid">
                  <div class="card">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                     <div class="card-body pt-3 mt-sm-3">
                        <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                           Professional</a>
                        <p class="p14">12 Feb 2024</p>
                     </div>
                  </div>
                  <div class="card">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                     <div class="card-body pt-3 mt-sm-3">
                        <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                           Professional</a>
                        <p class="p14">12 Feb 2024</p>
                     </div>
                  </div>
                  <div class="blog-text grid">
                     <div class="card">
                        <div class="card-body">
                           <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                              Professional</a>
                           <p class="p14 card-text">12 Feb 2024</p>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                              Professional</a>
                           <p class="p14 card-text">12 Feb 2024</p>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                              Professional</a>
                           <p class="p14 card-text">12 Feb 2024</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> <!-- .blog -->

   <?php 
   // Conditionally include FAQ section
   if (get_field('enable_global_faq')) {
      get_template_part('partials/global-faq');
   }
   ?>

<?php
// get_sidebar();
get_footer();

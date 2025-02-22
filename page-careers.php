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

	<!-- career hero section start -->
	<!-- <section class="career-hero">
      <div class="container">
         <div class="career-content padding">
            <div class="career-main-content mx-auto text-center">
               <p class="pretitle-bold">careers on tranchulas</p>
               <h1>Work with us</h1>
               <p class="pt-1 mb-4">Explore remote-friendly, flexible opportunities and join our mission to make work life simpler, more pleasant and more productive.</p>
               <a class="btn btn-primary" href="#">View careers</a>
            </div>
            <div class="future-works bg-gradient rounded-5 padding overflow-hidden">
               <div class="future-works-boxes grid">
                  <div class="future-works-item d-flex flex-column text-center align-items-center position-relative">
                     <img class="mb-3" src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                     <div class="d-flex flex-column pt-1">
                        <h5>Connected</h5>
                        <p class="p14 pt-1">We come together wherever we are – across time zones, regions,
                           offices and
                           screens.
                        </p>
                     </div>
                  </div>
                  <div class="future-works-item d-flex flex-column text-center align-items-center position-relative">
                     <img class="mb-3" src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                     <div class="d-flex flex-column pt-1">
                        <h5>Connected</h5>
                        <p class="p14 pt-1">We come together wherever we are – across time zones, regions, offices and screens.</p>
                     </div>
                  </div>
                  <div class="future-works-item d-flex flex-column text-center align-items-center position-relative">
                     <img class="mb-3" src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                     <div class="d-flex flex-column pt-1">
                        <h5>Connected</h5>
                        <p class="p14 pt-1">We come together wherever we are – across time zones, regions,
                           offices and
                           screens.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="future-bottom-text-content text-center mx-auto">
                  <h2 class="mb-3">Tranchulas is where the future works</h2>
                  <p class="p16 pt-1 mx-auto text-primary">Every day, we refine, iterate and explore how to make work better for everyone. Join us in creating a better future of work that’s more connected, inclusive and flexible.</p>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section class="career-hero">
      <div class="container">
         <div class="career-content padding">
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
            <div class="future-works bg-gradient rounded-5 padding overflow-hidden">
               <?php if(have_rows('value_boxes')): ?>
               <div class="future-works-boxes grid">
                  <?php while(have_rows('value_boxes')): the_row(); ?>
                  <div class="future-works-item d-flex flex-column text-center align-items-center position-relative">
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
   
   <!-- image section start -->
   <section class="grid images-section">
      <div class="blocks-item padding d-flex align-items-center justify-content-end">
         <div class="img-content">
            <h2 class="text-white">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h2>
         </div>
      </div>
      <div class="blocks-item padding d-flex align-items-center">
         <div class="img-content">
            <p class="text-white">We’re dedicated to hiring diverse talent and ensuring that we treat you with respect
               and support
               throughout the interview process and once you join Slack.
               <br>
               <br>

               We embrace diversity and strive to create conditions that provide everyone with an equal opportunity to
               thrive. 
            </p>
         </div>
      </div>
   </section>
   <!-- image section end -->
   <!-- value section start -->
   <section class="value-section">
      <div class="container">
         <div class="value-content padding">
            <div class="value-head">
               <div class="row">
                  <div class="col-lg-6">
                     <h2 class="mb-3">Our core values</h2>
                     <p class="p16 pt-1">These are some of the values that we live by as a company. We work by them,
                        too.
                        We’re building
                        a platform and products that we believe in, knowing that there is real value to be gained from
                        helping people to simplify whatever it is that they do and bring more of themselves to their
                        work, wherever they are.</p>
                  </div>
               </div>
            </div>
            <div class="values">
               <div class="row g-5">
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                     <div class="value-item">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Security.png'; ?>" alt="">
                        <hr class="opacity-100">
                        <h5>Empathy</h5>
                        <p>Donec mollis tincidunt augue, in finibus orci imperdiet quis. In vitae nibh consequat,
                           condimentum lacus.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- value section end -->
   <!-- opening section start -->
   <section class="openning-section">
      <div class="container">
         <div class="opening-content bg-gradient padding rounded-5">
            <div class="operning-content-head">
               <h2 class="mb-3">Current Openings</h2>
               <p class="pt-1">Explore our open roles for working totally remotely, from the office or somewhere in
                  between.</p>
            </div>
            <div class="location d-flex gap flex-wrap">
               <button class="p14 px-3 border-0" type="button">Islamabad, Pakistan</button>
               <button class="p14 px-3 border-0" type="button">London, UK</button>
               <button class="p14 px-3 border-0" type="button">Birmingham, UK</button>
               <button class="p14 px-3 border-0" type="button">Melbourne, Australias</button>
               <button class="p14 px-3 border-0" type="button">Sydney, Australia</button>
            </div>
            <div class="list d-flex flex-column gap-4">
               <div
                  class="list-item rounded-2 py-3 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                  <div>
                     <h5 class="mb-1">Information Security Researchers</h5>
                     <p class="p16">Remote - Full Time</p>
                  </div>
                  <div class="d-inline-flex align-items-center gap-1">
                     <a class="h6 text-primary" href="#">More details</a><img src="<?php echo get_template_directory_uri() . '/assets/img/icons/arrowexpand.png'; ?>"
                        alt="">
                  </div>
               </div>
               <div
                  class="list-item rounded-2 py-3 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                  <div>
                     <h5 class="mb-1">Information Security Researchers</h5>
                     <p class="p16">Remote - Full Time</p>
                  </div>
                  <div class="d-inline-flex align-items-center gap-1">
                     <a class="h6 text-primary" href="#">More details</a><img src="<?php echo get_template_directory_uri() . '/assets/img/icons/arrowexpand.png'; ?>"
                        alt="">
                  </div>
               </div>
               <div
                  class="list-item rounded-2 py-3 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                  <div>
                     <h5 class="mb-1">Information Security Researchers</h5>
                     <p class="p16">Remote - Full Time</p>
                  </div>
                  <div class="d-inline-flex align-items-center gap-1">
                     <a class="h6 text-primary" href="#">More details</a><img src="<?php echo get_template_directory_uri() . '/assets/img/icons/arrowexpand.png'; ?>"
                        alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- opening section end -->

<?php
// get_sidebar();
get_footer();

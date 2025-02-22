<?php
/**
 * The template for contact pages
 *
 * This is the template that displays contact pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>

	<!-- hero section start -->
	<section class="contect-hero">
      <div class="container">
         <div class="contact-hero-content-container bg-gradient rounded-5 padding">
            <div class="row g-5">
               <div class="col-lg-6">
                  <div class="contact-hero-content d-flex gap flex-column">
                  <?php if($contact_section = get_field('contact_section')): ?>
                     <div>
                        <?php if($contact_section['label']): ?>
                        <span class="pretitle-bold"><?php echo esc_html($contact_section['label']); ?></span>
                        <?php endif; ?>
                        <?php if($contact_section['title']): ?>
                        <h1><?php echo esc_html($contact_section['title']); ?></h1>
                        <?php endif; ?>
                     </div>
                     
                     <?php if($contact_section['services']): ?>
                     <ul class="list-unstyled ps-3 mb-0 d-flex flex-column gap position-relative">
                        <?php foreach($contact_section['services'] as $service): ?>
                        <li class="d-flex flex-column gap-1 ps-3">
                           <?php if($service['service_title']): ?>
                           <h6><?php echo esc_html($service['service_title']); ?></h6>
                           <?php endif; ?>
                           <?php if($service['service_email']): ?>
                           <a class="p16 text-primary text-decoration-none"
                              href="mailto:<?php echo esc_attr($service['service_email']); ?>">
                              <?php echo esc_html($service['service_email']); ?>
                           </a>
                           <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                     </ul>
                     <?php endif; ?>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="col-lg-6">
                  <form class="padding rounded-5 bg-white">
                     <div class="">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName">
                     </div>
                     <div class="">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                     <div class="">
                        <label for="exampleInputPhoneNumber" class="form-label">Phone number (optional)</label>
                        <input type="text" class="form-control" id="exampleInputPhoneNumber">
                     </div>
                     <div class="">
                        <label for="exampleInputCompany" class="form-label">Company (optional)</label>
                        <input type="text" class="form-control" id="exampleInputCompany">
                     </div>
                     <div class="">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                     <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send message</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- offices information section start -->
    <?php if ( $our_office = get_field('our_office') ) : ?>
   <section class="offices offices-infomation padding">
      <div class="container">
         <div class="offices-infomation-content">
            <h2><?php echo esc_html($our_office['section_title']); ?></h2>
            <?php if ($our_office['office_locations']): ?>
            <div class="information-container row">
               <?php foreach ($our_office['office_locations'] as $office_location ) : ?>
               <div class="information-item col-sm-6 col-md-4 col-lg-3 position-relative ">
                  <p class="pretitle-bold mb-1"><?php echo esc_html($office_location['region']) ;?></p>
                  <h6 class="mb-1"><?php echo esc_html($office_location['country']) ;?></h6>
                  <address class="p-14 text-primary mb-4"><?php echo wp_kses_post($office_location['address']) ;?></address>
                  <?php 
                  $phone =  $office_location['phone_number'];
                  if ($phone) : ?>
                  <div class="text-primary">
                     <span>Tel:</span> <a class="text-primary" href="<?php echo esc_url($phone['url']); ?>"><?php echo esc_html($phone['title']); ?></a>
                  </div>
                  <?php endif; ?>
               </div>
               <?php endforeach; ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </section>
   <?php endif; ?>
   <!-- offices information section end -->

   <?php 
  // Conditionally include office locations banner section
  if ( get_field('enable_global_office_locations_banner') ) {
      get_template_part('partials/global-offices-banner');
   } 
  
  ?>
   
   <?php 
   // Conditionally include FAQ section
   if (get_field('enable_global_faq')) {
      get_template_part('partials/global-faq');
   }
   ?>

<?php
// get_sidebar();
get_footer();

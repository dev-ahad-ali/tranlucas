<?php
/**
 * Template Name: Pricing Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>
   <section class="hero overflow-hidden">
      <div class="gradient-circle"></div>
      <div class="gradient-circle right"></div>
      <div class="shape shape-gradient-circle left-top position-absolute"></div>
      <div class="shape shape-gradient-circle right-bottom position-absolute"></div>
      <div class="container d-flex align-items-center flex-column">
         <div class="hero-content d-flex flex-column text-white text-center mx-auto">
            <span class="label">Transparent and Flexible Pricing</span>
            <h2>DevSecOps Services Tailored to Your Needs</h2>
            <p class="p18 text-primary">At Tranchulas, we believe in clarity and value. Whether you’re a startup
               securing your first pipeline or an enterprise optimizing a multi-cloud environment, our flexible pricing
               options ensure you only pay for what you need. From defined, one-time project tiers to ongoing
               subscription plans, we’ve got you covered.</p>
         </div>
         <div class="list-card-block rounded-5 bg-gradient mx-auto">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 info-item position-relative">
                     <div class="info-title gap mb-4 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/crop.png'; ?>" alt="">
                        <h5 class="mb-0">Tiered Pricing</h5>
                     </div>
                     <div class="info-list">
                        <ul class="mb-0">
                           <li class="p16">One-Time Investment: Ideal for businesses with specific, clearly defined security
                              needs.
                           </li>
                           <li class="p16">Focused Deliverables: Get immediate results on prioritized areas.</li>
                           <li class="p16">No Long-Term Commitment: Perfect for targeted improvements—like securing a single
                              CI/CD pipeline
                              or performing a compliance audit.</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 info-item position-relative">
                     <div class="info-title gap mb-4 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/crop.png'; ?>" alt="">
                        <h5 class="mb-0">Tiered Pricing</h5>
                     </div>
                     <div class="info-list">
                        <ul class="mb-0">
                           <li class="p16">One-Time Investment: Ideal for businesses with specific, clearly defined security
                              needs.
                           </li>
                           <li class="p16">Focused Deliverables: Get immediate results on prioritized areas.</li>
                           <li class="p16">No Long-Term Commitment: Perfect for targeted improvements—like securing a single
                              CI/CD pipeline
                              or performing a compliance audit.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- pricing section start-->
   <section class="pricing">
      <div class="container">
         <div class="switch text-center">
            <div class="form-check form-switch ps-0 mb-0 d-inline-flex gap align-items-center">
               <label class="h5 mb-0 form-check-label" for="flexSwitchCheckChecked">Tiered Pricing</label>
               <input class="form-check-input m-0" type="checkbox" role="switch" id="flexSwitchCheckChecked">
               <label class="h5 mb-0 form-check-label" for="flexSwitchCheckChecked">Subscription</label>
            </div>
         </div>
         <div class="pricing-content row g-3 g-xl-4 align-items-center">
            <div class="col-md-6 col-xl-4">
               <div class="pricing-plan__card">
                  <div class="pricing-item position-relative rounded-2">
                     <h4>Basic</h4>
                     <p class="pretitle-bold mb-4">Startups & Small Biz</p>
                     <ul class="mb-0 position-relative">
                        <li>DevSecOps assessment</li>
                        <li>Basic CI/CD security setup</li>
                        <li>ISO 27001 readiness checks</li>
                        <li>Basic SAST</li>
                        <li>Email support (30 days)</li>
                     </ul>
                     <div class="price d-flex align-items-center justify-content-between">
                        <div>
                           <p class="h5 mb-0">£3,000</p>
                           <p class="p14">per project</p>
                        </div>
                        <a class="btn btn-primary" href="#">Get Started</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-xl-4">
               <div class="pricing-plan__card">
                  <div class="pricing-item position-relative rounded-2">
                     <div class="bg-primary py-3 badge-label top-0 position-absolute">
                        <span class="writing-mode-vlr text-uppercase">Most popular</span>
                     </div>
                     <h4>Advanced</h4>
                     <p class="pretitle-bold mb-4">Mid-Sized Organizations</p>
                     <ul class="mb-0 position-relative">
                        <li>Everything in Basic</li>
                        <li>Secure SDLC integration</li>
                        <li>Threat modeling workshops</li>
                        <li>Multi-cloud security</li>
                        <li>Advanced SAST & DAST</li>
                        <li>Email & chat support (90 days)</li>
                     </ul>
                     <div class="price d-flex align-items-center justify-content-between">
                        <div>
                           <p class="h5 mb-0">£3,000</p>
                           <p class="p14">per project</p>
                        </div>
                        <a class="btn btn-primary" href="#">Get Started</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4">
               <div class="pricing-plan__card">
                  <div class="pricing-item position-relative rounded-2">
                     <h4>Enterprise</h4>
                     <p class="pretitle-bold mb-4">Large Enterprises</p>
                     <ul class="mb-0 position-relative">
                        <li>Tailored DevSecOps solutions</li>
                        <li>Custom IaC Security</li>
                        <li>Full Compliance as Code</li>
                        <li>Dedicated advisor & training</li>
                        <li>24/7 Support</li>
                     </ul>
                     <div class="price d-flex align-items-center justify-content-between">
                        <div>
                           <p class="p16 text-primary">Contact Us for a Quote</p>
                        </div>
                        <a class="btn btn-primary" href="#">Get Started</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- pricing section end -->
   <!--price box section start-->
   <section class="price-box">
      <div class="container">
         <div class="price-box-content bg-gradient rounded-5">
            <div class="info-title gap mb-3 d-flex align-items-center">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/integration.png'; ?>" alt="">
               <h4 class="mb-0">Add-Ons & Customization</h4>
            </div>
            <div class="price-box-widget pt-3 grid">
               <div class="price-box-item rounded-2 border border-primary">
                  <div class="mb-3">
                     <h5 class="mb-0">Custom Threat Modeling Workshops</h5>
                     <p class="p16 text-primary">£1,560 per session</p>
                  </div>
                  <p class="p14">Tailored sessions to identify and mitigate system-specific threats.</p>
               </div>
               <div class="price-box-item rounded-2 border border-primary">
                  <div class="mb-3">
                     <h5 class="mb-0">Custom Threat Modeling Workshops</h5>
                     <p class="p16 text-primary">£1,560 per session</p>
                  </div>
                  <p class="p14">Tailored sessions to identify and mitigate system-specific threats.</p>
               </div>
               <div class="price-box-item rounded-2 border border-primary">
                  <div class="mb-3">
                     <h5 class="mb-0">Custom Threat Modeling Workshops</h5>
                     <p class="p16 text-primary">£1,560 per session</p>
                  </div>
                  <p class="p14">Tailored sessions to identify and mitigate system-specific threats.</p>
               </div>
               <div class="price-box-item rounded-2 border border-primary">
                  <div class="mb-3">
                     <h5 class="mb-0">Custom Threat Modeling Workshops</h5>
                     <p class="p16 text-primary">£1,560 per session</p>
                  </div>
                  <p class="p14">Tailored sessions to identify and mitigate system-specific threats.</p>
               </div>
               <div class="price-box-item rounded-2 border border-primary">
                  <div class="mb-3">
                     <h5 class="mb-0">Custom Threat Modeling Workshops</h5>
                     <p class="p16 text-primary">£1,560 per session</p>
                  </div>
                  <p class="p14">Tailored sessions to identify and mitigate system-specific threats.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--price box section end -->

   <section class="get-in-touch">
      <div class="container">
         <div class="get-in-touch-content position-relative overflow-hidden text-center d-flex flex-column align-items-center">
            <div class="shape shape-gradient-circle bottom-center position-absolute"></div>
            <h3 class="mb-4">Not Sure Which Option Suits You?</h3>
            <p class="pt-3 mb-4">We understand that every organization’s needs are unique. If you’re unsure about which tier or plan is right for you, or if you require a fully customized solution, our team is here to help.</p>
            <div class="pt-3">
               <a class="btn btn-primary" href="#">Contact us</a>
            </div>
         </div>
      </div>
   </section>

   <?php 
   // Conditionally include FAQ section
   if (get_field('enable_global_faq')) {
      get_template_part('partials/global-faq');
   }
   ?>

<?php
// get_sidebar();
get_footer();

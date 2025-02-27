<?php
/**
 * Template Name: Training Calendar
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>

	<!-- traning-calender section start -->
	<section class="traning-calender">
      <div class="container">
         <div class="traning-calender-content padding">
            <h1 class="mb-4">Training Calendar</h1>
            <div class="row align-items-center">
               <div class="col-md-4">
                  <div class="search-bar d-flex align-items-center gap">
                     <button class="bg-transparent border-0 p-0" type="button">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Search.png'; ?>" alt="">
                     </button>
                     <select class="form-select border-primary p16 text-primary" aria-label="Large select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="location d-flex gap flex-wrap">
                     <button class="p14 px-3 border-0 item" type="button">Islamabad, Pakistan</button>
                     <button class="p14 px-3 border-0 item" type="button">London, UK</button>
                     <button class="p14 px-3 border-0 item" type="button">Birmingham, UK</button>
                     <button class="p14 px-3 border-0 item" type="button">Melbourne, Australias</button>
                     <button class="p14 px-3 border-0 item" type="button">Sydney, Australia</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- traning-calender section end -->
   <!-- course section start -->
   <section class="course">
      <div class="container">
         <h5 class="mb-4">2 courses available</h5>
         <div class="course-container d-grid gap">
            <div class="course-item">
               <div class="row">
                  <div class="col-lg-4 align-self-center">
                     <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/media/course-img.png'; ?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="course-ditails d-flex h-100 flex-column gap">
                        <div class="course-title">
                           <h4>Hand-on penetration testing and ethical hacking training course</h4>
                           <div class="pt-1">
                              <a class="text-primary p16" href="#">Go to course info</a><img
                                 src="<?php echo get_template_directory_uri() . '/assets/img/icons/arrowexpand.png'; ?>" alt="">
                           </div>
                        </div>
                        <div class="dates d-flex flex-column gap">
                           <div
                              class="dates-item d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
                              <div>
                                 <p class="p14 mb-1">18 - 21</p>
                                 <h5 class="mb-0">February, 2025</h5>
                              </div>
                              <div>
                                 <p class="p16 mb-1">Tranchulas Office</p>
                                 <p>London, UK</p>
                              </div>
                              <div>
                                 <button class="btn btn-primary disabled" type="button">Sold out</button>
                              </div>
                           </div>
                           <div
                              class="dates-item d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
                              <div>
                                 <p class="p14 mb-1">18 - 21</p>
                                 <h5 class="mb-0">February, 2025</h5>
                              </div>
                              <div>
                                 <p class="p16 mb-1">Tranchulas Office</p>
                                 <p>London, UK</p>
                              </div>
                              <div>
                                 <button class="btn btn-primary" type="button">Book now</button>
                              </div>
                           </div>
                           <div
                              class="dates-item d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
                              <div>
                                 <p class="p14 mb-1">18 - 21</p>
                                 <h5 class="mb-0">February, 2025</h5>
                              </div>
                              <div>
                                 <p class="p16 mb-1">Tranchulas Office</p>
                                 <p>London, UK</p>
                              </div>
                              <div>
                                 <button class="btn btn-primary" type="button">Book now</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <div class="course-item">
               <div class="row">
                  <div class="col-lg-4 align-self-center">
                     <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/media/course-img.png'; ?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="course-ditails d-flex h-100 flex-column gap">
                        <div class="course-title">
                           <h4>Hand-on penetration testing and ethical hacking training course</h4>
                           <div class="pt-1">
                              <a class="text-primary p16" href="#">Go to course info</a><img
                                 src="<?php echo get_template_directory_uri() . '/assets/img/icons/arrowexpand.png'; ?>" alt="">
                           </div>
                        </div>
                        <div class="dates d-flex flex-column gap">
                           <div
                              class="dates-item d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
                              <div>
                                 <p class="p14 mb-1">18 - 21</p>
                                 <h5 class="mb-0">February, 2025</h5>
                              </div>
                              <div>
                                 <p class="p16 mb-1">Tranchulas Office</p>
                                 <p>London, UK</p>
                              </div>
                              <div>
                                 <button class="btn btn-primary" type="button">Book now</button>
                              </div>
                           </div>
                           <div
                              class="dates-item d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
                              <div>
                                 <p class="p14 mb-1">18 - 21</p>
                                 <h5 class="mb-0">February, 2025</h5>
                              </div>
                              <div>
                                 <p class="p16 mb-1">Tranchulas Office</p>
                                 <p>London, UK</p>
                              </div>
                              <div>
                                 <button class="btn btn-primary" type="button">Book now</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
         </div>
      </div>
   </section>
   <!-- course section end -->


   <?php 
   // Conditionally include FAQ section
   if (get_field('enable_global_faq')) {
      get_template_part('partials/global-faq');
   }
   ?>

<?php
// get_sidebar();
get_footer();

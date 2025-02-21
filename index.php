<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>

	<!-- hero section start -->
	<section class="blog-hero">
      <div class="container">
         <div class="blog-topbar padding text-center">
            <p class="pretitle-bold">BLOG</p>
            <h1>Our word on security</h1>
         </div>
         <div class="big-post rounded-5 padding overflow-hidden d-flex align-items-end">
            <div class="card bg-transparent">
               <div class="card-body mt-0">
                  <a class="h3 text-white" href="#">Hands-on Web Application Penetration Testing Training Course –
                     Now
                     Accredited by GCHQ & IISP</a>
                  <p class="p18 text-white card-text">12 Feb 2024</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- text post section start -->
   <section class="text-post">
      <div class="container">
         <div class="grid padding border-bottom align-items-center">
            <div class="card">
               <div class="card-body mt-0">
                  <a class="h6" href="#">2500 hackers trained and counting: A big shout-out to Tranchulas course
                     participants in Birmingham last week</a>
                  <p class="p14 card-text">12 Feb 2024</p>
               </div>
            </div>
            <div class="card">
               <div class="card-body mt-0">
                  <a class="h6" href="#">Tranchulas seminar on The Past, Present and Future of Computer Hacking at
                     London South Bank University</a>
                  <p class="p14 card-text">12 Feb 2024</p>
               </div>
            </div>
            <div class="card">
               <div class="card-body mt-0">
                  <a class="h6" href="#">Tranchulas launches SecurityHub Mobile App for iPhone and Android</a>
                  <p class="p14 card-text">12 Feb 2024</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- text post section end -->
   <!-- regular post section start -->
   <section class="regular-post">
      <div class="container">
         <div class="blog-post padding grid">
            <!-- search box start  -->
            <div class="search-box-container d-flex flex-column gap">
               <form class="d-flex" role="search">
                  <div class="w-100">
                     <label for="" class="form-label">Search posts</label>
                     <div class="position-relative">
                        <input type="text" class="form-control" id="searchInput" type="search" placeholder="Search"
                           aria-label="Search">
                        <label class="position-absolute" for="searchInput">
                           <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Search.png'; ?>" alt="">
                        </label>
                     </div>
                  </div>
               </form>
               <!-- categories -->
               <div class="categories">
                  <h6>Categories</h6>
                  <div class="d-flex flex-wrap gap">
                     <button class="p14" type="button">Cyber Security (12)</button>
                     <button class="p14" type="button">Case Studies (35)</button>
                     <button class="p14" type="button">Category name (102)</button>
                     <button class="p14" type="button">Category name (19)</button>
                     <button class="p14" type="button">Category name (4)</button>
                  </div>
               </div>
               <div class="keyword">
                  <h6>Keywords</h6>
                  <div class="d-flex flex-wrap gap">
                     <button class="p14" type="button">#cyber-security</button>
                     <button class="p14" type="button">#ai</button>
                     <button class="p14" type="button">#red-teaming</button>
                     <button class="p14" type="button">#penetration-testing</button>
                     <button class="p14" type="button">#securityhub</button>
                  </div>
               </div>

            </div>
            <!-- search box start  -->


            <div class="main-blog-post grid">
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
               <div class="card">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/media/blog-post1.png'; ?>" class="card-img-top" alt="blog-post">
                  <div class="card-body">
                     <a class="h6" href="#">Layla (Xreach) – Youngest Tranchulas Certified Penetration Testing
                        Professional</a>
                     <p class="p14">12 Feb 2024</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- regular post section end -->
   <!-- FAQ section start -->
   <section class="faq">
      <div class="container">
         <div class="faq-content padding bg-gradient position-relative overflow-hidden">
            <div class="gradeint-circle"></div>
            <div class="row align-items-center g-3 gap-md-0">
               <div class="col-lg-4">
                  <div>
                     <p class="text-uppercase pretitle-bold">FAQ</p>
                     <h3>Questions? We have answers.</h3>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div>
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                           <h6 class="accordion-header border-bottom">
                              <button class="accordion-button pb-4" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Accordion Item #1
                              </button>
                           </h6>
                           <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <strong>This is the first item's accordion body.</strong> It is shown by default, until
                                 the collapse plugin adds the appropriate classes that we use to style each element.
                                 These classes control the overall appearance, as well as the showing and hiding via CSS
                                 transitions. You can modify any of this with custom CSS or overriding our default
                                 variables. It's also worth noting that just about any HTML can go within the
                                 <code>.accordion-body</code>, though the transition does limit overflow.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h6 class="accordion-header border-bottom">
                              <button class="accordion-button pb-4 collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Accordion Item #2
                              </button>
                           </h6>
                           <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                 until the collapse plugin adds the appropriate classes that we use to style each
                                 element. These classes control the overall appearance, as well as the showing and
                                 hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                 our default variables. It's also worth noting that just about any HTML can go within
                                 the <code>.accordion-body</code>, though the transition does limit overflow.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h6 class="accordion-header border-bottom">
                              <button class="accordion-button pb-4 collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Accordion Item #3
                              </button>
                           </h6>
                           <div id="collapseThree" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                 until the collapse plugin adds the appropriate classes that we use to style each
                                 element. These classes control the overall appearance, as well as the showing and
                                 hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                 our default variables. It's also worth noting that just about any HTML can go within
                                 the <code>.accordion-body</code>, though the transition does limit overflow.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FAQ section end -->

<?php
// get_sidebar();
get_footer();

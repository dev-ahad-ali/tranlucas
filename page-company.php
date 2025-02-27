<?php
/**
 * The template for displaying all pages
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

   <section class="hero bg-primary overflow-hidden">
      <div class="shape shape-gradient-circle center-top position-absolute" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/shape/center-circle.png';?>)"></div>
      <div class="container d-flex align-items-center">
         <div class="hero-content wide d-flex flex-column text-white text-center mx-auto">
            <span class="label">Company</span>
            <h1>Tranchulas: Innovating Cybersecurity for a Resilient Digital Future</h1>
            <p>Tranchulas is a global cybersecurity leader, providing advanced offensive and
               defensive cybersecurity
               solutions, compliance services, and managed security operations. With a focus on emerging
               threats—ransomware, AI-driven attacks, and evolving compliance mandates—we empower enterprises and
               governments worldwide to safeguard their operations, foster innovation, and thrive in an increasingly
               digital-first economy</p>
         </div>
      </div>
   </section>
   <!-- career hero section end -->
   <!--our approach section start -->
   <section class="our-approach">
      <div class="container">
         <div class="our-approach-content-wrapper d-flex align-items-center rounded-5 bg-gradient overlap-area overflow-hidden">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <p class="pretitle-bold">Our Approach</p>
                     <h3>Evolving With the Cyber Landscape</h3>
                     <p class="text-primary p16">At Tranchulas, we don’t just react to threats—we anticipate them. By
                        integrating
                        the
                        latest threat
                        intelligence, and industry frameworks like MITRE ATT&CK and MITRE ATLAS, we build resilient security
                        ecosystems that adapt as adversaries evolve. Our mission is to continually innovate, ensuring your
                        security posture remains robust and future-ready.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--our approach section end -->
   <!--why choose section start -->
   <section class="why-choose">
      <div class="container">
         <div class="why-choose-content">
            <h3>Why Choose Tranchulas?</h3>
            <div class="features-wrapper d-flex flex-column gap">
               <div
                  class="features-item padding border rounded-2 d-flex gap flex-column flex-md-row align-items-md-center justify-content-between">
                  <div class="d-inline-flex align-items-center gap">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Globe.png'; ?>" alt="">
                     <h4 class="mb-0">Global Expertise</h4>
                  </div>
                  <div class="features-item-content">
                     <p class="text-primary p14">Operating across Australia, Pakistan, the UK, and the US, we bring
                        diverse
                        perspectives and
                        international best practices to every engagement.</p>
                  </div>
               </div>
               <div
                  class="features-item padding border rounded-2 d-flex gap flex-column flex-md-row align-items-md-center justify-content-between">
                  <div class="d-inline-flex align-items-center gap">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Globe.png'; ?>" alt="">
                     <h4 class="mb-0">Global Expertise</h4>
                  </div>
                  <div class="features-item-content">
                     <p class="text-primary p14">Operating across Australia, Pakistan, the UK, and the US, we bring
                        diverse
                        perspectives and
                        international best practices to every engagement.</p>
                  </div>
               </div>
               <div
                  class="features-item padding border rounded-2 d-flex gap flex-column flex-md-row align-items-md-center justify-content-between">
                  <div class="d-inline-flex align-items-center gap">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Globe.png'; ?>" alt="">
                     <h4 class="mb-0">Global Expertise</h4>
                  </div>
                  <div class="features-item-content">
                     <p class="text-primary p14">Operating across Australia, Pakistan, the UK, and the US, we bring
                        diverse
                        perspectives and
                        international best practices to every engagement.</p>
                  </div>
               </div>
               <div
                  class="features-item padding border rounded-2 d-flex gap flex-column flex-md-row align-items-md-center justify-content-between">
                  <div class="d-inline-flex align-items-center gap">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Globe.png'; ?>" alt="">
                     <h4 class="mb-0">Global Expertise</h4>
                  </div>
                  <div class="features-item-content">
                     <p class="text-primary p14">Operating across Australia, Pakistan, the UK, and the US, we bring
                        diverse
                        perspectives and
                        international best practices to every engagement.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--why choose section end -->
   <!--accreditation section start -->
   <section class="accreditation">
      <div class="container">
         <div class="accreditation-content text-center mx-auto">
            <h4>Accreditations & Compliance Capabilities</h4>
            <p class="pt-1 p16">Tranchulas holds key certifications and accreditations that attest to our rigorous
               standards
               and global
               credibility. These credentials validate our commitment to robust governance, ethical hacking excellence,
               and best-in-class training—ensuring your organization is aligned with international norms and ready for
               the most stringent audits.</p>
         </div>
         <div
            class="logos w-100 d-flex flex-wrap gap-3 align-items-center justify-content-center justify-content-md-between">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/media/cyberessentials_certification.png'; ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/media/jira-generated1.png'; ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/media/jira-generated-2.png'; ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/media/cyber.png'; ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/media/crest.png'; ?>" alt="">
         </div>
      </div>
   </section>
   <!--accreditation section end -->
   <!--membership section start -->
   <section class="membership">
      <div class="container">
         <div class="membership-content rounded-5 overflow-hidden position-relative bg-gradient padding d-md-flex align-items-center justify-content-between gap-5">
            <div class="shape shape-gradient-circle left-bottom position-absolute"></div>
            <div>
               <img src="<?php echo get_template_directory_uri() . '/assets/img/media/csc_master_logo-small.png'; ?>" alt="">
            </div>
            <div class="merbership-text-content">
               <h4 class="mb-4">Memberships & Industry Alliances</h4>
               <p class="p16 text-primary">Tranchulas actively collaborates with leading cybersecurity councils and
                  alliances
                  worldwide, fostering shared knowledge, ethical standards, and professional development initiatives
                  that strengthen the global cyber ecosystem.</p>
               <div class="membership-sub-text-content padding rounded-2">
                  <h6 class="mb-0">UK Cyber Security Council:<span class="p16 fw-normal"> Demonstrating our commitment
                        to
                        shaping
                        best
                        practices and
                        professional standards within the UK
                        cyber landscape.</span></h6>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--membership section end -->
   <!--leadership section start -->
   <section class="leadership">
      <div class="container">
         <div class="leadership-content padding position-relative overflow-hidden">
            <div class="gradient-circle bottom-left"></div>
            <div class="shape shape-gradient-circle bottom-center position-absolute"></div>
            <div class="row g-4">
               <div class="col-md-6">
                  <div class="leadership-left-content">
                     <img src="<?php echo get_template_directory_uri() . '/assets/img/media/leader1.png'; ?>" alt="team member 1">
                     <div class="leadership-left-text-content">
                        <p class="pretitle-bold">leadership</p>
                        <h3 class="mb-0">Zubair Khan, CEO</h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="leadership-right-content">
                     <p class="p16 text-primary position-relative">Zubair Khan guides Tranchulas’ global vision, forging
                        strategic
                        alliances and overseeing complex
                        security transformations. With over two decades of experience, he delivers impactful solutions
                        and is deeply involved in cyber warfare research. A sought-after speaker at international forums
                        (Hack.lu Luxembourg, Hack in the Box Malaysia, ISS World, Infosek Slovenia), Zubair’s thought
                        leadership shapes industry best practices.

                        He holds prestigious certifications—PMP, CRISC, CDPSE, CIPM, AIGP, CISA, CISM—and is an ISO
                        27001 Auditor. His role ensures Tranchulas remains at the forefront of cybersecurity
                        advancements, offering clients unmatched expertise and leadership.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--leadership section end -->
   <!--ai + name section start-->
   <section class="ai-name bg-primary">
      <div class="container">
         <div class="embracing-ai text-center mx-auto">
            <h3 class="text-white mb-4">Embracing AI & Emerging Technologies</h3>
            <p class="pt-3">Tranchulas stays ahead of the curve by leveraging AI, machine learning, and
               quantum-resilient
               cryptography to outpace adversaries. Our threat intelligence, adversarial simulation, and real-time
               vulnerability assessment ensure you’re always a step ahead. We help you navigate emerging regulations,
               build zero-trust architectures, and adopt next-gen security solutions tailored to your evolving digital
               journey.</p>
         </div>
         <div class="position-relative ai-images">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/media/Illustration.png'; ?>" alt="">
            <div class="behind-our-name padding rounded-2 bg-primary">
               <h4 class="text-white mb-4">The Inspiration <br> Behind Our Name</h4>
               <p class="p14 pt-3">When Tranchulas was founded, the name was inspired by tarantulas, renowned for
                  fiercely
                  guarding their
                  domain. The idea resonated perfectly with our mission to protect the digital ecosystem with unmatched
                  vigilance and precision. The unique spelling symbolizes innovation and breaking conventions. While
                  tarantulas may not spin traditional webs, their strategic protection mirrors our unwavering commitment
                  to safeguarding networks and systems.</p>
            </div>
         </div>
      </div>
   </section>
   <!--ai + name section end -->
   <!--get in touch section start-->
   <section class="get-in-touch">
      <div class="container">
         <div class="get-in-touch-content position-relative overflow-hidden text-center d-flex flex-column align-items-center">
            <div class="gradient-circle top-right"></div>
            <div class="shape shape-gradient-circle bottom-center position-absolute"></div>
            <h3 class="mb-4">Our Mission: <br> Securing Your Digital Future</h3>
            <p class="pt-3 mb-4">At Tranchulas, our mission is to deliver unparalleled cybersecurity solutions that
               instill
               confidence, enable strategic growth, and foster resilience in an interconnected world. We champion
               continuous innovation, knowledge sharing, and global collaboration, ensuring that as threats evolve, so
               do our defenses.
               Together, we drive the future of secure digital transformation.</p>
            <div class="pt-3">
               <a class="btn btn-primary" href="#">Get in Touch – Start Your Resilient Journey</a>
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

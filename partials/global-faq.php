<?php if ( have_rows( 'global_faq', 'option' ) ) : 
    $faq_count = 0;
?>
 <section class="faq">
      <div class="container">
         <div class="faq-content bg-gradient position-relative overflow-hidden">
            <div class="gradeint-circle"></div>
            <div class="row align-items-center g-3 gap-md-0">
               <div class="col-lg-5">
                  <div class="ps-xl-4 ms-xl-1">
                     <p class="text-uppercase pretitle-bold"><?php echo esc_html( get_field('section_label', 'option' ) ); ?></p>
                     <!-- <h3>Questions? <br> We have answers.</h3> -->
                      <?php the_field('section_title', 'option' ); ?>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="accordion ps-lg-4 ps-xl-0" id="accordionExample">
                     <?php while ( have_rows( 'global_faq', 'option' ) ) : the_row(); 
                        $faq_count++;
                        $question = get_sub_field( 'faq_question' );
                        $answer   = get_sub_field( 'faq_answer' );
                     ?>
                     <div class="accordion-item border-bottom">
                        <h6 class="accordion-header">
                           <button class="accordion-button pb-4 <?php echo ( $faq_count > 1 ) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse<?php echo $faq_count; ?>" aria-expanded="<?php echo ( $faq_count === 1 ) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $faq_count; ?>">
                              <?php echo esc_html( $question ); ?>
                           </button>
                        </h6>
                        <div id="collapse<?php echo $faq_count; ?>" class="accordion-collapse collapse <?php echo ( $faq_count === 1 ) ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <?php echo wp_kses_post( $answer ); ?>
                           </div>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>
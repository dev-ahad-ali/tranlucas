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
            <p class="pretitle-bold"><?php echo get_the_title(get_queried_object_id()); ?></p>
            <h1><?php echo esc_html( get_field('blog_page_title', get_queried_object_id() )); ?></h1>
         </div>
         <?php
         // Get sticky posts once and reuse
         $sticky_posts = get_option('sticky_posts');

         // $sticky = get_option('sticky_posts');
         if (!empty($sticky_posts)) :
            $sticky_query = new WP_Query(array(
               'post__in' => $sticky_posts,
               'ignore_sticky_posts' => 1,
               'posts_per_page' => 1,
               'no_found_rows' => true  // Skip pagination counts
           ));
            if ($sticky_query->have_posts()) : while ($sticky_query->have_posts()) : $sticky_query->the_post();
         ?>
         <div class="sticky-post rounded-5 padding overflow-hidden d-flex align-items-end" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
            <div class="card bg-transparent">
               <div class="card-body mt-0">
                  <a class="h3 text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <p class="p18 text-white card-text"><?php echo get_the_date('d M Y'); ?></p>
               </div>
            </div>
         </div>
         <?php
            endwhile; endif;
            wp_reset_postdata();
         endif;
         ?>
      </div>
   </section> <!-- section.blog-hero -->
   <section class="text-post">
      <div class="container">
         <div class="grid padding border-bottom align-items-center">
            <?php
            // Combined query for all non-sticky posts
            $main_query = new WP_Query(array(
               'post__not_in' => $sticky_posts,
               'posts_per_page' => 11,
               'ignore_sticky_posts' => 1,
               'no_found_rows' => true
           ));

           if ($main_query->have_posts()) :
               // Split into text posts (first 3) and regular posts (remaining)
               $all_posts = $main_query->posts;
               $text_posts = array_slice($all_posts, 0, 3);
               
               foreach ($text_posts as $post) :
                   setup_postdata($post);
           ?>
            <div class="card">
               <div class="card-body mt-0">
                  <a class="h6" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <p class="p14 card-text"><?php echo get_the_date('d M Y'); ?></p>
               </div>
            </div>
            <?php
               endforeach;
               wp_reset_postdata();
            endif;
            ?>
         </div>
      </div>
   </section> <!-- section.text-post -->
   
   <!-- regular post section start -->
   <section class="regular-post">
      <div class="container">
         <div class="blog-post padding grid">
            <?php get_template_part('partials/sidebar-blog'); ?>
            
            <div class="main-blog-post grid">
               <?php
               if (isset($all_posts)) :
                   $regular_posts = array_slice($all_posts, 3);
                   
                   foreach ($regular_posts as $post) :
                       setup_postdata($post);
               ?>
               <div class="card">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                  <div class="card-body pt-3 mt-sm-3">
                     <a class="h6 d-inline-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <p class="p14"><?php echo get_the_date('d M Y'); ?></p>
                  </div>
               </div>
               <?php
                   endforeach;
                   wp_reset_postdata();
               endif;
               ?>
            </div>
         </div>
      </div>
   </section> <!-- section.regular-post -->
   
   <?php 
   // Conditionally include FAQ section
   if (get_field('enable_global_faq', get_queried_object_id())) {
      get_template_part('partials/global-faq');
   }
   ?>

<?php
// get_sidebar();
get_footer();

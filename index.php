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
         $sticky = get_option('sticky_posts');
         if (!empty($sticky)) :
            $args = array(
               'post__in' => $sticky,
               'ignore_sticky_posts' => 1,
               'posts_per_page' => 1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
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
            // Query for latest 3 posts excluding sticky posts
            $args = array(
                'post__not_in' => get_option('sticky_posts'),
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1
            );
            $latest_posts = new WP_Query($args);
            $excluded_ids = array();
            
            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
                $excluded_ids[] = get_the_ID();
            ?>
            <div class="card">
               <div class="card-body mt-0">
                  <a class="h6" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <p class="p14 card-text"><?php echo get_the_date('d M Y'); ?></p>
               </div>
            </div>
            <?php
                endwhile;
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
            <!-- search box start  -->
            <!-- <aside class="search-box-container d-flex flex-column gap">
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
               
               <div class="categories widget">
                  <h6>Categories</h6>
                  <div class="d-flex flex-wrap gap categories">
                     <a href="#" class="p14">Cyber Security (12)</a>
                     <a href="#" class="p14">Case Studies (35)</a>
                     <a href="#" class="p14">Category name (102)</a>
                  </div>
               </div>
               <div class="keyword widget">
                  <h6>Keywords</h6>
                  <div class="d-flex flex-wrap gap tags">
                     <a href="#" class="p14" type="button">#cyber-security</a>
                     <a href="#" class="p14" type="button">#ai</a>
                     <a href="#" class="p14" type="button">#red-teaming</a>
                     <a href="#" class="p14" type="button">#penetration-testing</a>
                     <a href="#" class="p14" type="button">#securityhub</a>
                  </div>
               </div>
            </aside> -->
            <?php get_template_part('partials/sidebar-blog'); ?>
            <!-- search box start  -->

            <div class="main-blog-post grid">
               <?php
               // Query for remaining posts (excluding stickies and first 3 posts)
               $main_args = array(
                   'post__not_in' => array_merge(get_option('sticky_posts'), $excluded_ids),
                   'posts_per_page' => 8,
                   'ignore_sticky_posts' => 1
               );
               $main_query = new WP_Query($main_args);
               
               if ($main_query->have_posts()) :
                   while ($main_query->have_posts()) : $main_query->the_post();
               ?>
               <div class="card">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                  <div class="card-body pt-3 mt-sm-3">
                     <a class="h6 d-inline-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <p class="p14"><?php echo get_the_date('d M Y'); ?></p>
                  </div>
               </div>
               <?php
                   endwhile;
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

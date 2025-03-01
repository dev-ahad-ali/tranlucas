<?php 
// Fetch all terms from the 'location' taxonomy
$location_terms = get_terms(array(
    'taxonomy' => 'location',
    'hide_empty' => false, // Set to true if you want to hide empty terms
));

// Initialize an array to hold formated locations names
$formated_locations = [];

// Check if terms were retrived successfully
if (!is_wp_error($location_terms) && !empty($location_terms)) {

    // Loop through each term to format the location names
    foreach ($location_terms as $term) {
        // Check if the term has a parent
        if ($term->parent) {
            // Get the parent term
            $parent_term = get_term($term->parent, 'location');
            if(!is_wp_error($parent_term)) {
                // Add the parent term name to the formated locations array
                $formated_locations[] = esc_html($term->name) . ', ' . esc_html($parent_term->name);
            }
        }
    }
}


?>
<section class="openning-section">
    <div class="container">
        <div class="opening-content bg-gradient rounded-5 position-relative overflow-hidden padding">
        <div class="shape shape-gradient-circle position-absolute"></div>
        <?php 
        $openings_section = get_sub_field('section_heading');
        if($openings_section) : ?>
            <div class="operning-content-head">
                <h2 class="mb-3"><?php echo esc_html($openings_section['title']); ?></h2>
                <?php echo wp_kses_post($openings_section['lead']); ?>
            </div>
        <?php endif; ?>
        
        <div class="location d-flex gap flex-wrap">
            <?php foreach ($formated_locations as $location) : ?>
                <span class="p14 px-3 border-0 item"><?php echo esc_html($location); ?></span>
            <?php endforeach; ?>
        </div>

        <div class="job-list d-flex flex-column gap-4">
            <?php
            $args = array(
                'post_type' => 'job',
                'posts_per_page' => -1
            );
            $jobs = new WP_Query($args);
            
            if($jobs->have_posts()) : 
                while($jobs->have_posts()) : $jobs->the_post();
                    $job_details = get_field('job_details');
                    $job_link = $job_details['job_link'];
            ?>
                <div class="list-item rounded-2 py-3 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                    <div>
                        <h5 class="mb-1"><?php the_title(); ?></h5>
                        <?php if($job_details) : ?>
                        <p class="p16">
                            <?php 
                            // Fetch the terms from the 'job_location' taxonomy
                            $terms = get_the_terms($jobs->ID, 'location');
                            if ($terms && !is_wp_error($terms)) {
                                // Create an array to hold the term names
                                $locations = [];
                                foreach ($terms as $term) {
                                    $locations[] = esc_html($term->name); // Get the term name
                                }
                                // Join the locations with a comma and display
                                echo implode(', ', $locations);
                            } else {
                                echo 'Remote'; // Fallback if no terms found
                            }
                            ?> - 
                            <?php echo esc_html($job_details['job_type']); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php if($job_link) : ?>
                    <div class="d-inline-flex align-items-center gap-1">
                        <a class="h6 text-primary d-inline-flex align-items-center" href="<?php echo esc_url($job_link['url']); ?>">
                            <?php echo esc_html($job_link['title'] ? $job_link['title'] : 'More details'); ?>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/ArrowExpand.svg'; ?>" alt="ArrowExpand">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No current openings at this time.</p>';
            endif;
            ?>
        </div>
        </div>
    </div>
</section>
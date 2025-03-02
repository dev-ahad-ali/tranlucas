<?php
    $section_lead = get_sub_field('section_lead');
    $logos = get_sub_field('certification_logos'); // Get certification logos
    
?>

<section class="certification">
    <div class="container">
        <div class="certification-content text-center mx-auto">
            <h4><?php echo esc_html($section_lead['title']); ?></h4>
            <div class="pt-1 p16"><?php echo wp_kses_post($section_lead['lead']); ?></div>
        </div>
        <?php
        if ($logos && is_array($logos)): // Check if logos exist and is an array
            $total_logos = count($logos); // Get total logos count
            $current_index = 0; // Initialize current index
        ?>
        <div
            class="logos w-100 d-flex flex-wrap gap-3 justify-content-center justify-content-md-between">
            <?php 
            while( have_rows('certification_logos') ): 
                the_row(); 
                $image = get_sub_field('logo');
                $current_index++; // Increment current index
            ?>
            
                <div class="inline-flex align-items-center logo">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
                <?php if ($current_index < $total_logos): // Check if not the last logo ?>
                    <span class="border-end border-gray-superlight">&nbsp;</span>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
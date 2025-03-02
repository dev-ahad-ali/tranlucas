<?php
    $section_info = get_sub_field('section_info'); 
    $bg_image = get_sub_field('background_image');
    $card_info = get_sub_field('card_info');
?>
<section class="ai-name bg-primary">
    <div class="container">
        <div class="embracing-ai text-center mx-auto">
        <h3 class="text-white mb-4"><?php echo esc_html($section_info['title']); ?></h3>
        <?php echo wp_kses_post($section_info['description']); ?>
        </div>
        <div class="position-relative ai-images">
        <img class="img-fluid w-100" src="<?php echo $bg_image ? esc_url($bg_image['url']) : get_template_directory_uri() . '/assets/img/media/Illustration.png'; ?>" alt="<?php echo $bg_image ? esc_attr($bg_image['alt']) : 'Illustration'; ?>">    
        <div class="behind-our-name padding rounded-2 bg-primary">
            <h4 class="text-white mb-4"><?php echo esc_html($card_info['title']); ?></h4>
            <p class="p14 pt-3"><?php echo wp_kses_post($card_info['description']); ?></p>
        </div>
        </div>
    </div>
</section>
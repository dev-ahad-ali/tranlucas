<?php 
    $background_varient = get_sub_field('background_varient'); 
    $background_shape = get_sub_field('background_shape');
    $content_align = get_sub_field('content_align');
    $content_width = get_sub_field('content_width');
    $has_inner_info = get_sub_field('has_inner_info');

    $varient_properties = esc_attr($content_width) . ' ' . (esc_attr($content_align) == 'center' ? 'text-center' : 'text-left') . ' ' . (esc_attr($background_varient) == 'black' ? 'text-white' : '');
?>

<section class="hero overflow-hidden position-relative <?php echo $background_varient == 'black' ? ' bg-primary' : ''; ?>">
    <?php if($background_varient == 'black') : ?>
        <?php if( $background_shape == 'center'): ?>
            <div class="shape shape-gradient-circle center-top position-absolute" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/shape/center-circle.png';?>)"></div>
        <?php elseif( $background_shape == 'both') : ?>
            <div class="shape shape-gradient-circle middle-both position-absolute" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/media/red-teaming-bg.png';?>)"></div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if( $background_varient == 'white'): ?>
        <div class="gradient-circle"></div>
        <div class="gradient-circle right"></div>
        <div class="shape shape-gradient-circle left-top position-absolute"></div>
        <div class="shape shape-gradient-circle right-bottom position-absolute"></div>
    <?php endif; ?>

        <div class="container d-flex flex-column justify-content-center">
            <div class="hero-content d-flex flex-column mx-auto <?php echo $varient_properties; ?>">
                <?php if( get_sub_field('label') ): ?>
                    <span class="label"><?php echo get_sub_field('label'); ?></span>
                <?php endif; ?>
                <?php if( get_sub_field('title') ): ?>
                    <h1><?php echo get_sub_field('title'); ?></h1>
                <?php endif; ?>
                <?php if( get_sub_field('description') ): ?>
                    <?php echo get_sub_field('description'); ?>
                <?php endif; ?>
                <?php 
                    $button = get_sub_field('button');
                    if( $button ): ?>
                    <div>
                        <a href="<?php echo esc_url($button['url']); ?>" class="btn <?php echo $background_varient == 'black' ? 'bg-white text-primary' : 'btn-primary'; ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if( $has_inner_info == "yes" ) : 
                $selected_block = get_sub_field('select_block');
            ?>
                <?php if ($selected_block) {
                    get_template_part('template-parts/global-section/' . $selected_block . '_info');
                } ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
    $style = get_sub_field('style');
?>
<section class="get-in-touch">
    <div class="container">
        <div class="get-in-touch-content position-relative overflow-hidden text-center d-flex flex-column align-items-center">
            <?php if($style['has_gradient_circle']): ?>
                <div class="gradient-circle top-right"></div>
            <?php endif; ?>
            <?php if($style['has_shape_graphics']): ?>
                <div class="shape shape-gradient-circle bottom-center position-absolute"></div>
            <?php endif; ?>
            <?php echo wp_kses_post(get_sub_field('section_info')); ?>
            <div class="pt-3 d-flex flex-wrap flex-sm-nowrap gap testimonial-content-bottom">
                <?php $button = get_sub_field('button'); ?>
                <a class="btn btn-primary align-self-center" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
                <?php if( $is_note = get_sub_field('has_note')): ?>
                    <span class="bg-primary d-none d-sm-block"></span>
                    <h6 class="mb-0 note-text"><?php echo wp_kses_post(get_sub_field('note_text')); ?></h6>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
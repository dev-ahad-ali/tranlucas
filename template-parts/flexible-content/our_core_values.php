<?php 
    $has_separator = get_sub_field('show_separator');
?>
<section class="value-section">
    <div class="container">
        <div class="value-content">
            <div class="value-head">
                <div class="row">
                    <div class="col-lg-6">
                        <?php if( $title = get_sub_field('title')) : ?>
                        <h2 class="mb-3"><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>
                        <?php if($lead_text =  get_sub_field('lead')) : ?>
                            <div class="p16 pt-1"><?php echo wp_kses_post($lead_text); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if(have_rows('cards')): ?>
            <div class="cards">
                <div class="row g-5">
                    <?php while(have_rows('cards')): the_row(); ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="value-item">
                            <?php if($icon = get_sub_field('icon')): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                            <?php endif; ?>
                            <?php if( $icon && $has_separator ): ?>
                                <hr class="opacity-100">
                            <?php endif; ?>
                            <?php if($title = get_sub_field('title')): ?>
                                <h5><?php echo esc_html($title); ?></h5>
                            <?php endif; ?>
                            <?php if($description = get_sub_field('description')): ?>
                                <p><?php echo esc_html($description); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
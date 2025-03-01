<div class="future-works bg-gradient rounded-5 overflow-hidden">
<?php if(have_rows('cards')): ?>
<div class="future-works-boxes grid">
    <?php while(have_rows('cards')): the_row(); ?>
    <div class="future-works-item position-relative">
        <div class="future-works-item-content d-flex flex-column text-center align-items-center">
        <?php if($icon = get_sub_field('icon')): ?>
            <img class="mb-3" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
        <?php endif; ?>
        <div class="d-flex flex-column pt-1">
            <?php if($box_title = get_sub_field('title')): ?>
                <h5><?php echo esc_html($box_title); ?></h5>
            <?php endif; ?>
            <?php if($description = get_sub_field('description')): ?>
                <p class="p14 pt-1"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>
    <div class="future-bottom-text-content text-center mx-auto">
        <?php if($bottom_title = get_sub_field('title')): ?>
            <h2 class="mb-3"><?php echo esc_html($bottom_title); ?></h2>
        <?php endif; ?>
        <?php if($bottom_text = get_sub_field('lead_text')): ?>
            <p class="p16 pt-1 mx-auto text-primary"><?php echo esc_html($bottom_text); ?></p>
        <?php endif; ?>
    </div>
</div>
<section class="grid future-block-section px-3 px-md-0 <?php echo esc_attr( get_sub_field('show_graphics_shape') ? 'has-shape' : '' ); ?>">
    <div class="blocks-item d-flex align-items-center justify-content-center text-center text-md-start justify-content-md-end">
        <div class="content">
            <h2 class="text-white"><?php echo esc_html( get_sub_field('title') ); ?></h2>
        </div>
    </div>
    <div class="blocks-item d-flex align-items-center justify-content-center text-center text-md-start">
        <div class="content text-white">
            <?php echo wp_kses_post(get_sub_field('description')); ?>
        </div>
    </div>
</section>
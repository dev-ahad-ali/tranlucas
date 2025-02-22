<?php if(!empty( $banner = get_field('office_locations_banner', 'option' ) ) ) : ?>
    <section class="offices padding">
        <div class="container">
            <img class="img-fluid w-100" src="<?php echo esc_url( $banner['url'] ); ?>" alt="<?php echo esc_attr( $banner['alt']); ?>">
        </div>
    </section> <!-- .offices -->
<?php endif; ?>
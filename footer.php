<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transchules
 */

?>
	<footer class="footer">
      <div class="container">
         <div class="footer-content padding bg-primary rounded-5">
            <div class="footer-logo-social-icon bg-gradient mx-auto d-flex align-items-center justify-content-between">
			<?php 
				$image = get_field('footer_logo', 'option');
				if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php else : ?>
					<img class="footer-logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo/Logo.png'; ?>" alt="Transchules logo white">
				<?php endif; ?>

				<?php if(have_rows('social_items', 'option')) : ?>
				<div class="social-icon d-flex align-items-center">
					<?php
						while(have_rows('social_items', 'option')) : the_row();
							$link = get_sub_field('profile_url');
							$icon = get_sub_field('icon');
							
							if( $icon): 
								$icon_url = $icon['url'];
								$icon_alt = $icon['alt'];
						?>
							<a href="<?php echo esc_attr( $link ); ?>" target="_blank">
								<img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>">
							</a>
						<?php endif; ?>
				
					<?php endwhile; ?>
			   </div>
				<?php endif; ?>
            </div> <!-- .footer-logo-social-icon -->
            <div class="footer-widget-row mx-auto grid">
				<?php if(have_rows('footer_widgets', 'option')) :
					while(have_rows('footer_widgets', 'option')) : the_row();
						$menu_slug = get_sub_field('footer_menu_select');
						$is_custom_content = get_sub_field('is_custom_content');
						?>
						<div class="footer-widget">
							<h6 class="pretitle-bold"><?php the_sub_field('title'); ?></h6>
							<?php 
							if(!$is_custom_content) {
								wp_nav_menu(array(
									'menu' => $menu_slug,
									'menu_class' => 'footer-menu ps-0 mb-0 list-unstyled',
									'container' => false,
									'walker' => new Footer_Menu_Walker()
								)); 
							} else {
							 	echo get_sub_field('custom_widget');
							}
							?>
						</div>
					<?php
					endwhile;
				endif; ?>
            </div> <!-- .footer-widget-row -->
         </div> <!-- .footer-content -->
         <div class="footer-copyright text-end">
            <p class="p14">&copy; <?php echo date('Y') . ' ' . esc_html( get_field('copyright_text', 'option') ); ?></p>
         </div>
      </div> <!-- .container -->
   </footer>
<?php wp_footer(); ?>

</body>
</html>

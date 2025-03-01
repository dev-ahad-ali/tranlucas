<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

get_header();
?>

	<main id="primary" class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				if ( have_rows( 'cms' ) ) :
					while ( have_rows('cms') ) : the_row();
						$layout = get_row_layout();

						if($layout) {
							get_template_part( 'template-parts/flexible-content/' . $layout);
						}
					endwhile;
				else : ?>
					<div class="container">
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
					</div> <!-- .container -->
				<?php endif; ?>

			<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

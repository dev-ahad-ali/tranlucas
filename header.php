<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transchules
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
	<nav class="navbar navbar-expand-lg bg-white">
      <div class="container gap">
         <a class="navbar-brand " href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if(has_custom_logo()) :
				the_custom_logo();
			else :	?>
				<img src="<?php echo get_template_directory_uri() . '/assets/img/logo/Logo.svg'; ?>" alt="<?php bloginfo( 'name' ); ?>" />
			<?php endif; ?>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <?php
            wp_nav_menu(
               array(
                  'theme_location' => 'main-menu',
                  'menu_id'        => 'primary-menu',
                  'menu_class' => 'navbar-nav mb-2 mb-lg-0 gap-3',
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
               )
            );
            ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" type="button">Get in touch</a>
         </div>
      </div>
   </nav> <!-- #site-navigation -->
</header> <!-- #masthead -->


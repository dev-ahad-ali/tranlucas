<?php
/**
 * transchules functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package transchules
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function transchules_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on transchules, use a find and replace
		* to change 'transchules' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'transchules', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	// add_theme_support( 'post-thumbnails' );

	// Add support for sticky posts
	add_theme_support( 'sticky-posts' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'transchules' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'transchules_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'transchules_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function transchules_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'transchules_content_width', 640 );
}
add_action( 'after_setup_theme', 'transchules_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function transchules_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'transchules' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'transchules' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'transchules_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function transchules_scripts() {
	wp_enqueue_style( 'transchules-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3' );
	wp_enqueue_style( 'transchules-main-style', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap-style'), _S_VERSION );

	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
	wp_enqueue_script( 'transchules-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-bundle'), _S_VERSION, true );

	wp_enqueue_script('blog-ajax', get_template_directory_uri().'/assets/js/blog-ajax.js', array('jquery'), null, true);
    wp_localize_script('blog-ajax', 'blogAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('blog_search_nonce') // Add nonce
    ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'transchules_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/helper/walker-bootstrap-5-navbar.php';

/**
 * Load footer widget menu walker
 * 
 */
require get_template_directory() . '/helper/walker-footer-widget-menu.php';

/**
 * Load additional ACF configs.
 */
require get_template_directory() . '/helper/acf_field_config.php';

/**
 * Load custom widgets
 */
require get_template_directory() . '/helper/custom_widgets.php';

/**
 * Load custom post types
 */
require get_template_directory() . '/helper/custom_post_types.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Get all WordPress menus for ACF select field
 */
function get_menus_list($field) {
    $menus = get_terms('nav_menu');
    $choices = [];
    
    foreach($menus as $menu) {
        $choices[$menu->slug] = $menu->name;
    }
    
    $field['choices'] = $choices;
    return $field;
}
add_filter('acf/load_field/name=footer_menu_select', 'get_menus_list');

// Allow SVG uploads
function allow_svg_upload($mimes) {
    if(current_user_can('administrator')) { // Only allow for admins
        $mimes['svg']  = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
    }
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Fix SVG file type detection
function fix_svg_mime_type($data, $file, $filename, $mimes) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if($ext === 'svg') {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    if($ext === 'svgz') {
        $data['ext']  = 'svgz';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);


// Blog AJAX handler
add_action('wp_ajax_blog_search', 'blog_search_callback');
add_action('wp_ajax_nopriv_blog_search', 'blog_search_callback');

function blog_search_callback() {
    try {
        // Verify nonce first
        if (!check_ajax_referer('blog_search_nonce', 'security', false)) {
            throw new Exception('Security check failed');
        }

        // Sanitize input
        $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
        
        // Validate search query
        if (empty($search) || strlen($search) < 3) {
            throw new Exception('Search term too short');
        }

        $args = array(
            's' => $search,
            'post__not_in' => get_option('sticky_posts'),
            'posts_per_page' => 8,
            'ignore_sticky_posts' => 1
        );
        
        $query = new WP_Query($args);
        
        ob_start();
        if($query->have_posts()) : 
            while($query->have_posts()) : $query->the_post();
                // Use direct HTML instead of template part
                ?>
                <div class="card">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                         class="card-img-top" 
                         alt="<?php the_title_attribute(); ?>">
                    <div class="card-body pt-3 mt-sm-3">
                        <a class="h6 d-inline-block" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <p class="p14"><?php echo get_the_date('d M Y'); ?></p>
                    </div>
                </div>
                <?php
            endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        $response = ob_get_clean();
        
        wp_send_json_success($response);
        
    } catch (Exception $e) {
        wp_send_json_error($e->getMessage(), 400);
    } finally {
        wp_die();
    }
}

// AJAX handler for initial posts
add_action('wp_ajax_get_initial_posts', 'get_initial_posts_callback');
add_action('wp_ajax_nopriv_get_initial_posts', 'get_initial_posts_callback');

function get_initial_posts_callback() {
    try {
        check_ajax_referer('blog_search_nonce', 'security');
        
        $args = array(
            'post__not_in' => get_option('sticky_posts'),
            'posts_per_page' => 8,
            'ignore_sticky_posts' => 1
        );
        
        $query = new WP_Query($args);
        
        ob_start();
        if($query->have_posts()) : 
            while($query->have_posts()) : $query->the_post();
                ?>
                <div class="card">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                         class="card-img-top" 
                         alt="<?php the_title_attribute(); ?>">
                    <div class="card-body pt-3 mt-sm-3">
                        <a class="h6 d-inline-block" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <p class="p14"><?php echo get_the_date('d M Y'); ?></p>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        $response = ob_get_clean();
        
        wp_send_json_success($response);
        
    } catch (Exception $e) {
        wp_send_json_error($e->getMessage());
    } finally {
        wp_die();
    }
}

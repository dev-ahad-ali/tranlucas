<?php
/**
 * Register sidebar and widgets
 */
function transchules_custom_widgets_init() {
    register_sidebar( array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6><div class="d-flex flex-wrap gap tags">',
    ) );
}
add_action( 'widgets_init', 'transchules_custom_widgets_init' );



// Search widget
class Search_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'search_widget',
            'Search Posts',
            array('description' => 'Ajax powered post search')
        );
    }

    public function widget($args, $instance) {
    ?>
        <form class="d-flex" role="search" id="blogSearchForm">
            <div class="w-100">
                <label for="searchInput" class="form-label">Search posts</label>
                <div class="position-relative">
                <input type="text" class="form-control" id="searchInput" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="position-absolute bg-transparent border-0 button" type="submit">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/Search.png'; ?>" alt="Search icon black">
                </button>
                </div>
            </div>
        </form>
    <?php
    }
}

class Dynamic_Categories_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'dynamic_categories_widget',
            'Custom Categories with count',
            array('description' => 'Displays post categories with counts')
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Categories';
        echo $args['before_widget'];
        echo $args['before_title'] . esc_html($title) . $args['after_title'];
        
        $categories = get_categories(array(
            'orderby' => 'name',
            'hide_empty' => true
        ));
        ?>

        <div class="d-flex flex-wrap gap categories">
            <?php foreach($categories as $category) : ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="p14">
                <?php echo esc_html($category->name); ?> (<?php echo $category->count; ?>)
            </a>
            <?php endforeach; ?>
        </div>

        <?php
        
        echo $args['after_widget'];
    }

    public function form($instance) {
        // Configuration fields 
        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                Title:
            </label>
            <input class="widefat" 
                   id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        // Handle settings update
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }
}

class Dynamic_Tags_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'dynamic_tags_widget',
            'Custom Tag list',
            array('description' => 'Displays post tags with counts')
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Keywords';

        echo $args['before_widget'];
        echo $args['before_title'] . esc_html($title) . $args['after_title'];
        
        $tags = get_tags(array(
            'orderby' => 'count',
            'order'   => 'DESC',
            'number'  => 20 // Limit to 20 most used tags
        ));

        echo '<div class="d-flex flex-wrap gap tags">';
        foreach($tags as $tag) {
            echo sprintf(
                '<a href="%s" class="p14">#%s</a>',
                esc_url(get_tag_link($tag->term_id)),
                esc_html($tag->name)
            );
        }
        echo '</div>';
        
        echo $args['after_widget'];
    }

    public function form($instance) {
        // Configuration fields 

        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                Title:
            </label>
            <input class="widefat" 
                   id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        // Handle settings update
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }
}

// Register all widgets
function register_custom_widgets() {
    register_widget('Search_Widget');
    register_widget('Dynamic_Categories_Widget');
    register_widget('Dynamic_Tags_Widget');
}
add_action('widgets_init', 'register_custom_widgets');

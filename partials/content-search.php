<?php
/**
 * Template part for displaying results in blog search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transchules
 */

?>

<div class="card">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
    <div class="card-body pt-3 mt-sm-3">
        <a class="h6 d-inline-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="p14"><?php echo get_the_date('d M Y'); ?></p>
    </div>
</div>
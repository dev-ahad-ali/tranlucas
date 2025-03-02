<?php
$has_writing_mode_vlr = get_sub_field('has_writing_mode_vlr');
$has_section_header = get_sub_field('has_section_header');
$header_info = get_sub_field('header_info');
$has_label = $header_info['has_label'];

$section_margin = get_sub_field('margin');
$container_width = get_sub_field('container_width');
$margin_top = $section_margin['top'];
$margin_bottom = $section_margin['bottom'];
$margin_class = ($margin_top ? ' margin-top ' : '') . ($margin_bottom ? ' margin-bottom ' : '') . ($container_width ? ' container-width-' . $container_width : '');

$cards = get_sub_field('cards');
$card_options = get_sub_field('card_options');
$has_border = $card_options['has_border'];
$card_layout = $card_options['card_layout'];
$card_column = $card_options['card_column'];
$has_separator = $card_options['has_separator'];


?>

<section class="card-block-section <?php echo $margin_class; ?>">
    <div class="container">
        <?php if($has_section_header): ?>
            <div class="row">
                <div class="col-md-6">
                <?php if ($has_label) : ?>
                    <p class="pretitle-bold"><?php echo esc_html($header_info['label']); ?></p>
                    <?php endif; ?>
                    <h3><?php echo esc_html($header_info['title']); ?></h3>
                    <div class="text-primary p16"><?php echo wp_kses_post($header_info['lead']); ?></div>
                </div>
            </div>
        <?php endif; ?>


        <div class="cards-layout-container">
        <div class="cards-wrapper d-flex flex-column gap">
            <?php foreach($cards as $card): 
                $icon = $card['icon'];
                $title = $card['title'];
                $description = $card['description'];
            ?> 
            <div class="card-item rounded-2 <?php echo $has_border ? 'border' : ''; ?> d-flex gap flex-column flex-md-row align-items-md-center justify-content-between">
                <div class="d-inline-flex align-items-center gap">
                    <img src="<?php echo $icon ? esc_url($icon['url']) :  get_template_directory_uri() . '/assets/img/icons/Globe.png'; ?>" alt="<?php echo $icon ? esc_attr($icon['alt']) : 'Globe'; ?>">
                    <h4 class="mb-0"><?php echo esc_html($title); ?></h4>
                </div>
                <div class="description">
                    <p class="text-primary p14"><?php echo wp_kses_post($description); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
</section>
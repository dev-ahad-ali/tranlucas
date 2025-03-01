<?php
    $block_group = get_sub_field('cards_block_info');
    $title = $block_group['title'];
    $lead_text = $block_group['lead_text'];
    $cards = $block_group['cards'];
?>

<div class="future-works bg-gradient rounded-5 overflow-hidden">
<?php if($cards): ?>
<div class="future-works-boxes grid">
    <?php foreach($cards as $card): ?>
    <div class="future-works-item position-relative">
        <div class="future-works-item-content d-flex flex-column text-center align-items-center">
        <?php if($icon = $card['icon']): ?>
            <img class="mb-3" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
        <?php endif; ?>
        <div class="d-flex flex-column pt-1">
            <?php if($box_title = $card['title']): ?>
                <h5><?php echo esc_html($box_title); ?></h5>
            <?php endif; ?>
            <?php if($description = $card['description']): ?>
                <div class="p14 pt-1"><?php echo esc_html($description); ?></div>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
    <div class="future-bottom-text-content text-center mx-auto">
        <?php if($title) : ?>
            <h2 class="mb-3"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if($lead_text) : ?>
            <div class="p16 pt-1 mx-auto text-primary description">
                <?php echo wp_kses_post($lead_text); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
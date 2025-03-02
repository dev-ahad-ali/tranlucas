<?php
    $block_group = get_sub_field('block_list_card_info');
    $list_group = $block_group['list_group'];
?>

<div class="list-card-block rounded-5 bg-gradient mx-auto">
    <div class="container-fluid">
        <div class="row">
            <?php foreach($list_group as $index => $list): ?>
            <div class="<?php echo $index % 2 == 0 ? 'pb-4 md-pb-0' : 'pt-4 md-pt-0'; ?> col-md-6 info-item position-relative">
                <div class="info-title gap mb-4 d-flex align-items-center">
                    <?php if($icon = $list['icon']): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                    <?php endif; ?>
                    <h5 class="mb-0"><?php echo esc_html($list['title']); ?></h5>
                </div>
                <?php if($list['list_items']): ?>
                <div class="info-list">
                    <ul class="mb-0">
                        <?php foreach($list['list_items'] as $item): ?>
                        <li class="p16"><?php echo esc_html($item['item_text']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
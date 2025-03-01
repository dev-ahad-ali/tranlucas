<section class="rich-text-editor pt-30 pt-md-50">
    <div class="rich-editor-block width-1200">
        <?php 
        $layout = get_sub_field('block_column');
        
        if ($layout === 'full-column' && get_sub_field('full_column_content')): ?>
            <div class="editor-full-column">
                <?php echo wp_kses_post(get_sub_field('full_column_content')); ?>
            </div>
        <?php elseif ($layout === 'half-column'): 
            $two_column = get_sub_field('two_column_block'); // Get the group field
            if($two_column): ?>
                <div class="editor-block-grid">
                    <?php if (!empty($two_column['column_1_content'])): ?>
                        <div class="editor-half-column">
                            <?php echo wp_kses_post($two_column['column_1_content']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($two_column['column_2_content'])): ?>
                        <div class="editor-half-column">
                            <?php echo wp_kses_post($two_column['column_2_content']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; 
        endif; ?>
    </div>
</section>
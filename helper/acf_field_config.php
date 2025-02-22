<?php
// Set Global FAQ Section
add_action('acf/include_fields', function() {
    acf_add_local_field_group(array(
        'key' => 'group_page_faq_toggle',
        'title' => 'Global Section Visibility',
        'fields' => array(
            array(
                'key' => 'field_enable_global_faq',
                'label' => 'Show Global FAQ Section',
                'name' => 'enable_global_faq',
                'type' => 'true_false',
                'ui' => 1,
            ),
            array(
                'key' => 'field_enable_global_office_locations_banner',
                'label' => 'Show Global Office Locations Banner',
                'name' => 'enable_global_office_locations_banner',
                'type' => 'true_false',
                'ui' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
    ));
});
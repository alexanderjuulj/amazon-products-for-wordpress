<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_647480b95e886',
		'title' => 'Amazon Products for WordPress',
		'fields' => array(
			array(
				'key' => 'field_647480b966f4c',
				'label' => 'General',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647480b966f58',
				'label' => 'Link to Amazon',
				'name' => 'amazon_link',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 2,
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_64786eba06f5d',
				'label' => 'Link to Amazon Reviews',
				'name' => 'amazon_link_reviews',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 2,
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_649186117b8dd',
				'label' => 'Amazon Rating',
				'name' => 'amazon_rating',
				'aria-label' => '',
				'type' => 'range',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 2,
				'default_value' => '',
				'min' => 1,
				'max' => 5,
				'step' => '0.1',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_64918680f588a',
				'label' => 'Amazon Rating Amount',
				'name' => 'amazon_rating_amount',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 2,
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_647480b966f5b',
				'label' => 'Images',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647480b966f5e',
				'label' => 'Gallery',
				'name' => 'product_gallery',
				'aria-label' => '',
				'type' => 'gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'return_format' => 'array',
				'library' => 'all',
				'min' => '',
				'max' => '',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'insert' => 'append',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_649ac20ad9eab',
				'label' => 'Badge',
				'name' => 'amazon_badge',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 2,
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_647480b966f2f',
				'label' => 'Size Chart & support level',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647480b966f37',
				'label' => 'Size chart image',
				'name' => 'size_chart_image',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'wpml_cf_preferences' => 3,
			),
			array(
				'key' => 'field_647480b966f3b',
				'label' => 'Size chart',
				'name' => 'tab_sizechart',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
				'wpml_cf_preferences' => 2,
			),
			array(
				'key' => 'field_647480b966f3e',
				'label' => 'Support level',
				'name' => 'tab_supportlvl',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
				'wpml_cf_preferences' => 2,
			),
			array(
				'key' => 'field_647480b966f41',
				'label' => 'Videos',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647480b966f43',
				'label' => 'Related videos',
				'name' => 'related_videos',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => 'Type in the URL-s for related videos.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Add Row',
				'rows_per_page' => 20,
				'wpml_cf_preferences' => 3,
				'sub_fields' => array(
					array(
						'key' => 'field_647480b9729ef',
						'label' => 'Video',
						'name' => 'video',
						'aria-label' => '',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 'https://www.example.com',
						'parent_repeater' => 'field_647480b966f43',
						'wpml_cf_preferences' => 3,
					),
				),
			),
			array(
				'key' => 'field_647480b966f46',
				'label' => 'Features',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'wpml_cf_preferences' => 3,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647480b966f49',
				'label' => 'Features',
				'name' => 'features_repeater',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 3,
				'layout' => 'row',
				'button_label' => 'Add feature',
				'rows_per_page' => 20,
				'wpml_cf_preferences' => 3,
				'sub_fields' => array(
					array(
						'key' => 'field_647480b97b424',
						'label' => 'Headline',
						'name' => 'feature_headline',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'parent_repeater' => 'field_647480b966f49',
						'wpml_cf_preferences' => 2,
					),
					array(
						'key' => 'field_647480b97b42a',
						'label' => 'Description',
						'name' => 'feature_description',
						'aria-label' => '',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'new_lines' => '',
						'parent_repeater' => 'field_647480b966f49',
						'wpml_cf_preferences' => 2,
					),
					array(
						'key' => 'field_647480b97b42d',
						'label' => 'Image',
						'name' => 'feature_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'parent_repeater' => 'field_647480b966f49',
						'wpml_cf_preferences' => 3,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'amazon_product',
				),
			),
		),
		'menu_order' => 3,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
		'acfml_field_group_mode' => 'localization',
	) );
} );


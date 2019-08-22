<?php
	/** Slider Options **/
	function rezoto_slider_options( $wp_customize ) {

		$category_list = rezoto_category_list('dropdown');

		/** Slider Section **/
		Kirki::add_section( 'rezoto_slider_options', array(
		    'title'          => esc_html__( 'Slider', 'rezoto' ),
		) );

			/** Enable/Disable Top Header **/
			Kirki::add_field( 'rezoto_enable_slider', array(
				'type'        => 'switch',
				'settings'    => 'rezoto_enable_slider',
				'label'       => esc_html__( 'Enable Slider', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => '1',
				'choices'     => array(
					'on'  => esc_html__( 'Enable', 'rezoto' ),
					'off' => esc_html__( 'Disable', 'rezoto' ),
				),
			) );

			/** Slider Type **/
			Kirki::add_field( 'rezoto_slider_type', array(
				'type'        => 'select',
				'settings'    => 'rezoto_slider_type',
				'label'       => esc_html__( 'Slider Type', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => 'category-slider',
				'multiple'    => 1,
				'choices'     => array(
					'category-slider' => esc_html__( 'Category Slider', 'rezoto' ),
					'revolution-slider' => esc_html__( 'Revolution Slider', 'rezoto' ),
				)
			) );

			/** Slider Category **/
			Kirki::add_field( 'rezoto_slider_category', array(
				'type'        => 'select',
				'settings'    => 'rezoto_slider_category',
				'label'       => esc_html__( 'Slider Category', 'rezoto' ),
				'description' => esc_html__( 'select a category for the slider', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => 0,
				'multiple'    => 1,
				'choices'     => $category_list,
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_slider_type',
						'operator' => '==',
						'value'    => 'category-slider',
					)
				),
			) );

			/** Slider Layout **/
			Kirki::add_field( 'rezoto_slider_layout', array(
				'type'        => 'select',
				'settings'    => 'rezoto_slider_layout',
				'label'       => esc_html__( 'Slider Layout', 'rezoto' ),
				'description' => esc_html__( 'select a layout for the slider', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => 'layout1',
				'multiple'    => 1,
				'choices'     => array(
					'layout1' => esc_html__( 'Left Aligned', 'rezoto' ),
					'layout2' => esc_html__( 'Center Aligned', 'rezoto' ),
					'layout3' => esc_html__( 'Right Aligned', 'rezoto' ),
				),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_slider_type',
						'operator' => '==',
						'value'    => 'category-slider',
					)
				),
			) );

			/** Slider Text Color **/
			Kirki::add_field( 'rezoto_caption_text_color', array(
				'type'        => 'color',
				'settings'    => 'rezoto_caption_text_color',
				'label'       => esc_html__( 'Caption Text Color', 'rezoto' ),
				'description' => esc_html__( 'set the color for the caption text', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => '#616161',
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_slider_type',
						'operator' => '==',
						'value'    => 'category-slider',
					)
				),
			) );

			/** Revolution Slider Shortcode **/
			Kirki::add_field( 'rezoto_rev_shortcode', array(
				'type'     => 'textarea',
				'settings' => 'rezoto_rev_shortcode',
				'label'    => esc_html__( 'Shortcode.', 'rezoto' ),
				'description' => esc_html__( 'Enter the shortcode of revolution slider.', 'rezoto' ),
				'section'  => 'rezoto_slider_options',
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_slider_type',
						'operator' => '==',
						'value'    => 'revolution-slider',
					)
				),
			) );

			/** Slider Top Margin **/
			Kirki::add_field( 'rezoto_slider_top_margin', [
				'type'        => 'dimension',
				'settings'    => 'rezoto_slider_top_margin',
				'label'       => esc_html__( 'Top Margin', 'rezoto' ),
				'description' => esc_html__( 'Set top margin for slider.', 'rezoto' ),
				'section'     => 'rezoto_slider_options',
				'default'     => '0',
			] );

	}

	add_filter( 'kirki/fields', 'rezoto_slider_options' );
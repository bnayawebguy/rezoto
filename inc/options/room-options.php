<?php
	/** Room Options **/
	function rezoto_room_options( $wp_customize ) {

		$category_list = rezoto_category_list('dropdown');

		/** Hotel Room Section **/
		Kirki::add_section( 'rezoto_room_options', array(
		    'title'          => esc_html__( 'Hotel Rooms', 'rezoto' ),
		) );

			/** Rooms Page Layout **/
			Kirki::add_field( 'rezoto_rooms_page_layout', array(
				'type'        => 'select',
				'settings'    => 'rezoto_rooms_page_layout',
				'label'       => esc_html__( 'Rooms Page Layout', 'rezoto' ),
				'section'     => 'rezoto_room_options',
				'default'     => 'list',
				'multiple'    => 1,
				'choices'     => array(
					'list' => esc_html__( 'List Layout', 'rezoto' ),
					'grid' => esc_html__( 'Grid Layout', 'rezoto' ),
				),
				'description' => esc_html__( 'select any one layout for the room page', 'rezoto' ),
			) );

			/** Enable/Disable Top Header **/
			Kirki::add_field( 'rezoto_enable_room_desc_text', array(
				'type'        => 'switch',
				'settings'    => 'rezoto_enable_room_desc_text',
				'label'       => esc_html__( 'Display Description', 'rezoto' ),
				'section'     => 'rezoto_room_options',
				'default'     => '1',
				'choices'     => array(
					'on'  => esc_html__( 'Show', 'rezoto' ),
					'off' => esc_html__( 'Hide', 'rezoto' ),
				),
			) );

			/** Excerpt Length **/
			Kirki::add_field( 'rezoto_room_excerpt_length', array(
				'type'        => 'slider',
				'settings'    => 'rezoto_room_excerpt_length',
				'label'       => esc_html__( 'Excerpt Length (In Chars)', 'rezoto' ),
				'section'     => 'rezoto_room_options',
				'description' => esc_html__( 'set the length for the excerpt text in room posts', 'rezoto' ),
				'choices'     => array(
					'min'  => 0,
					'max'  => 150,
					'step' => 1,
				),
			) );

			/** View More Button Text **/
			Kirki::add_field( 'rezoto_room_viewmore_text', array(
				'type'     => 'text',
				'settings' => 'rezoto_room_viewmore_text',
				'label'    => esc_html__( 'View More Text', 'rezoto' ),
				'description' => esc_html__( 'set view more button text', 'rezoto' ),
				'section'  => 'rezoto_room_options',
			) );
	}

	add_filter( 'kirki/fields', 'rezoto_room_options' );
<?php
	/** General Options **/
	function rezoto_general_options( $wp_customize ) {

		/** Footer Section **/
		Kirki::add_section( 'rezoto_general_options', array(
		    'title'          => esc_html__( 'General Settings', 'rezoto' ),
		) );

			/** Template Color **/
			Kirki::add_field( 'rezoto_template_color', [
				'type'        => 'color',
				'settings'    => 'rezoto_template_color',
				'label'       => esc_html__( 'Template Color', 'rezoto' ),
				'description' => esc_html__( 'select the template color for site', 'rezoto' ),
				'section'     => 'rezoto_general_options',
				'default'     => '#EC6A2A',
			] );

			/** Enable Preloader **/
			Kirki::add_field( 'rezoto_enable_preloader', array(
				'type'        => 'switch',
				'settings'    => 'rezoto_enable_preloader',
				'label'       => esc_html__( 'Enable Preloader', 'rezoto' ),
				'section'     => 'rezoto_general_options',
				'default'     => '1',
				'choices'     => array(
					'on'  => esc_html__( 'Show', 'rezoto' ),
					'off' => esc_html__( 'Hide', 'rezoto' ),
				),
			) );

			/** Enable Go to Top option **/
			Kirki::add_field( 'rezoto_goto_top_link', array(
				'type'        => 'switch',
				'settings'    => 'rezoto_goto_top_link',
				'label'       => esc_html__( 'Enable Goto Top', 'rezoto' ),
				'section'     => 'rezoto_general_options',
				'default'     => '1',
				'choices'     => array(
					'on'  => esc_html__( 'Enable', 'rezoto' ),
					'off' => esc_html__( 'Disable', 'rezoto' ),
				),
			) );

	}

	add_filter( 'kirki/fields', 'rezoto_general_options' );
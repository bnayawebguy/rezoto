<?php
	/** Typography Options **/
	function rezoto_typography_options( $wp_customize ) {

		$gfonts = array(
			'Montserrat',
			'Poppins',
			'Playfair Display',
			'Open Sans',
			'Merriweather',
		);

		/** Typography Panel **/
		Kirki::add_panel( 'rezoto_typography_panel', array(
		    'title'       => esc_html__( 'Typography', 'rezoto' ),
		    'description' => esc_html__( 'Configure Typography for the site', 'rezoto' ),
		    'priority'    => 30
		) );

			/** Heading Section **/
			Kirki::add_section( 'rezoto_heading_typo', array(
			    'title'          => esc_html__( 'Heading (H1 - H6)', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 1 Typography **/
				Kirki::add_field( 'rezoto_heading', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading',
					'label'       => esc_html__( 'Heading', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for heading texts', 'rezoto' ),
					'section'     => 'rezoto_heading_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h1',
						),
					),
				) );

			/** Body Section **/
			Kirki::add_section( 'rezoto_body_typo', array(
			    'title'          => esc_html__( 'Body', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Body Typography **/
				Kirki::add_field( 'rezoto_body', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_body',
					'label'       => esc_html__( 'Body', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for body texts', 'rezoto' ),
					'section'     => 'rezoto_body_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Montserrat',
						'variant'        => 'regular',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'body',
						),
					),
				) );

			/** Menu Section **/
			Kirki::add_section( 'rezoto_menu_typo', array(
			    'title'          => esc_html__( 'Menu', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Menu Typography **/
				Kirki::add_field( 'rezoto_menu', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_menu',
					'label'       => esc_html__( 'Menu', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for menu texts', 'rezoto' ),
					'section'     => 'rezoto_menu_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Montserrat',
						'variant'        => 'regular',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'header .main-navigation ul li a',
						),
					),
				) );

			/** Widget Section **/
			Kirki::add_section( 'rezoto_widget_typo', array(
			    'title'          => esc_html__( 'Widget Title', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Widget Title Typography **/
				Kirki::add_field( 'rezoto_widget_title', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_widget_title',
					'label'       => esc_html__( 'Widget Title', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for widget title', 'rezoto' ),
					'section'     => 'rezoto_widget_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '600',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => '.right-sidebar #secondary .widget-title, .right-sidebar .widget_hb_widget_cart h3, .sroom-sidebar .widget h3',
						),
					),
				) );

	}

	add_filter( 'kirki/fields', 'rezoto_typography_options' );
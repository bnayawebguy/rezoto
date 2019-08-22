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

			/** Anchor Text Section **/
			Kirki::add_section( 'rezoto_anchor_typo', array(
			    'title'          => esc_html__( 'Anchor Text', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Anchor Text Color (Normal) **/
				Kirki::add_field( 'rezoto_anchor_text_color_normal', array(
					'type'        => 'color',
					'settings'    => 'rezoto_anchor_text_color_normal',
					'label'       => __( 'Anchor Text Color (Normal)', 'rezoto' ),
					'section'     => 'rezoto_anchor_typo',
					'default'     => '#ec6a2a',
				) );

				/** Anchor Text Color (Hover) **/
				Kirki::add_field( 'rezoto_anchor_text_color_hover', array(
					'type'        => 'color',
					'settings'    => 'rezoto_anchor_text_color_hover',
					'label'       => __( 'Anchor Text Color (Hover)', 'rezoto' ),
					'section'     => 'rezoto_anchor_typo',
					'default'     => '#c5470d',
				) );

			/** Heading 1 Section **/
			Kirki::add_section( 'rezoto_heading1_typo', array(
			    'title'          => esc_html__( 'Heading 1', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 1 Typography **/
				Kirki::add_field( 'rezoto_heading1', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading1',
					'label'       => esc_html__( 'Heading 1', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H1 text.', 'rezoto' ),
					'section'     => 'rezoto_heading1_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '32px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h1',
						),
					),
				) );

			/** Heading 2 Section **/
			Kirki::add_section( 'rezoto_heading2_typo', array(
			    'title'          => esc_html__( 'Heading 2', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 2 Typography **/
				Kirki::add_field( 'rezoto_heading2', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading2',
					'label'       => esc_html__( 'Heading 2', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H2 text.', 'rezoto' ),
					'section'     => 'rezoto_heading2_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '24px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h2',
						),
					),
				) );

			/** Heading 3 Section **/
			Kirki::add_section( 'rezoto_heading3_typo', array(
			    'title'          => esc_html__( 'Heading 3', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 3 Typography **/
				Kirki::add_field( 'rezoto_heading3', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading3',
					'label'       => esc_html__( 'Heading 3', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H3 text.', 'rezoto' ),
					'section'     => 'rezoto_heading3_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '18px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h3',
						),
					),
				) );

			/** Heading 4 Section **/
			Kirki::add_section( 'rezoto_heading4_typo', array(
			    'title'          => esc_html__( 'Heading 4', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 4 Typography **/
				Kirki::add_field( 'rezoto_heading4', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading4',
					'label'       => esc_html__( 'Heading 4', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H4 text.', 'rezoto' ),
					'section'     => 'rezoto_heading4_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '16px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h4',
						),
					),
				) );

			/** Heading 5 Section **/
			Kirki::add_section( 'rezoto_heading5_typo', array(
			    'title'          => esc_html__( 'Heading 5', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 5 Typography **/
				Kirki::add_field( 'rezoto_heading5', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading5',
					'label'       => esc_html__( 'Heading 5', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H5 text.', 'rezoto' ),
					'section'     => 'rezoto_heading5_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '14px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h5',
						),
					),
				) );

			/** Heading 6 Section **/
			Kirki::add_section( 'rezoto_heading6_typo', array(
			    'title'          => esc_html__( 'Heading 6', 'rezoto' ),
			    'panel'          => 'rezoto_typography_panel',
			) );

				/** Heading 6 Typography **/
				Kirki::add_field( 'rezoto_heading6', array(
					'type'        => 'typography',
					'settings'    => 'rezoto_heading6',
					'label'       => esc_html__( 'Heading 6', 'rezoto' ),
					'description' => esc_html__( 'configure fonts for H6 text.', 'rezoto' ),
					'section'     => 'rezoto_heading6_typo',
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
						'font-size'      => '10px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h6',
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
					'default'     => array(
						'font-family'    => 'Montserrat',
						'variant'        => 'regular',
						'color'          => '#616161',
						'font-size'      => '16px',
						'line-height'    => '27px',
						'text-transform' => 'none',
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
					'default'     => array(
						'font-family'    => 'Montserrat',
						'variant'        => 'regular',
						'color'          => '#616161',
						'font-size'      => '14px',
						'line-height'    => '27px',
						'text-transform' => 'none',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'header .main-navigation ul li a',
						),
					),
				) );

				/** Menu Hover Color **/
				Kirki::add_field( 'rezoto_menu_hover_color', array(
					'type'        => 'color',
					'settings'    => 'rezoto_menu_hover_color',
					'label'       => __( 'Menu Hover Color', 'rezoto' ),
					'section'     => 'rezoto_menu_typo',
					'default'     => '#ec6a2a',
				) );

				/** Menu Text Decoration **/
				Kirki::add_field( 'rezoto_menu_hover_text_decoration', [
					'type'        => 'select',
					'settings'    => 'rezoto_menu_hover_text_decoration',
					'label'       => esc_html__( 'Text Decoration (Hover)', 'rezoto' ),
					'section'     => 'rezoto_menu_typo',
					'default'     => 'none',
					'multiple'    => 1,
					'choices'     => rezoto_text_decoration_list(),
				] );

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
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '600',
						'color'          => '#616161',
						'font-size'      => '18px',
						'line-height'    => '27px',
						'text-transform' => 'none',
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
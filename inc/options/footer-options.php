<?php
	/** Footer Options **/
	function rezoto_footer_options( $wp_customize ) {

		/** Footer Section **/
		Kirki::add_section( 'rezoto_footer_options', array(
		    'title'          => esc_html__( 'Footer', 'rezoto' ),
		) );

			/** Footer Layout **/
			Kirki::add_field( 'rezoto_footer_layout', array(
				'type'        => 'select',
				'settings'    => 'rezoto_footer_layout',
				'label'       => esc_html__( 'Footer Layout', 'rezoto' ),
				'section'     => 'rezoto_footer_options',
				'default'     => 'layout1',
				'multiple'    => 1,
				'description' => esc_html__( 'select the layout for the footer', 'rezoto' ),
				'choices'     => array(
					'layout1' => esc_html__( 'Layout 1', 'rezoto' ),
					'layout2' => esc_html__( 'Layout 2', 'rezoto' ),
				),
			) );

			/** Footer Widgets Help **/
			Kirki::add_field( 'rezoto_footer_widgets_help', array(
				'type'        => 'custom',
				'settings'    => 'rezoto_footer_widgets_help',
				'label'       => esc_html__( 'Footer Widgets', 'rezoto' ),
				'section'     => 'rezoto_footer_options',
				'default'     => '
					<ul style="background-color: #008ec2; padding: 10px; color: #fff">
						<li>'. esc_html__( "Go to Dashboard > Appearance > Widgets", 'rezoto' ) .'</li>
						<li>'. esc_html__( "Add Widgets to Footer (1-4)", 'rezoto' ) .'</li>
						<li>'. esc_html__( "Save the widgets", 'rezoto' ) .'</li>
					</ul>
				',
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout1',
					)
				),
			) );

			/** Footer Logo **/
			Kirki::add_field( 'rezoto_footer_logo', array(
				'type'        => 'image',
				'settings'    => 'rezoto_footer_logo',
				'label'       => esc_html__( 'Footer Logo', 'rezoto' ),
				'section'     => 'rezoto_footer_options',
				'default'     => '',
				'description' => esc_html__( 'select the logo for the footer', 'rezoto' ),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Footer Menu Help **/
			Kirki::add_field( 'rezoto_footer_menu_help', array(
				'type'        => 'custom',
				'settings'    => 'rezoto_footer_menu_help',
				'label'       => esc_html__( 'Footer Menu', 'rezoto' ),
				'section'     => 'rezoto_footer_options',
				'default'     => '
					<ul style="background-color: #008ec2; padding: 10px; color: #fff">
						<li>'. esc_html__( "Go to Dashboard > Appearance > Menus", 'rezoto' ) .'</li>
						<li>'. esc_html__( "Create a menu for the footer", 'rezoto' ) .'</li>
						<li>'. esc_html__( "Set the menu location to Footer Menu", 'rezoto' ) .'</li>
					</ul>
				',
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Facebook Link **/
			Kirki::add_field( 'rezoto_footer_facebook', array(
				'type'     => 'link',
				'settings' => 'rezoto_footer_facebook',
				'label'    => __( 'Facebook Link', 'rezoto' ),
				'section'  => 'rezoto_footer_options',
				'default'  => '',
				'description' => esc_html__( 'set the social link for facebook', 'rezoto' ),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Twitter Link **/
			Kirki::add_field( 'rezoto_footer_twitter', array(
				'type'     => 'link',
				'settings' => 'rezoto_footer_twitter',
				'label'    => __( 'Twitter Link', 'rezoto' ),
				'section'  => 'rezoto_footer_options',
				'default'  => '',
				'description' => esc_html__( 'set the social link for twitter', 'rezoto' ),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Instagram Link **/
			Kirki::add_field( 'rezoto_footer_instagram', array(
				'type'     => 'link',
				'settings' => 'rezoto_footer_instagram',
				'label'    => __( 'Instagram Link', 'rezoto' ),
				'section'  => 'rezoto_footer_options',
				'default'  => '',
				'description' => esc_html__( 'set the social link for instagram', 'rezoto' ),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Youtube Link **/
			Kirki::add_field( 'rezoto_footer_youtube', array(
				'type'     => 'link',
				'settings' => 'rezoto_footer_youtube',
				'label'    => __( 'Youtube Link', 'rezoto' ),
				'section'  => 'rezoto_footer_options',
				'default'  => '',
				'description' => esc_html__( 'set the social link for youtube', 'rezoto' ),
				'active_callback' => array(
					array(
						'setting'  => 'rezoto_footer_layout',
						'operator' => '==',
						'value'    => 'layout2',
					)
				),
			) );

			/** Copyright Text **/
			Kirki::add_field( 'rezoto_copyright_text', array(
				'type'     => 'textarea',
				'settings' => 'rezoto_copyright_text',
				'label'    => esc_html__( 'Copyright Text', 'rezoto' ),
				'section'  => 'rezoto_footer_options',
				'description' => esc_html__( 'set the copyright text.', 'rezoto' ),
			) );

	}

	add_filter( 'kirki/fields', 'rezoto_footer_options' );
<?php
	/** Header Options **/
	function rezoto_header_options( $wp_customize ) {

		/** Header Panel **/
		Kirki::add_panel( 'rezoto_header_panel', array(
		    'title'       => esc_html__( 'Header', 'rezoto' ),
		    'description' => esc_html__( 'Configure Header', 'rezoto' ),
		) );

			/** Top Header **/
			Kirki::add_section( 'rezoto_top_header', array(
			    'title'          => esc_html__( 'Top Header', 'rezoto' ),
			    'panel'          => 'rezoto_header_panel',
			) );

				/** Enable/Disable Top Header **/
				Kirki::add_field( 'rezoto_enable_top_header', array(
					'type'        => 'switch',
					'settings'    => 'rezoto_enable_top_header',
					'label'       => esc_html__( 'Enable Top Header', 'rezoto' ),
					'section'     => 'rezoto_top_header',
					'default'     => 0,
					'choices'     => array(
						'on'  => esc_html__( 'Enable', 'rezoto' ),
						'off' => esc_html__( 'Disable', 'rezoto' ),
					),
				) );

				/** Contact Number **/
				Kirki::add_field( 'rezoto_contact_number', array(
					'type'     => 'text',
					'settings' => 'rezoto_contact_number',
					'label'    => esc_html__( 'Contact No.', 'rezoto' ),
					'description' => esc_html__( 'set the contact number', 'rezoto' ),
					'section'  => 'rezoto_top_header',
				) );

				/** Email **/
				Kirki::add_field( 'rezoto_email', array(
					'type'     => 'text',
					'settings' => 'rezoto_email',
					'label'    => esc_html__( 'Email ID', 'rezoto' ),
					'description' => esc_html__( 'set the email id', 'rezoto' ),
					'section'  => 'rezoto_top_header',
				) );

				/** Time **/
				Kirki::add_field( 'rezoto_time', array(
					'type'     => 'text',
					'settings' => 'rezoto_time',
					'label'    => esc_html__( 'Time', 'rezoto' ),
					'description' => esc_html__( 'set the business hour time', 'rezoto' ),
					'section'  => 'rezoto_top_header',
				) );

				/** Facebook Link **/
				Kirki::add_field( 'rezoto_facebook', array(
					'type'     => 'link',
					'settings' => 'rezoto_facebook',
					'label'    => __( 'Facebook', 'rezoto' ),
					'section'  => 'rezoto_top_header',
					'default'  => '',
					'description' => esc_html__( 'set the social link for facebook', 'rezoto' ),
				) );

				/** Twitter Link **/
				Kirki::add_field( 'rezoto_twitter', array(
					'type'     => 'link',
					'settings' => 'rezoto_twitter',
					'label'    => __( 'Twitter', 'rezoto' ),
					'section'  => 'rezoto_top_header',
					'default'  => '',
					'description' => esc_html__( 'set the social link for twitter', 'rezoto' ),
				) );

				/** Instagram Link **/
				Kirki::add_field( 'rezoto_instagram', array(
					'type'     => 'link',
					'settings' => 'rezoto_instagram',
					'label'    => __( 'Instagram', 'rezoto' ),
					'section'  => 'rezoto_top_header',
					'default'  => '',
					'description' => esc_html__( 'set the social link for instagram', 'rezoto' ),
				) );

				/** Youtube Link **/
				Kirki::add_field( 'rezoto_youtube', array(
					'type'     => 'link',
					'settings' => 'rezoto_youtube',
					'label'    => __( 'Youtube', 'rezoto' ),
					'section'  => 'rezoto_top_header',
					'default'  => '',
					'description' => esc_html__( 'set the social link for youtube', 'rezoto' ),
				) );

				/** Background Color **/
				Kirki::add_field( 'rezoto_top_header_bg_color', [
					'type'        => 'color',
					'settings'    => 'rezoto_top_header_bg_color',
					'label'       => __( 'Background Color', 'rezoto' ),
					'description' => esc_html__( 'Set background color for top header.', 'rezoto' ),
					'section'     => 'rezoto_top_header',
					'default'     => '#ec6a2a',
					'choices'     => array(
						'alpha' => true,
					),
				] );

				/** Top & Bottom Padding **/
				Kirki::add_field( 'rezoto_top_header_padding', [
					'type'        => 'dimension',
					'settings'    => 'rezoto_top_header_padding',
					'label'       => esc_html__( 'Top & Bottom Padding', 'rezoto' ),
					'description' => esc_html__( 'Set top and bottom padding for the top header.', 'rezoto' ),
					'section'     => 'rezoto_top_header',
					'default'     => '12',
				] );

				/** Top Header Text Color **/
				Kirki::add_field( 'rezoto_top_header_text_color', array(
					'type'        => 'color',
					'settings'    => 'rezoto_top_header_text_color',
					'label'       => __( 'Text Color', 'rezoto' ),
					'description' => esc_html__( 'set text color for the top header', 'rezoto' ),
					'section'     => 'rezoto_top_header',
					'default'     => '#ffffff',
				) );

			/** Main Header **/
			Kirki::add_section( 'title_tagline', array(
			    'title'          => esc_html__( 'Main Header', 'rezoto' ),
			    'panel'          => 'rezoto_header_panel',
			) );

				/** Header Layout **/
				Kirki::add_field( 'rezoto_header_layout', array(
					'type'        => 'radio-image',
					'settings'    => 'rezoto_header_layout',
					'label'       => esc_html__( 'Header Layout', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => 'layout1',
					'description' => esc_html__( 'select any one header layout', 'rezoto' ),
					'choices'     => array(
						'layout1'   => get_template_directory_uri() . '/assets/images/header-layout1.png',
						'layout2' => get_template_directory_uri() . '/assets/images/header-layout2.png',
					),
				) );

				/** Show Search Icon **/
				Kirki::add_field( 'rezoto_show_search', array(
					'type'        => 'switch',
					'settings'    => 'rezoto_show_search',
					'label'       => esc_html__( 'Display Search in Header', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '1',
					'choices'     => array(
						'on'  => esc_html__( 'Show', 'rezoto' ),
						'off' => esc_html__( 'Hide', 'rezoto' ),
					),
				) );

				/** Search Icon Normal Color **/
				Kirki::add_field( 'rezoto_search_icon_color_normal', array(
					'type'        => 'color',
					'settings'    => 'rezoto_search_icon_color_normal',
					'label'       => __( 'Search Icon Color (Normal)', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#616161',
				) );

				/** Search Icon Hover Color **/
				Kirki::add_field( 'rezoto_search_icon_color_hover', array(
					'type'        => 'color',
					'settings'    => 'rezoto_search_icon_color_hover',
					'label'       => __( 'Search Icon Color (Hover)', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#ec6a2a',
				) );

				/** Show Hotel Cart **/
				Kirki::add_field( 'rezoto_show_hotelcart', array(
					'type'        => 'switch',
					'settings'    => 'rezoto_show_hotelcart',
					'label'       => esc_html__( 'Display Hotel Cart in Header', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '1',
					'choices'     => array(
						'on'  => esc_html__( 'Show', 'rezoto' ),
						'off' => esc_html__( 'Hide', 'rezoto' ),
					),
				) );

				/** Cart Icon Normal Color **/
				Kirki::add_field( 'rezoto_cart_icon_color_normal', array(
					'type'        => 'color',
					'settings'    => 'rezoto_cart_icon_color_normal',
					'label'       => __( 'Cart Icon Color (Normal)', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#616161',
				) );

				/** Cart Icon Hover Color **/
				Kirki::add_field( 'rezoto_cart_icon_color_hover', array(
					'type'        => 'color',
					'settings'    => 'rezoto_cart_icon_color_hover',
					'label'       => __( 'Cart Icon Color (Hover)', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#ec6a2a',
				) );

				/** Main Header Background Color **/
				Kirki::add_field( 'rezoto_main_header_bg_color', [
					'type'        => 'color',
					'settings'    => 'rezoto_main_header_bg_color',
					'label'       => __( 'Background Color', 'rezoto' ),
					'description' => esc_html__( 'Set background color for main header.', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#ffffff',
					'choices'     => array(
						'alpha' => true,
					),
				] );

				/** Main Header Border **/
				Kirki::add_field( 'rezoto_main_header_border_color', [
					'type'        => 'color',
					'settings'    => 'rezoto_main_header_border_color',
					'label'       => __( 'Border Color', 'rezoto' ),
					'description' => esc_html__( 'set the main header border color.', 'rezoto' ),
					'section'     => 'title_tagline',
					'default'     => '#0088CC',
					'choices'     => array(
						'alpha' => true,
					),
				] );

			/** Page Banner **/
			Kirki::add_section( 'rezoto_hb_search_room', array(
			    'title'          => esc_html__( 'Hotel Search Room', 'rezoto' ),
			    'panel'          => 'rezoto_header_panel',
			) );

				/** Enable/Disable search room **/
				Kirki::add_field( 'rezoto_show_hb_search_rooms', array(
					'type'        => 'switch',
					'settings'    => 'rezoto_show_hb_search_rooms',
					'label'       => esc_html__( 'Show/Hide Search Rooms Form', 'rezoto' ),
					'section'     => 'rezoto_hb_search_room',
					'default'     => '1',
					'choices'     => array(
						'on'  => esc_html__( 'Show', 'rezoto' ),
						'off' => esc_html__( 'Hide', 'rezoto' ),
					),
				) );

			/** Page Banner **/
			Kirki::add_section( 'rezoto_page_banner', array(
			    'title'          => esc_html__( 'Page Banner', 'rezoto' ),
			    'panel'          => 'rezoto_header_panel',
			) );

				/** Page Banner Color **/
				Kirki::add_field( 'rezoto_page_banner_bgcolor', array(
					'type'        => 'color',
					'settings'    => 'rezoto_page_banner_bgcolor',
					'label'       => __( 'Background Color', 'rezoto' ),
					'description' => esc_html__( 'set the banner background color', 'rezoto' ),
					'section'     => 'rezoto_page_banner',
					'default'     => '#0088CC',
				) );

				/** Page Banner Image **/
				Kirki::add_field( 'rezoto_page_banner_bgimage', array(
					'type'        => 'image',
					'settings'    => 'rezoto_page_banner_bgimage',
					'label'       => esc_html__( 'Banner Image', 'rezoto' ),
					'description' => esc_html__( 'set the banner background image', 'rezoto' ),
					'section'     => 'rezoto_page_banner',
					'default'     => '',
				) );

				/** Page Banner Text Color **/
				Kirki::add_field( 'rezoto_page_banner_textcolor', array(
					'type'        => 'color',
					'settings'    => 'rezoto_page_banner_textcolor',
					'label'       => __( 'Text Color', 'rezoto' ),
					'description' => esc_html__( 'set the color for the banner text', 'rezoto' ),
					'section'     => 'rezoto_page_banner',
					'default'     => '#0088CC',
				) );

				/** Enable/Disable Breadcrumb **/
				Kirki::add_field( 'rezoto_display_breadcrumb', array(
					'type'        => 'switch',
					'settings'    => 'rezoto_display_breadcrumb',
					'label'       => esc_html__( 'Show/Hide Breadcrumb', 'rezoto' ),
					'section'     => 'rezoto_page_banner',
					'default'     => '1',
					'choices'     => array(
						'on'  => esc_html__( 'Show', 'rezoto' ),
						'off' => esc_html__( 'Hide', 'rezoto' ),
					),
				) );

	}

	add_filter( 'kirki/fields', 'rezoto_header_options' );
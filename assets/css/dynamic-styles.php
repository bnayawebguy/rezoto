<?php
	/** Rezoto Dynamic Styles **/
	function rezoto_dynamic_styles() {

		$custom_css = "";

		/** Anchor Text Dynamic Colors **/
			$anchor_text_normal = get_theme_mod( 'rezoto_anchor_text_color_normal', '#ec6a2a' );
			$anchor_text_hover = get_theme_mod( 'rezoto_anchor_text_color_hover', '#c5470d' );

			if( $anchor_text_normal ) {
				$custom_css .= "
					a {
						color: $anchor_text_normal;
					}
				";
			}

			if( $anchor_text_hover ) {
				$custom_css .= "
					a:hover {
						color: $anchor_text_hover;
					}
				";
			}

		/** Slider Dynamic Options **/
			$slider_top_margin = get_theme_mod( 'rezoto_slider_top_margin', '0' );

			if( $slider_top_margin ) {
				$custom_css .= "
					.resoto-slider,
					.rezoto-rev-slider {
						margin-top: {$slider_top_margin}px;
					}
				";
			}

			/** Slider Text Color **/
			$caption_text_color = get_theme_mod( 'rezoto_caption_text_color', '#616161' );
			if( $caption_text_color ) {
				$custom_css .= "
					.rezoto-slider .caption-text .slide-title,
					.rezoto-slider .caption-text .text {
						color: $caption_text_color;
					}
				";
			}

		/** Page Banner **/
		$banner_bgcolor = get_theme_mod( 'rezoto_page_banner_bgcolor', '' );
		$banner_bgimage = get_theme_mod( 'rezoto_page_banner_bgimage', '' );
		$banner_textcolor = get_theme_mod( 'rezoto_page_banner_textcolor', '' );
		if( $banner_bgcolor ) {
			$custom_css .= "
				.rezoto-banner{
					background-color: $banner_bgcolor;
				}
			";
		}

		if( $banner_bgimage ) {
			$custom_css .= "
				.rezoto-banner{
					background-image: url($banner_bgimage);
				}
			";
		}

		if( $banner_textcolor ) {
			$custom_css .= "
				.rezoto-banner h2.page-title,
				.rezoto-banner a{
					color: $banner_textcolor;
				}
			";
		}

		/** Template Color **/
		$tpl_color = get_theme_mod('rezoto_template_color', '#ec6a2a');
		if( $tpl_color ) {

			/** Darker Color **/
			$tpl_color_darker = rezoto_adjust_color( $tpl_color, -0.1 );

			/** 0.4 Lighter Color **/
			$tpl_color_light = rezoto_hex2rgba( $tpl_color, 0.4 );

			/** Normal Colors **/
				/** Color **/
				$custom_css .="
					.rezoto-banner ul a:hover,
					.rezoto-banner ul a:focus, .rezoto-banner ul .trail-end,
					.site-footer.layout2 ul li a:hover,
					.site-footer.layout2 ul li a:focus,
					#rezoto-goto-top,
					.tp-hotel-booking .star-rating span:before,
					.tp-hotel-booking .star-rating:before,
					.tp-hotel-booking .price-infos .title h4 a:hover,
					.tp-hotel-booking .price-readmore-btn .price span.price_value,
					.rezoto-room-wrap ul.room-features li:hover,
					.rating-input:before,
					article .post-title-metas a:hover,
					article .post-title-metas a:focus,
					article .post-title-metas a:active,
					.comments-title span,
					.single .comments-area .comment-body .comment-meta a:hover,
					.single .comments-area .comment-body .comment-meta a:focus,
					.single .comments-area .comment-body .reply a:hover,
					.single .comments-area .comment-body .reply a:focus,
					.right-sidebar #secondary ul a:hover,
					.right-sidebar #secondary ul a:focus,
					.right-sidebar a.tag-cloud-link:hover,
					header.layout2 .main-header .rcontainer .main-navigation ul li.current-menu-item > a,
					header.layout2 .main-header .rcontainer .main-navigation ul li:hover > a,
					.rezoto-search > span:hover,
					.rezoto-hotelcart > span:hover,
					.rezoto-search-form > span:hover,
					.hb-booking-room-details table tr td.hb_search_item_price,
					#hotel-booking-results .hb-search-results>.hb-room .hb-room-name a:hover,
					.hb-booking-room-details table tr td.hb_search_item_price,
					#hotel-booking-results .hb-search-results>.hb-room .hb-room-name a:hover,
					.hotel_booking_mini_cart .hb_mini_cart_item .hb_mini_cart_remove:hover,
					.hotel_booking_mini_cart .hb_mini_cart_item .hb_mini_cart_price span,
					.hotel_booking_mini_cart .hb_mini_cart_item .hb_title a:hover,
					#hotel-booking-cart table a:hover,
					#hotel-booking-cart table a:focus,
					#hotel-booking-payment table a:hover,
					#hotel-booking-payment table a:focus,
					header.layout1 .main-navigation ul li a:hover,
					.is-style-outline .wp-block-button__link,
					.page-links span,
					.page-links a:hover,
					.site-footer.layout1 ul li a:hover,
					.site-footer.layout1 ul li a:focus,
					.site-footer.layout1 .tagcloud a:hover,
					.site-footer.layout1 .tagcloud a:focus,
					.woocommerce ul.products li.product .price,
					.woocommerce div.product p.price,
					.woocommerce div.product p.price,
					.woocommerce div.product span.price,
					.woocommerce-message::before,
					.woocommerce-info::before {
						color: $tpl_color;
					}
				";

				/** Background Color **/
				$custom_css .="
					.rezoto-slider .owl-nav span,
					.slide-btn,
					.rezoto-slider .owl-dots button.owl-dot.active,
					.rezoto-slider .owl-dots button.owl-dot:hover,
					.sk-folding-cube .sk-cube:before,
					.rezoto-hb-search-room .hotel-booking-search .hb-submit button,
					a.view-more-btn,
					.rezoto_hb_gallery .owl-nav span:hover,
					.gallery-slider-wrap .owl-carousel button.owl-dot:hover,
					.gallery-slider-wrap .owl-carousel button.owl-dot.active,
					.hb_single_room .hb_single_room_details .hb_single_room_tabs>li a.active::after,
					.hb_single_room #reviews #review_form_wrapper form .form-submit input[type=submit],
					article a.readmore-btn,
					.pagination-wrap a,
					button, input[type=\"button\"],
					input[type=\"reset\"],
					input[type=\"submit\"],
					.widget_calendar .calendar_wrap,
					.widget.widget_search input[type=\"submit\"],
					.right-sidebar #secondary button,
					.sroom-sidebar .hotel-booking-search button,
					.rs-reviews-posts li .room-details a.book-now-btn,
					.top-header,
					.rezoto-hotelcart > span i,
					#hotel-booking-results form .hb_button.hb_checkout, #hotel-booking-results form button.hb_add_to_cart,
					#hotel-booking-results form button[type=\"submit\"],
					.hb-booking-room-details .hb_search_room_item_detail_price_close:hover,
					.hb-select-extra-results .hb_button,
					.hotel_booking_mini_cart .hb_mini_cart_footer .hb_button,
					.hb-select-extra-results .check-wrap input:checked ~ .checkmark,
					.hb_payment_all .check-wrap input:checked ~ .checkmark,
					#hotel-booking-cart .hb_button.hb_checkout,
					#hotel-booking-cart button[type=\"button\"],
					#hotel-booking-cart button[type=\"submit\"],
					#hotel-booking-payment .hb_button.hb_checkout,
					#hotel-booking-payment button[type=\"button\"],
					#hotel-booking-payment button[type=\"submit\"],
					header.layout1 .book-now-btn,
					.rezoto-hotelcart .hotel_booking_mini_cart .hb_mini_cart_footer .hb_button,
					.ui-datepicker.ui-widget .ui-datepicker-calendar .ui-state-default:hover,
					body.blog-layout1 article.sticky .post-title::before,
					.nav-previous a,
					.nav-next a,
					.wp-block-button__link,
					.wp-block-file a.wp-block-file__button,
					.site-footer.layout1 .tnp-widget-minimal input.tnp-submit,
					.woocommerce span.onsale,
					.woocommerce #respond input#submit,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce nav.woocommerce-pagination ul li a,
					.woocommerce button.button.alt.disabled,
					.woocommerce button.button.alt.disabled:hover,
					.woocommerce #respond input#submit.alt,
					.woocommerce a.button.alt,
					.woocommerce button.button.alt,
					.woocommerce input.button.alt {
						background-color: $tpl_color;
					}
				";

				/** Border Color **/
				$custom_css .="
					.rezoto-hb-search-room .hotel-booking-search .hb-submit button,
					.gallery-slider-wrap .owl-carousel button.owl-dot,
					.right-sidebar a.tag-cloud-link:hover,
					.right-sidebar #secondary button,
					.sroom-sidebar .hotel-booking-search button,
					.hb-select-extra-results .check-wrap input:checked ~ .checkmark,
					.hb_payment_all .check-wrap input:checked ~ .checkmark,
					.is-style-outline .wp-block-button__link,
					.woocommerce-message,
					.woocommerce-info {
						border-color: $tpl_color;
					}
				";

			/** Lighter Colors **/
				/** Color **/
				$custom_css .= "
					.rezoto-slider .owl-dots button.owl-dot {
						background-color: $tpl_color_light;
					}
				";

			/** Darker Color **/

				/** Background Color **/
				$custom_css .= "
					.widget.widget_calendar table caption {
						background-color: $tpl_color_darker;
					}
				";

		/** Top Header Dynamic Options **/
			$top_header_bg = get_theme_mod( 'rezoto_top_header_bg_color', '#ec6a2a' );
			$top_header_padding = get_theme_mod( 'rezoto_top_header_padding', '12px' );
			$top_header_text_color = get_theme_mod( 'rezoto_top_header_text_color', '#ffffff' );

			if( $top_header_bg ) {
				$custom_css .= "
					.top-header {
						background-color: $top_header_bg;
					}
				";
			}

			if( $top_header_padding ) {
				$custom_css .= "
					.top-header .rcontainer {
						padding: {$top_header_padding}px 0px;
					}
				";
			}

			if( $top_header_text_color ) {
				$custom_css .= "
					.top-header,
					.top-header .rcontainer .right-block a {
						color: $top_header_text_color;
					}
				";
			}

		/** Main Header Dynamic Options **/
			$main_header_bg_color = get_theme_mod( 'rezoto_main_header_bg_color', '#ffffff' );
			$main_header_border_color = get_theme_mod( 'rezoto_main_header_border_color', '#ececec' );
			$search_icon_color_normal = get_theme_mod( 'rezoto_search_icon_color_normal', '#616161' );
			$search_icon_color_hover = get_theme_mod( 'rezoto_search_icon_color_hover', '#ec6a2a' );
			$cart_icon_color_normal = get_theme_mod( 'rezoto_cart_icon_color_normal', '#616161' );
			$cart_icon_color_hover = get_theme_mod( 'rezoto_cart_icon_color_hover', '#ec6a2a' );

			if( $main_header_bg_color ) {
				$custom_css .= "
					.main-header,
					header.layout1 .main-navigation {
						background-color: $main_header_bg_color;
					}
				";
			}

			if( $main_header_border_color ) {
				$custom_css .= "
					header.layout1 .main-navigation {
						border-color: $main_header_border_color;
					}
				";
			}

			if($search_icon_color_normal) {
				$custom_css .= "
					.rezoto-search > span {
						color: $search_icon_color_normal;
					}
				";
			}

			if($search_icon_color_hover) {
				$custom_css .= "
					.rezoto-search > span:hover {
						color: $search_icon_color_hover;
					}
				";
			}

			if($cart_icon_color_normal) {
				$custom_css .= "
					.rezoto-hotelcart > span {
						color: $cart_icon_color_normal;
					}
				";
			}

			if($cart_icon_color_hover) {
				$custom_css .= "
					.rezoto-hotelcart > span:hover {
						color: $cart_icon_color_hover;
					}
				";
			}


			/** Typography Options **/
				$typos = array(
					'rezoto_heading1' => 'h1',
					'rezoto_heading2' => 'h2',
					'rezoto_heading3' => 'h3',
					'rezoto_heading4' => 'h4',
					'rezoto_heading5' => 'h5',
					'rezoto_heading6' => 'h6',
					'rezoto_body' => 'body',
					'rezoto_menu' => 'header .main-navigation ul li a',
					'rezoto_widget_title' => '.right-sidebar #secondary .widget-title, .right-sidebar .widget_hb_widget_cart h3, .sroom-sidebar .widget h3',
				);

				foreach( $typos as $key => $selector ) {
					$fonts = get_theme_mod( $key, '' );
					if( !empty($fonts) ) {
						$custom_css .= "
							$selector {
								font-family: {$fonts['font-family']};
								font-size: {$fonts['font-size']};
								color: {$fonts['color']};
								font-weight: {$fonts['font-weight']};
								text-transform: {$fonts['text-transform']};
								line-height: {$fonts['line-height']};
							}
						";
					}
				}				
		}

		/** Typography Options **/


		wp_add_inline_style( 'rezoto-style', $custom_css );
	}
	add_action( 'wp_enqueue_scripts', 'rezoto_dynamic_styles' );

	/**
	* Convert hexdec color string to rgb(a) string 
	*/
	function rezoto_hex2rgba( $color, $opacity = false) { 
		$default = 'rgb(0,0,0)'; 

		if( empty($color) ) {
			return $default;  
		}

		if ($color[0] == '#' ) {
			$color = substr( $color, 1 );
		}

		if (strlen($color) == 6) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return $default;
		}

		$rgb = array_map('hexdec', $hex);
		if($opacity){
			if(abs($opacity) > 1)
			$opacity = 1.0;
			$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
		} else {
			$output = 'rgb('.implode(",",$rgb).')';
		}

		return $output;
	}

	/** Color Adjustments **/
	function rezoto_adjust_color($hexcolor, $percent) {
	  if ( strlen( $hexcolor ) < 6 ) {
	    $hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
	  }
	  $hexcolor = array_map('hexdec', str_split( str_pad( str_replace('#', '', $hexcolor), 6, '0' ), 2 ) );

	  foreach ($hexcolor as $i => $color) {
	    $from = $percent < 0 ? 0 : $color;
	    $to = $percent < 0 ? $color : 255;
	    $pvalue = ceil( ($to - $from) * $percent );
	    $hexcolor[$i] = str_pad( dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
	  }

	  return '#' . implode($hexcolor);
	}
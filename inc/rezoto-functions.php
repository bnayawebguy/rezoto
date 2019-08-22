<?php
	/** Rezoto Responsive Sidemenu **/
	function rezoto_responsive_sidemenu_cb() {
		?>
		<div id="rezoto-sidemenu" style="display: none;">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'		 => false
				) );
			?>
		</div>
		<?php
	}

	add_action( 'rezoto_responsive_sidemenu', 'rezoto_responsive_sidemenu_cb' );

	/** Rezoto Slider **/
	function rezoto_slider_cb() {
		if( !is_front_page() ) {
			return;
		}

		$slider_type = get_theme_mod( 'rezoto_slider_type', 'category-slider' );
		$slider_shortcode = get_theme_mod( 'rezoto_rev_shortcode', '' );
		if( $slider_type == 'revolution-slider' && $slider_shortcode ) {
			?>
			<div class="rezoto-rev-slider">
				<?php echo do_shortcode( $slider_shortcode ); ?>
			</div>
			<?php
		} else {

			$slider_category = get_theme_mod( 'rezoto_slider_category', 0 );
			$slider_layout = get_theme_mod( 'rezoto_slider_layout', 'layout1' );

			$slider_query = new WP_Query( array( 'category_name' => $slider_category ) );

			if( $slider_query->have_posts() ) {
				?>
				<div class="rezoto-slider owl-carousel <?php echo esc_attr( $slider_layout ); ?>">
					<?php
						while( $slider_query->have_posts() ) {
							$slider_query->the_post();

							$style = '';
							if( has_post_thumbnail() ) {
								$slide_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								$style = 'background-image: url("' . $slide_image[0] . '")';
							}
							?>
							<div class="slide" style="<?php echo esc_attr( $style ); ?>">
								<div class="rcontainer">
									<div class="caption-text">
										<h2 class="slide-title">
											<?php echo wp_kses( get_the_title(), array( 'span' => array()) ); ?>
										</h2>
										<div class="text"><?php the_content(); ?></div>
										<a href="<?php the_permalink(); ?>" class="slide-btn">
											<i class="lni-enter"></i><?php esc_html_e( 'Book Rooms', 'rezoto' ); ?>
										</a>
									</div>
								</div>
							</div>
							<?php
						}
					?>
				</div>
				<?php
			}
		}
	}
	add_action( 'rezoto_slider', 'rezoto_slider_cb' );

	/** Rezoto Hotel Search Rooms **/
	function rezoto_hb_search_rooms_cb() {
		if( !is_front_page() ) {
			return;
		}

		$show_search_rooms_form = get_theme_mod( 'rezoto_show_hb_search_rooms', 1 );

		if( $show_search_rooms_form && is_active_sidebar( 'hb-search-rooms' ) ) {
			?>
			<div class="rezoto-hb-search-room">
				<?php dynamic_sidebar( 'hb-search-rooms' ); ?>
			</div>
			<?php
		}
	}
	add_action( 'rezoto_hb_search_rooms', 'rezoto_hb_search_rooms_cb' );

	/** Rezoto Page Banner **/
	function rezoto_page_banner_cb() {
		if( !is_front_page() ) {
			$banner_color = get_theme_mod( 'rezoto_page_banner_bgcolor', '' );
			$banner_image = get_theme_mod( 'rezoto_page_banner_bgimage', '' );
			$display_breadcrumb = get_theme_mod( 'rezoto_display_breadcrumb', 1 );
			?>
				<div class="rezoto-banner">
					<div class="rcontainer">
						<h2 class="page-title"><?php echo wp_kses_post(rezoto_get_page_title()); ?></h2>
						<?php
							rezoto_breadcrumb_trail( array(
								'container' => '',
								'show_browse' => false,
							) );
						?>
					</div>
				</div>
			<?php
		}
	}
	add_action( 'rezoto_page_banner', 'rezoto_page_banner_cb' );

	/** Category Slug to Id **/
	function rezoto_category_slug_to_id( $cats ) {
		$cat_ids = array();

		if( empty( $cats ) ) {
			return array();
		}

		foreach( $cats as $cat => $slug ) {
			$category = get_category_by_slug( $slug );

			$cat_ids[] = $category->term_id;
		}

		return $cat_ids;
	}

	/** Exclude Categories from Blog Page **/
    function rezoto_exclude_cat_from_blog($query) {
        $exclude_cats = get_theme_mod('rezoto_blog_exclude_categories', '');
        
        $avoid_categories = rezoto_category_slug_to_id($exclude_cats);
        
        if ( $query->is_home() ) {
            $query->set('category__not_in', $avoid_categories);
        }
        
        return $query;
    }

    add_filter('pre_get_posts', 'rezoto_exclude_cat_from_blog');

    /** Include Container Wrapper only if page is not based on elementor **/
    function rezoto_page_wrapper_start_cb() {
    	wp_reset_postdata();
    	if( is_page() && class_exists('\Elementor\Plugin') ) {
    		$built_on_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_id());
    		
    		if( !$built_on_elementor ) {
    			?>
    			<div class="rcontainer">
    			<?php
    		}

    	} else {
    		?>
    		<div class="rcontainer">
    		<?php
		}
    }

    add_action( 'rezoto_page_wrapper_start', 'rezoto_page_wrapper_start_cb' );

    /** Include Container Wrapper only if page is not based on elementor **/
    function rezoto_page_wrapper_end_cb() {
    	wp_reset_postdata();
    	if( is_page() && class_exists('\Elementor\Plugin') ) {
    		$built_on_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_id());
    		
    		if( !$built_on_elementor ) {
    			?>
    				</div>
    			<?php
    		}
    	} else {
    		?>
    			</div>
    		<?php    	
    	}
    }

    add_action( 'rezoto_page_wrapper_end', 'rezoto_page_wrapper_end_cb' );

    /** Get Cart Items Count **/
    function rezoto_get_cart_items_count() {
    	if( !class_exists( 'WP_Hotel_Booking' ) ) {
    		return;
    	}

		$cart  = WP_Hotel_Booking::instance()->cart;
		$rooms = $cart->get_rooms();
		$cart_items = ($rooms) ? count($rooms) : 0;
		?>
		<i class="rezoto-cart-qty"><?php echo esc_html($cart_items); ?></i>
		<?php
	}

	/** Goto Top **/
	function rezoto_goto_top_cb() {
		$goto_top = get_theme_mod( 'rezoto_goto_top', 1 );
		if( $goto_top ) {
			?>
			<a href="" id="rezoto-goto-top"><i class="lni-angle-double-up"></i></a>
			<?php
		}
		?>
		<?php
	}

	add_action( 'rezoto_goto_top', 'rezoto_goto_top_cb' );

	/** Preloader **/
	function rezoto_preloader_cb() {
		$enable_preloader = get_theme_mod( 'rezoto_enable_preloader', 1 );

		if( $enable_preloader ) :
		?>
		<div id="rezoto-preloader">
			<div class="sk-folding-cube">
			  <div class="sk-cube1 sk-cube"></div>
			  <div class="sk-cube2 sk-cube"></div>
			  <div class="sk-cube4 sk-cube"></div>
			  <div class="sk-cube3 sk-cube"></div>
			</div>
		</div>
		<?php
		endif;
	}

	add_action( 'rezoto_preloader', 'rezoto_preloader_cb' );

	/** Add Dynamic Fonts **/
	function rezoto_dynamic_google_fonts( $google_fonts ) {

		$fonts = array();
		$font_weights = array('400', '500', '600', '700', '800', '900');

		/** Heading Font **/
		$fonts[] = get_theme_mod( 'rezoto_heading', '' );
		/** Body Font **/
		$fonts[] = get_theme_mod( 'rezoto_body', '' );

		/** Body Font **/
		$fonts[] = get_theme_mod( 'rezoto_widget_title', '' );

		foreach( $fonts as $font ) {
			if( !empty( $font ) ) {
				$google_fonts[$font['font-family']] = array(
					'weights' => $font_weights,
				);
			}
		}

		return $google_fonts;
	}

	add_filter( 'rezoto_google_fonts', 'rezoto_dynamic_google_fonts' );
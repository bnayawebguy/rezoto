<?php
	/** Category List **/
	function rezoto_category_list( $for ) {
		$categories = get_categories();
		$category_list = array();

		if( $for == 'dropdown' ) {
			$category_list[0] = esc_html__( 'Select Category', 'rezoto' );
		}

		foreach( $categories as $category ) {
			$category_list[$category->slug] = $category->name;
		}

		return $category_list;
	}

	/** Text Transform **/
	function rezoto_text_decoration_list() {
		return array(
			'none' => esc_html__( 'None', 'rezoto' ),
			'overline' => esc_html__( 'Overline', 'rezoto' ),
			'line-through' => esc_html__( 'Line Through', 'rezoto' ),
			'underline' => esc_html__( 'Underline', 'rezoto' ),
		);
	}
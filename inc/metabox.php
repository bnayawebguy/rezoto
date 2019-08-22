<?php
	/** Rezoto Metaboxes **/
	add_action('add_meta_boxes', 'rezoto_add_metabox' );
	if( !function_exists( 'rezoto_add_metabox' ) ) {
		function rezoto_add_metabox() {
			add_meta_box(
				'rezoto_lite_sidebar',
				esc_html__( 'Sidebar Layout', 'rezoto' ),
				'rezoto_sidebar_layout',
				'page',
				'normal',
				'high'
			);
		}
	}

	function rezoto_sidebar_layout(){
        global $post;
        $rezoto_page_layouts = array(
    	    'no-sidebar' => array(
    	        'value' => 'no-sidebar',
    	        'label' => esc_html__( 'No sidebar', 'rezoto' ),
    	        'thumbnail' => get_template_directory_uri() . '/assets/images/no-sidebar.png',
    	    ),
    	    'right-sidebar' => array(
    	        'value'     => 'right-sidebar',
    	        'label'     => esc_html__( 'Right Sidebar', 'rezoto' ),
    	        'thumbnail' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
    	    ), 
    	);
        wp_nonce_field( basename( __FILE__ ), 'rezoto_page_layout_nonce' );
    
        $rezoto_page_layout = get_post_meta( $post->ID, 'rezoto_page_layout', true );
    	$rezoto_page_layout = $rezoto_page_layout ? $rezoto_page_layout : 'no-sidebar';
        ?>
        
        <div class="page-meta-layouts">
        	<p><?php esc_html_e( 'Choose a Sidebar Layout for the page', 'rezoto' ); ?></p>
            <?php foreach( $rezoto_page_layouts as $layout ) : ?>
            	<?php
            		$span_class = '';
            		$span_class = ( $rezoto_page_layout == $layout['value'] ) ? 'active' : '';
            	?>
            	<span data-layout="<?php echo esc_attr($layout['value']); ?>" class="<?php echo esc_attr($span_class); ?>">
            		<img src="<?php echo esc_url($layout['thumbnail']); ?>">
            	</span>
            <?php endforeach; ?>
    
            <input type="hidden" id="rezoto_page_layout" name="rezoto_page_layout" value="<?php echo esc_attr($rezoto_page_layout); ?>">
        </div>
    	<?php
    }

    function rezoto_save_sidebar_layout( $post_id ) {
	    global $post; 
	    $sidebars = array('no-sidebar', 'right-sidebar');
	    // Verify the nonce before proceeding.
	    if ( !isset( $_POST[ 'rezoto_page_layout_nonce' ] ) || !wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ 'rezoto_page_layout_nonce' ] ) ), basename( __FILE__ ) ) ) {
	        return;
	    }

	    // Stop WP from clearing custom fields on autosave
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE){
	        return;
	    }

	    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type']) {  
	        if (!current_user_can( 'edit_page', $post_id ) )  
	        return $post_id;  
	    }
	    $rezoto_page_layout = isset( $_POST['rezoto_page_layout'] ) ? sanitize_text_field( wp_unslash($_POST['rezoto_page_layout']) ) : 'no-sidebar';

	    if( in_array( $rezoto_page_layout, $sidebars) ) {
        	update_post_meta($post_id, 'rezoto_page_layout', $rezoto_page_layout);  
	    }
	}
	add_action('save_post', 'rezoto_save_sidebar_layout' );
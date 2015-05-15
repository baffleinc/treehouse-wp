<?php

    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function th_scripts() {


		wp_register_style( 'style', get_template_directory_uri().'/assets/css/app.css', array(), time() );
		wp_register_style( 'fancybox', get_template_directory_uri().'/assets/css/lib/fancybox.css', array(), time() );
		wp_enqueue_style( 'style' );
		wp_enqueue_style( 'fancybox' );

		wp_dequeue_script( 'jquery' );
		
		wp_enqueue_script( 'jQuery', get_template_directory_uri().'/assets/js/jquery-2.1.3.js', array(), time(), false );
		wp_enqueue_script( 'vendor.js', get_template_directory_uri().'/assets/js/angular.bower.js', array(), time(), true );
		wp_enqueue_script( 'fancybox.js', get_template_directory_uri().'/assets/js/fancybox.js', array('jQuery'), time(), true );
		wp_enqueue_script( 'fancybox.media.js', get_template_directory_uri().'/assets/js/fancybox.media.js', array('jQuery'), time(), true );
		wp_enqueue_script( 'isotope.js', get_template_directory_uri().'/assets/js/isotope.js', array(), time(), true );
		wp_enqueue_script( 'slick.js', '//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js', array(), time(), true );
		wp_enqueue_script( 'app.js', get_template_directory_uri().'/assets/js/app.js', array('vendor.js'), time(), true );

		
	}

	add_action( 'wp_enqueue_scripts', 'th_scripts' );

	/**
	 *
	 * Register Nav Menus
	 *
	 */

	register_nav_menus( array(
		'primary' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
	) );

	add_theme_support( 'post-thumbnails' );


	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Accounts',
			'menu_title'	=> 'Social',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}

	 add_image_size( 'hero-image', 1440 );


	 /**
	 * Create a taxonomy
	 *
	 * @uses  Inserts new taxonomy object into the list
	 * @uses  Adds query vars
	 *
	 * @param string  Name of taxonomy object
	 * @param array|string  Name of the object type for the taxonomy object.
	 * @param array|string  Taxonomy arguments
	 * @return null|WP_Error WP_Error if errors, otherwise null.
	 */
	function portfolio_category() {
	
		$labels = array(
			'name'					=> _x( 'Portfolio Categories', 'Taxonomy plural name', 'th' ),
			'singular_name'			=> _x( 'Portfolio Category', 'Taxonomy singular name', 'th' ),
			'search_items'			=> __( 'Search Portfolio Categories', 'th' ),
			'popular_items'			=> __( 'Popular Portfolio Categories', 'th' ),
			'all_items'				=> __( 'All Portfolio Categories', 'th' ),
			'parent_item'			=> __( 'Parent Portfolio Category', 'th' ),
			'parent_item_colon'		=> __( 'Parent Portfolio Category', 'th' ),
			'edit_item'				=> __( 'Edit Portfolio Category', 'th' ),
			'update_item'			=> __( 'Update Portfolio Category', 'th' ),
			'add_new_item'			=> __( 'Add New Portfolio Category', 'th' ),
			'new_item_name'			=> __( 'New Portfolio Category Name', 'th' ),
			'add_or_remove_items'	=> __( 'Add or remove Portfolio Categories', 'th' ),
			'choose_from_most_used'	=> __( 'Choose from most used th', 'th' ),
			'menu_name'				=> __( 'Portfolio Category', 'th' ),
		);
	
		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => false,
			'hierarchical'      => true,
			'show_tagcloud'     => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => true,
			'query_var'         => true,
			'capabilities'      => array(),
		);
	
		register_taxonomy( 'portfolio-category', array( 'portfolio-item' ), $args );
	}
	
	add_action( 'init', 'portfolio_category' );


	/**
	* Registers a new post type
	* @uses $wp_post_types Inserts new post type object into the list
	*
	* @param string  Post type key, must not exceed 20 characters
	* @param array|string  See optional args description above.
	* @return object|WP_Error the registered post type object, or an error object
	*/
	function th_register_portfolio_item() {
	
		$labels = array(
			'name'                => __( 'Portfolio Items', 'th' ),
			'singular_name'       => __( 'Portfolio Item', 'th' ),
			'add_new'             => _x( 'Add New Item', 'th', 'th' ),
			'add_new_item'        => __( 'Add New Portfolio Item', 'th' ),
			'edit_item'           => __( 'Edit Portfolio Item', 'th' ),
			'new_item'            => __( 'New Portfolio Item', 'th' ),
			'view_item'           => __( 'View Portfolio Item', 'th' ),
			'search_items'        => __( 'Search Portfolio Items', 'th' ),
			'not_found'           => __( 'No Portfolio Items found', 'th' ),
			'not_found_in_trash'  => __( 'No Portfolio Items found in Trash', 'th' ),
			'parent_item_colon'   => __( 'Parent Portfolio Item:', 'th' ),
			'menu_name'           => __( 'Portfolio Items', 'th' ),
		);
	
		$args = array(
			'labels'                   => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array('portfolio_category'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title'
				)
		);
	
		register_post_type( 'portfolio-item', $args );
	}
	
	add_action( 'init', 'th_register_portfolio_item' );


	
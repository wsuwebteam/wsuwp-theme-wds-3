<?php namespace WSUWP\Theme\WDS;


class Template {


	protected static $context            = array();
	protected static $template_post_type = 'wsu_template';
	protected static $template_prefix    = array( 'template-', 'article', 'wsutheme-' );
	protected static $option_key         = 'wsu_templates';


	public static function init() {

		add_action( 'init', array( __CLASS__, 'register_post_type' ) );

		add_action( 'save_post_' . self::$template_post_type, array( __CLASS__, 'save_template' ), 20, 2 );

		add_action( 'wp_trash_post', array( __CLASS__, 'check_remove_template' ) );

		add_filter(
			'previous_posts_link_attributes',
			function() {
				return 'class="wsu-pagination__previous wsu-button wsu-button--style-outline" aria-label="Go to Previous Page"';
			}
		);
		
		add_filter(
			'next_posts_link_attributes',
			function() {
				return 'class="wsu-pagination__next wsu-button wsu-button--style-outline"  aria-label="Go to Next Page"';
			}
		);

	}


	/**
	 * Used instead of get_template_part(...) to get and render templates that include block markup.
	 *
	 * This method is generally a mirror of get_template_part(...) but includes additional markup to render blocks. The
	 * render block functionality can be bypassed by setting the $do_blocks to false. Use $do_blocks = false if you are including
	 * a block template in a sub-template (e.g. template-header/template-footer) that opens in one php file and closes in another.
	 * Templates can accept and use args passed though the $args array (e.g template-header ) similar to get_template_part.
	 *
	 * @since 1.2.3
	 *
	 * @param string $slug slug path to file similar to get_template_part.
	 * @param string $name Optional. additional name appended to file similar to get_template_part.
	 * @param array $args Optional. array of key/value pairs passed to the template file.
	 * @param bool $do_blocks Optional. render blocks before echoing content.
	 * 
	 * @return string  Html of rendered blocks or block markup if $do_blocks is set to false.
	 */
	public static function get_wsu_block_template( $slug, $name = '', $args = array(), $do_blocks = true ) {

		do_action( "get_template_part_{$slug}", $slug, $name, $args );

		$templates = array();
		$name      = (string) $name;

		if ( '' !== $name ) {

			$templates[] = "{$slug}-{$name}.php";

		}

		$templates[] = "{$slug}.php";

		$template_path = locate_template( $templates, false, false, $args );

		if ( $template_path ) {

			ob_start();

			include $template_path;

			$block_html = ob_get_clean();

			if ( ! $do_blocks ) {

				echo $block_html;

			} else {

				echo do_blocks( $block_html );

			}

		} else {

			return false;
		}

	}


	public static function get_context( $return_array = false ) {

		if ( empty( self::$context ) ) {

			if ( is_front_page() ) {

				self::$context[] = 'front-page';
	
			} elseif ( is_home() ) {
	
				self::$context[] = 'home';
	
			} elseif ( is_singular() ) {
	
				self::$context[] = get_post_type();
	
			} elseif ( is_category() ) {
	
				self::$context[] = 'category';

				$term = get_queried_object();

				self::$context[] = $term->slug;
	
			} elseif ( is_tag() ) {
	
				self::$context[] = 'tag';

				$term = get_queried_object();

				self::$context[] = $term->slug;
	
			} elseif ( is_tax() ) {

				$term = get_queried_object();

				self::$context[] = $term->taxonomy;

				self::$context[] = $term->slug;

			} elseif ( is_post_type_archive() ) {

				$post_type = get_queried_object();

				self::$context[] = 'archive-' . $post_type->name;

			}
		}

		if ( $return_array ) {

			return self::$context;

		} else {

			return ( is_array( self::$context ) && isset( self::$context[0] ) ) ? self::$context[0] : '';

		}

	}


	public static function register_post_type() {

		$labels = array(
			'name'                  =>  'WSU Templates', 
			'singular_name'         =>  'WSU Template',
			'menu_name'             =>  'WSU Templates',
			'name_admin_bar'        =>  'WSU Template',
			'add_new'               =>  'Add New',
			'add_new_item'          =>  'Add New WSU Template',
			'new_item'              =>  'New WSU Template',
			'edit_item'             =>  'Edit WSU Template',
			'view_item'             =>  'View WSU Template',
			'all_items'             =>  'WSU Templates',
			'search_items'          =>  'Search WSU Templates',
			'parent_item_colon'     =>  'Parent WSU Templates:',
			'not_found'             =>  'No templates found.',
			'not_found_in_trash'    =>  'No templates found in Trash.',
			'featured_image'        =>  'WSU Template',
			'set_featured_image'    =>  'Set cover image',
			'remove_featured_image' =>  'Remove cover image',
			'use_featured_image'    =>  'Use as cover image',
			'archives'              =>  'WSU Template archives',
			'insert_into_item'      =>  'Insert into template',
			'uploaded_to_this_item' =>  'Uploaded to this template',
			'filter_items_list'     =>  'Filter templates list',
			'items_list_navigation' =>  'WSU Templates list navigation',
			'items_list'            =>  'WSU Templates list',
		);
	
		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => ( Theme::get_wsu_option( 'theme', 'allow_edit_templates', false ) ) ? 'themes.php' : false,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'wsu-template' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor' ),
		);
	
		register_post_type( self::$template_post_type, $args );

	}

	protected static function remove_template( $post_id ) {

		if ( $post_id ) {

			$post = get_post( $post_id  );

			if ( $post ) {

				// bail out if this is not an event item
				if ( self::$template_post_type !== $post->post_type ) {
					return;
				}

				foreach ( self::$template_prefix as $template_key ) {

					if ( stripos( $post->post_name, $template_key ) !== false ) {
		
						self::set_template_option( $post->post_name, $post_id, true );
		
					}
				}
			}
		}
	}


	public static function check_remove_template( $post_id ) {

		// Verify if is trashing multiple posts
		if ( isset( $_GET['post'] ) && is_array( $_GET['post'] ) ) {

			foreach ( $_GET['post'] as $post_id ) {

				self::remove_template( intval( $post_id ) );

			}
		} else {

			self::remove_template( intval( $post_id ) );

		}
	}


	public static function save_template( $post_id, $post ) {

		// bail out if this is an autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// bail out if this is not an event item
		if ( self::$template_post_type !== $post->post_type ) {
			return;
		}

		foreach ( self::$template_prefix as $template_key ) {

			if ( stripos(  $post->post_name, $template_key ) !== false ) {

				self::set_template_option( $post->post_name, $post_id );

			}
		}
	}


	protected static function set_template_option( $template_name, $template_id, $remove = false ) {

		$wsu_templates = get_option( self::$option_key, array() );

		if ( $remove ) {

			if ( isset( $wsu_templates[ sanitize_text_field( $template_name ) ] ) ) {

				unset( $wsu_templates[ sanitize_text_field( $template_name ) ] );

			}
		} else {

			$wsu_templates[ sanitize_text_field( $template_name ) ] = intval( $template_id );

		}

		update_option( self::$option_key, $wsu_templates );

	}


	public static function get_template_option( $templates ) {

		$wsu_templates = get_option( self::$option_key, array() );

		foreach ( $templates as $template ) {

			if ( array_key_exists( $template, $wsu_templates ) ) {

				return $wsu_templates[ $template ];

			}
		}

		return false;

	}


}

Template::init();

<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public static function init() {

        add_filter( 'document_title_parts', array( __CLASS__, 'filter_document_title_parts' ), 9999 );

		add_filter( 'document_title_separator', array( __CLASS__, 'filter_title_separator' ), 9999  );

        add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

		add_filter( 'the_posts', array( __CLASS__, 'tribe_past_reverse_chronological' ), 100 );

		add_filter( 'get_comment_author_link', array( __CLASS__, 'comments_remove_comment_author_link' ), 10, 3 );

		add_filter( 'template_include', array( __CLASS__, 'add_media_template' ), 10 );

		add_action( 'init' , array( __CLASS__, 'add_categories_for_attachments' ) );

		add_action( 'init' , array( __CLASS__, 'add_tags_for_attachments' ) );

		// wp_robots was not added until 5.7.
		if ( version_compare( get_bloginfo( 'version' ), '5.7', '>=' ) ) {

			add_filter( 'wp_robots', array( __CLASS__, 'filter_robots' ), 9999 );

		} else {

			add_action( 'wp_head', array( __CLASS__, 'legacy_robots' ), 1 );

		}

	}


	public static function filter_robots( $robots ) {

		if ( is_search() ) {

			if ( array_key_exists( 'follow', $robots ) ) {

				$robots['follow'] = false;

			}

			$robots['nofollow'] = true;

		}

		return $robots;

	}

	public static function legacy_robots( $robots ) {

		if ( is_search() ) {

			echo "<meta name='robots' content='noindex, max-image-preview:large, nofollow' />";

		}

	}


	public static function comments_remove_comment_author_link( $return, $author, $comment_ID ) {

		return $author;

	}


    public static function filter_document_title_parts( $title_parts ) {

		if ( is_array( $title_parts ) ) {

			if ( is_search() ) {

				$title_parts['title'] = 'Search';

			}

			$title_parts['network'] = ' Washington State University';

			if ( ! empty( $title_parts['tagline'] ) ) {

				unset( $title_parts['tagline'] );

			}
		}

		return $title_parts;

	}


    public static function filter_title_separator( $sep ) {

		return '|';

	}


	// Changes past event views to reverse chronological order
	public static function tribe_past_reverse_chronological( $post_object ) {

		if ( function_exists( 'tribe_is_past' ) ) {

			$past_ajax = ( defined( 'DOING_AJAX' ) && DOING_AJAX && $_REQUEST['tribe_event_display'] === 'past') ? true : false;

			if ( tribe_is_past() || $past_ajax ) {

				$post_object = array_reverse( $post_object );

			}
		}

		return $post_object;
	}


	public static function add_media_template( $template ) {

		if ( strpos( $_SERVER['REQUEST_URI'], 'wp-gallery-archive' ) ) {

			$template = Theme::get( 'dir' ) . '/gallery-archive.php';

		}

		return $template;

	}


	// add categories for attachments
	public static function add_categories_for_attachments() {

		register_taxonomy_for_object_type( 'category', 'attachment' );

	}
	

	// add tags for attachments
	public static function add_tags_for_attachments() {

		register_taxonomy_for_object_type( 'post_tag', 'attachment' );

	}
	



}

Theme_Config::init();

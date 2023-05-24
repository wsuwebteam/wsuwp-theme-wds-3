<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public static function init() {

        add_filter( 'document_title_parts', array( __CLASS__, 'filter_document_title_parts' ), 9999 );

		add_filter( 'document_title_separator', array( __CLASS__, 'filter_title_separator' ), 9999  );

        add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

		add_filter( 'the_posts', array( __CLASS__, 'tribe_past_reverse_chronological' ), 100 );

		add_filter( 'get_comment_author_link', array( __CLASS__, 'comments_remove_comment_author_link' ), 10, 3 );

	}


	public static function comments_remove_comment_author_link( $return, $author, $comment_ID ) {

		return $author;

	}


    public static function filter_document_title_parts( $title_parts ) {

		if ( is_array( $title_parts ) ) {

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

}

Theme_Config::init();

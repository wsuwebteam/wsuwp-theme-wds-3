<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public static function init() {

        add_filter( 'document_title_parts', array( __CLASS__, 'filter_document_title_parts' ), 9999 );

		add_filter( 'document_title_separator', array( __CLASS__, 'filter_title_separator' ), 9999  );

        add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

		// Change List View to Past Event Reverse Chronological Order 
		add_filter( 'tribe_events_views_v2_view_list_template_vars', array( __CLASS__, 'tribe_past_reverse_chronological_v2' ), 100 );

		// Change Photo View to Past Event Reverse Chronological Order
		add_filter( 'tribe_events_views_v2_view_photo_template_vars', array( __CLASS__, 'tribe_past_reverse_chronological_v2' ), 100 );

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


	/**
	 * Changes Past Event Reverse Chronological Order
	 *
	 * @param array $template_vars An array of variables used to display the current view.
	 *
	 * @return array Same as above. 
	 */
	public static function tribe_past_reverse_chronological_v2( $template_vars ) {
	
		if ( ! empty( $template_vars['is_past'] ) ) {
		$template_vars['events'] = array_reverse( $template_vars['events'] );
		}
	
		return $template_vars;
	}

}

Theme_Config::init();

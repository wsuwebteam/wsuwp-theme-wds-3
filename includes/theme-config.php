<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public static function init() {

        add_filter( 'document_title_parts', array( __CLASS__, 'filter_document_title_parts' ), 9999 );

		add_filter( 'document_title_separator', array( __CLASS__, 'filter_title_separator' ), 9999  );

        add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

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

}

Theme_Config::init();

<?php namespace WSUWP\Theme\WDS;


class Theme_Options {

	public static function get_option( $option, $default ) {

		return $default;

	}

	public static function get_wsu_option( $option_group, $option_key, $default = '' ) {

		$wsu_options = get_option( 'wsuwp', array() );

		if ( ! empty( $wsu_options[ $option_group ] ) && isset( $wsu_options[ $option_group ][ $option_key ] ) ) {

			return $wsu_options[ $option_group ][ $option_key ];

		} else {

			return $default;

		}

	}


	public static function get_template_option( $template, $option_key, $block_attr = '', $default_value = '' ) {

		$set_option = self::get_wsu_option( $template, $option_key, $block_attr );

		return ( ! empty( $set_option ) && 'default' !== $set_option ) ? $set_option : $default_value;

	}

}

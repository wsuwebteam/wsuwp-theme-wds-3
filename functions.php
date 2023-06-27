<?php namespace WSUWP\Theme\WDS;


class Theme {


	protected static $version = '1.2.1';


	public static function get( $property ) {

		switch ( $property ) {
			case 'version':
				return self::$version;
			case 'dir':
				return __DIR__;
			default:
				return '';
		}

	}


	public static function init() {

		define( 'ISWSUWEBDESIGNSYSTEM', true );

		define( 'ISWDS', true );

		define( 'WDSTHEMEVERSION', 3 );

		require_once __DIR__ . '/includes/supports.php';
		require_once __DIR__ . '/includes/theme-config.php';
		require_once __DIR__ . '/includes/theme-options.php';
		require_once __DIR__ . '/includes/theme-blocks.php';
		require_once __DIR__ . '/includes/scripts.php';
		require_once __DIR__ . '/includes/menus.php';
		require_once __DIR__ . '/includes/widgets.php';
		require_once __DIR__ . '/includes/body-classes.php';
		require_once __DIR__ . '/includes/template.php';

	}


	public static function get_option( $option, $default = '' ) {

		return Theme_Options::get_option( $option, $default );

	}

	public static function get_wsu_option( $option_group, $option_key, $default = '' ) {

		return Theme_Options::get_wsu_option( $option_group, $option_key, $default );

	}

	public static function get_sidebars( $format = 'select' ) {

		return Widgets::get_sidebars( $format );

	}

	// Legacy
	public static function get_template_option( $template, $option_key, $block_attr = '', $default_value = '' ) {

		return Theme_Options::get_template_option( $template, $option_key, $block_attr, $default_value );

	}

	public static function get_template_setting( $template, $option_key, $default = '' ) {

		if ( is_array( $template ) ) {

			$template = ( ! empty( $template['template'] ) ) ? $template['template'] : 'page';

		}

		return Theme_Options::get_wsu_option( 'template_' . $template, $option_key, $default );

	}


	public static function get_wsu_block_template( $slug, $name = '', $args = array() ) {

		Template::get_wsu_block_template( $slug, $name, $args );

	}

	public static function get_context( $return_array = false ) {

		return Template::get_context( $return_array );

	}

	public static function get_template( $args = array() ) {

		return ( is_array( $args ) && ! empty( $args['template'] ) ) ? $args['template'] : 'page';

	}


}

Theme::init();

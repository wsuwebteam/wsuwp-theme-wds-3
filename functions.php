<?php namespace WSUWP\Theme\WDS;


class Theme {


	protected static $version = '3.0.0';


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
		require_once __DIR__ . '/includes/theme-options.php';
		require_once __DIR__ . '/includes/theme-blocks.php';
		require_once __DIR__ . '/includes/scripts.php';
		require_once __DIR__ . '/includes/menus.php';
		require_once __DIR__ . '/includes/widgets.php';
		require_once __DIR__ . '/includes/body-classes.php';

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

	public static function get_template_option( $template, $option_key, $block_attr = '', $default_value = '' ) {

		return Theme_Options::get_template_option( $template, $option_key, $block_attr, $default_value );

	}

	public static function render_block( $block, $args = array() ) {

		return Theme_Blocks::render( $block, $args );

	}


}

Theme::init();
<?php namespace WSUWP\Theme\WDS;


class Theme_Block {

	protected static $option_group = false;
	protected static $default_args = array();
	protected static $block_slug   = false;


	public static function render_block( $args = array(), $content='' ) {

		$block_html = apply_filters( 'wsu_filter_render_theme_block', '', static::$block_slug, $args, $content );

		if ( empty( $block_html ) && false !== $block_html ) {

			ob_start();

			static::render( static::parse_defaults( $args ) );

			$block_html = ob_get_clean();

		}

		echo apply_filters( 'wsu_filter_output_theme_block', $block_html, static::$block_slug, $args, $content );

	}


	protected static function parse_defaults( $args ) {

		$block_args = array();

		foreach ( static::$default_args as $arg_key => $default_value ) {

			if ( isset( $args[ $arg_key ] ) ) {

				$block_args[ $arg_key ] = $args[ $arg_key ];

			} else {

				$block_args[ $arg_key ] = $default_value;

			}

		}

		return $block_args;

	}

	protected static function should_hide( $args ) {

		return ( 'hide' === $args['displayBlock'] ) ? true : false;
	
	}


}

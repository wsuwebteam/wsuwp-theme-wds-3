<?php namespace WSUWP\Theme\WDS;


class Block {

	protected static $option_group = false;
	protected static $default_args = array();
	protected static $block_slug   = false;


	public static function render_block( $args = array(), $content = '' ) {

		static::parse_defaults( $args );

		if ( empty( $args['context'] ) ) {

			$args['context'] = Theme::get_context();

		}

		if ( method_exists( static::class, 'set_args' ) ) {


			static::set_args( $args, $content );

		}

		if ( method_exists( static::class, 'set_content' ) && 'hide' !== $args['displayBlock'] ) {


			static::set_content( $content, $args );

		}

		ob_start();

		static::render( $args, $content );

		$block_html = ob_get_clean();

		return apply_filters( 'wsu_filter_output_theme_block', $block_html, static::$block_slug, $args, $content );

	}


	protected static function parse_defaults( &$args ) {

		foreach ( static::$default_args as $arg_key => $default_value ) {

			if ( ! isset( $args[ $arg_key ] ) ) {

				$args[ $arg_key ] = $default_value;

			}
		}

	}

	protected static function should_hide( $args, $content = 'notSet' ) {

		if ( 'notSet' === $content ) {

			return ( 'hide' === $args['displayBlock'] ) ? true : false;

		} else {

			return ( 'hide' === $args['displayBlock'] || empty( $content ) ) ? true : false;

		}

	}

	protected static function get_template_path( $slug, $name = '', $path = '' ) {

		if ( '' === $path ) {

			$block_folder = static::$block_slug;

			$path = "theme-blocks/wsutheme-{$block_folder}/";

		}

		$templates = array();
		$name      = (string) $name;

		if ( '' !== $name ) {

			$templates[] = "{$path}{$slug}-{$name}.php";

		}

		$templates[] = "{$path}{$slug}.php";

		return locate_template( $templates, false, false, $args );

	}


	protected static function get_theme_option( $key, $args, $default, $ignore_empty = false ) {

		$key = ( ! empty( $args['location'] ) ) ? $key . ucfirst( $args['location'] ) : $key;

		$template = 'template_' . str_replace( '-', '_', $args['context'] );

		$value = Theme::get_wsu_option( $template, $key, $default );

		return ( $ignore_empty && empty( $value ) ) ? $default : $value;

	}

}

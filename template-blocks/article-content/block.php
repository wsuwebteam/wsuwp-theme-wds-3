<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Content extends Theme_Block {

	protected static $block_slug    = 'article-content';
	protected static $option_group  = 'article_content';
	protected static $default_args = array(
		'displayBlock'   => '',
		'className'      => '',
		'content'        => '',
		'is_excerpt'     => '',
 	);


	public static function init() {
	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		$args['content'] = ( ! empty( $args['content'] ) ) ? $args['content'] : self::get_content( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	protected static function get_content( $args ) {

		if ( in_the_loop() ) {

			ob_start();

			if ( ! empty( $args['is_excerpt'] ) ) {

				the_excerpt();

			} else {

				the_content();

			}

			return ob_get_clean();

		}

	}


}

Block_Article_Content::init();

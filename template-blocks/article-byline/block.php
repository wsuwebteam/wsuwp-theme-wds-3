<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Byline extends Theme_Block {

	protected static $block_slug    = 'article-byline';
	protected static $option_group  = 'article_byline';
	protected static $default_args = array(
		'displayBlock'   => '',
		'className'      => '',
		'author'         => '',
 	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {


		self::set_author( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	protected static function should_hide( $args ) {

		return ( empty( $args['author'] ) ) ? true : parent::should_hide( $args );
	
	}


	protected static function set_author( &$args ) {

		if ( empty( $args['author'] ) && in_the_loop() ) {

			$args['author'] = get_the_author();

		}

	}


}

Block_Article_Byline::init();

<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Share extends Theme_Block {

	protected static $block_slug    = 'article-share';
	protected static $option_group  = 'article-share';
	protected static $default_args = array(
		'displayBlock'           => '',
		'className'      => '',
		'link'           => '',
		'title'          => '',

	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		self::set_args( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	protected static function should_hide( $args ) {

		return ( empty( $args['title'] ) ) ? true : parent::should_hide( $args );
	
	}


	protected static function set_args( &$args ) {

		if ( in_the_loop() ) {

			$args['link']  = get_the_permalink();
			$args['title'] = get_the_title();

		}

	}


}

Block_Article_Share::init();
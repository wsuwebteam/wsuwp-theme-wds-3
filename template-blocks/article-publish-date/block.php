<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Publish_Date extends Theme_Block {

	protected static $block_slug    = 'article-publish-date';
	protected static $option_group  = 'article_publish_date';
	protected static $default_args = array(
		'displayBlock' => '',
		'className'    => '',
		'date'         => '',
 	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		self::set_date( $args );


		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	public static function customize( $wp_customize ) {

	}

	protected static function should_hide( $args ) {

		return ( empty( $args['date'] ) ) ? true : parent::should_hide( $args );
	
	}


	protected static function set_date( &$args ) {

		if ( empty( $args['date'] ) && in_the_loop() ) {

			$args['date'] = get_the_date();

		}

	}


}

Block_Article_Publish_Date::init();

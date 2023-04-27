<?php namespace WSUWP\Theme\WDS; 


class Block_Navigation_Audience extends Theme_Block {

	protected static $block_slug    = 'navigation-audience';
	protected static $option_group  = 'navigation_audience';
	protected static $default_args = array(
		'displayBlock'   => true,
		'className'      => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default.php';

		}

	}


	protected static function should_hide( $args ) {

		if ( ! has_nav_menu( 'audience' )  ) {

			return true;

		}

		return parent::should_hide( $args );

	}


}

Block_Navigation_Audience::init();

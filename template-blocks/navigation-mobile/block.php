<?php namespace WSUWP\Theme\WDS; 


class Block_Navigation_Mobile extends Theme_Block {

	protected static $block_slug    = 'navigation-mobile';
	protected static $option_group  = 'navigation_mobile';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {


			include __DIR__ . '/templates/default-v3.php';

		}

	}


	protected static function should_hide( $args ) {

		if ( ! has_nav_menu( 'site' ) && ! has_nav_menu( 'horizontal' )  ) {

			return true;

		}

		return parent::should_hide( $args );

	}


}

Block_Navigation_Mobile::init();
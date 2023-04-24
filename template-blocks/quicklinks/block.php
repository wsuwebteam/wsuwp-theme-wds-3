<?php namespace WSUWP\Theme\WDS; 


class Block_Quicklinks extends Theme_Block {

	protected static $block_slug    = 'quicklinks';
	protected static $option_group  = 'quicklinks';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'        => '',
		'primaryActionText' => 'Give',
		'primaryActionLink' => 'https://foundation.wsu.edu/give/',
		'showSearchOptions' => 'show',
		'searchContext'     => 'site',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {


		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	protected static function parse_args( &$args ) {

		if ( empty( $args['primaryActionLink'] ) ) {

			$args['primaryActionLink'] = self::$default_args['primaryActionLink'];

		}

		if ( empty( $args['primaryActionText'] ) ) {

			$args['primaryActionText'] = self::$default_args['primaryActionText'];

		}

	}

}

Block_Quicklinks::init();

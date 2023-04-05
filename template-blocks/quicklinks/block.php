<?php namespace WSUWP\Theme\WDS; 


class Block_Quicklinks extends Theme_Block {

	protected static $block_slug    = 'quicklinks';
	protected static $option_group  = 'quicklinks';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
		'give_link'      => 'https://foundation.wsu.edu/give/',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}

}

Block_Quicklinks::init();

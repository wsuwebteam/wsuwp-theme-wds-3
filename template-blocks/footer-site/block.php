<?php namespace WSUWP\Theme\WDS; 


class Block_Footer_Site extends Theme_Block {

	protected static $block_slug    = 'footer-site';
	protected static $option_group  = 'footer-site';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
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

Block_Footer_Site::init();

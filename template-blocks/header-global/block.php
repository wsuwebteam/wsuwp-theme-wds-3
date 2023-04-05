<?php namespace WSUWP\Theme\WDS; 


class Block_Header_Global extends Theme_Block {

	protected static $block_slug    = 'header-global';
	protected static $option_group  = 'header_global';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
		'parent_name'    => '',
		'parent_mobile'  => '',
		'parent_url'     => '',
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

Block_Header_Global::init();
<?php namespace WSUWP\Theme\WDS; 


class Block_Breadcrumbs extends Theme_Block {

	protected static $block_slug    = 'breadcrumbs';
	protected static $option_group  = 'breadcrumbs';
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

Block_Breadcrumbs::init();
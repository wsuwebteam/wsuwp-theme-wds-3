<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Mobile extends Block {

	protected static $block_slug    = 'navigation-mobile';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


}

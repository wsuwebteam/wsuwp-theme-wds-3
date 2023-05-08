<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Header extends Block {

	protected static $block_slug    = 'site-header';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'menuDepth'    => 3,
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


}

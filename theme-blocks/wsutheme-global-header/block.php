<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Global_header extends Block {

	protected static $block_slug    = 'global-header';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
        'parentName'   => '',
        'parentLink'   => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


}

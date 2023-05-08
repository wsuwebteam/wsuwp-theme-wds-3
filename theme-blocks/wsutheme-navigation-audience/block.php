<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Audience extends Block {

	protected static $block_slug    = 'navigation-audience';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) && has_nav_menu( 'audience' ) ) {

			include __DIR__ . '/template.php';

		}

	}


}

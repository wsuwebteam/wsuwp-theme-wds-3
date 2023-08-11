<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Audience extends Block {

	protected static $block_slug    = 'navigation-audience';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => 'wsu-navigation-audience',
		'colorScheme'  => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) && has_nav_menu( 'audience' ) ) {

			include __DIR__ . '/template.php';

		}

	}

	protected static function set_args( &$args ) {

		$args['colorScheme']  = Theme::get_wsu_option( 'audience_nav', 'colorScheme', $args['colorScheme'] );

		if ( ! empty( $args['colorScheme'] ) ) {

			$args['className'] = self::merge_string( $args['className'], 'wsu-color-scheme--' . $args['colorScheme'] );

		}
	
	}


}

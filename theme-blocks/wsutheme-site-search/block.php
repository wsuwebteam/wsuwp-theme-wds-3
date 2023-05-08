<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Search extends Block {

	protected static $block_slug    = 'site-search';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		self::set_args( $args );

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}

	}


	protected static function set_args( &$args ) {

		
	}


}

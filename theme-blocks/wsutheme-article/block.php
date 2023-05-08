<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Article extends Block {

	protected static $block_slug    = 'article';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'style'        => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}


}

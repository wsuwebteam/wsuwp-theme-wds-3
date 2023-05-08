<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Byline extends Block {

	protected static $block_slug    = 'byline';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}


	protected static function set_args( &$args ) {

		$args['displayBlock'] = static::get_theme_option( 'displayByline', $args, $args['displayBlock'] );

	}


	protected static function set_content( &$content ) {

		if ( empty( $content ) && in_the_loop() ) {

			$content = get_the_author();

		}

	}


}

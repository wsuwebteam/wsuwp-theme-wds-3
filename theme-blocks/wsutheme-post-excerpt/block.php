<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Post_Excerpt extends Block {

	protected static $block_slug    = 'post-excerpt';
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


	protected static function set_content( &$content, $args ) {

		ob_start();

		the_excerpt();

		$content = ob_get_clean();

	}


}

<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Publish_Date extends Block {

	protected static $block_slug    = 'publish-date';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'date'         => '',
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

		$args['displayBlock'] = static::get_theme_option( 'displayPublishDate', $args, $args['displayBlock'] );

		if ( empty( $args['date'] ) && in_the_loop() ) {

			$args['date'] = get_the_date();

		}

	}


}

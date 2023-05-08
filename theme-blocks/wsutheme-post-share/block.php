<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Post_Share extends Block {

	protected static $block_slug    = 'post-share';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'link'         => '',
		'title'        => '',
		'location'     => '',
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

		$args['displayBlock'] = static::get_theme_option( 'displayShare', $args, $args['displayBlock'] );

		if ( in_the_loop() ) {

			if ( empty( $args['link'] ) ) {

				$args['link'] = get_the_permalink();

			}

			if ( empty( $args['title'] ) ) {

				$args['title'] = get_the_title();
				
			}
		}

	}


}

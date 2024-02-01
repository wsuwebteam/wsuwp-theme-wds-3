<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Eyebrow_Heading extends Block {

	protected static $block_slug    = 'eyebrow-heading';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		self::set_content( $content );

		if ( ! static::should_hide( $args ) && ! empty( $content ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}


	protected static function set_content( &$content ) {

		if ( empty( $content ) ) {

			if ( in_the_loop() ) {

				$content = get_post_meta( get_the_ID(), '_eyebrow_heading', true );

			}
		}

	}

}

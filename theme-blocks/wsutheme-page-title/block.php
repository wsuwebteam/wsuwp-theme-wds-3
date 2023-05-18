<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Page_Title extends Block {

	protected static $block_slug    = 'page-title';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'link'         => false,
		'tag'          => 'h1',
 	);


	protected static function render( $args, $content = '' ) {

		self::set_args( $args );

		self::set_content( $content );

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}

	protected static function set_args( &$args ) {


	}

	protected static function set_content( &$content ) {

		if ( empty( $content ) ) {

			if ( in_the_loop() ) {

				$content = get_the_title();

			} elseif ( is_archive() ) {

				$content = get_the_archive_title();

			} elseif ( is_home() ) {

				$content = single_post_title( '', false );

			} elseif ( is_singular() ) {

				$content = single_post_title( '', false );

			}
		}

	}

}

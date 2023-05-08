<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Post_Header extends Block {

	protected static $block_slug    = 'post-header';
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

		if ( 'hide' !== $args['displayBlock'] && false !== $args['displayBlock'] ) {

			$should_title = self::should_title( $args );

			if ( ! $should_title ) {

				$args['displayBlock'] = 'hide';

			}

		}

	}

	protected static function should_title( $args ) {

		if ( is_singular() && in_the_loop() ) {

			$post_content = get_the_content();

			$has_title = array(
				'<h1',
				'tag":"h1"',
				'wsuwp/pagetitle',
				'Tag":"h1"',
			);

			foreach ( $has_title as $search_string ) {

				if ( false !== strpos( $post_content, $search_string ) ) {

					return false;

				}
			}
		}

		return true;

	}


}

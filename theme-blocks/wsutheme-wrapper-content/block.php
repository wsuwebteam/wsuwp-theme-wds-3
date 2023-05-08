<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Wrapper_Content extends Block {

	protected static $block_slug    = 'wrapper-content';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'sidebar'      => '',
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

		$args['sidebar'] = static::get_theme_option( 'sidebar', $args, $args['sidebar'] );

		if ( 'hide' === $args['sidebar'] ) {

			$args['sidebar'] = '';

		}

		if ( ! empty( $args['sidebar'] )) {

			$args['className'] .= ' wsu-wrapper-content--layout-sidebar-right';

		}

	}


}

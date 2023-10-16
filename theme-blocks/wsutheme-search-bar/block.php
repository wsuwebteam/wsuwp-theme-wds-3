<?php namespace WSUWP\Theme\WDS;


class Theme_Block_Search_Bar extends Block {

	protected static $block_slug   = 'search-bar';
	protected static $option_group = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'term'         => '',
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

		$args['term'] = ( ! empty( $_REQUEST['search_announcements'] ) ) ? sanitize_text_field( $_REQUEST['search_announcements'] ) : '';

	}

}

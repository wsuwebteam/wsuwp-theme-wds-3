<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Term_Description extends Block {

	protected static $block_slug    = 'term-description';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args, $content ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}

	protected static function set_args( &$args ) {


	}


	protected static function set_content( &$content, $args = array() ) {

		if ( empty( $content ) ) {

			$term_description = term_description();

			if ( ! empty( $term_description ) && ! is_paged() ) {

				$content = $term_description;

			}
		}

	}

}

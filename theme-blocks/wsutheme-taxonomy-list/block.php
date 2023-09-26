<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Taxonomy_List extends Block {

	protected static $block_slug    = 'taxonomy-list';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'taxonomy'     => '',
		'html'         => '',
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

		$display_key = 'display' . ucfirst( $args['taxonomy'] );

		$args['displayBlock'] = static::get_theme_option( $display_key, $args, $args['displayBlock'] );

	}


	protected static function set_content( &$content, $args = array() ) {

		if ( empty( $content ) ) {

			switch ( $args['taxonomy'] ) {

				case 'categories':
					$content = self::get_category_html( $args );
					break;
				case 'tags':
					$content = self::get_tag_html( $args );
					break;
	
			}
		}

	}



	protected static function get_category_html( $args ) {

		ob_start();

		if ( in_the_loop() && has_category() ) {

			echo 'Categories: ';
			the_category( ', ' );

		}

		return ob_get_clean();

	}


	protected static function get_tag_html( $args ) {

		ob_start();

		if ( in_the_loop() && has_tag() ) {

			the_tags( '' );

		}

		return ob_get_clean();

	}


}

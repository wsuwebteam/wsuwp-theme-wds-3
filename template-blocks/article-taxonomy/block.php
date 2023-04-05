<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Taxonomy extends Theme_Block {

	protected static $block_slug    = 'article-taxonomy';
	protected static $option_group  = 'article_taxonomy';
	protected static $default_args = array(
		'displayBlock'           => '',
		'className'      => '',
		'taxonomy'       => '',
		'html'          => '',
 	);


	public static function init() {

		add_action( 'customize_register', array( __CLASS__, 'customize' ), 11 );

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {


		self::set_args( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	public static function customize( $wp_customize ) {

	}

	protected static function should_hide( $args ) {

		return ( empty( $args['html'] ) ) ? true : parent::should_hide( $args );

	}


	protected static function set_args( &$args ) {

		switch ( $args['taxonomy'] ) {

			case 'categories':
				$args['html'] = self::get_category_html( $args );
				break;
			case 'tags':
				$args['html'] = self::get_tag_html( $args );
				break;

		}

	}


	protected static function get_category_html( $args ) {

		ob_start();

		if ( in_the_loop() && has_category() ) {

			echo 'Categories : ';
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

Block_Article_Taxonomy::init();

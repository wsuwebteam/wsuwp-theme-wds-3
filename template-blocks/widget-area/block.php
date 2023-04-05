<?php namespace WSUWP\Theme\WDS; 


class Block_Widget_Area extends Theme_Block {

	protected static $block_slug    = 'widget-area';
	protected static $option_group  = 'widget_area';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
		'area'           => '',
	);


	public static function init() {

		add_action( 'customize_register', array( __CLASS__, 'customize' ), 11 );

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	public static function customize( $wp_customize ) {

	}

	protected static function should_hide( $args ) {

		if ( ! is_active_sidebar( $args['area'] ) ) {

			return true;
		}

		return parent::should_hide( $args );
	
	}


}

Block_Widget_Area::init();

<?php namespace WSUWP\Theme\WDS; 


class Block_layout extends Theme_Block {

	protected static $block_slug    = 'layout';
	protected static $option_group  = 'layout';
	protected static $default_args = array(
		'displayBlock'     => '',
		'className'        => '',
		'position'         => '',
		'context'          => '',
		'sidebar'          => '',
		'sidebar_classes'  => '',
 	);


	public static function init() {


	}

	// Call render_block( $args ) in parent class
	protected static function render( $args, $content = '' ) {

		if ( 'hide' === $args['sidebar'] || 'default' === $args['sidebar'] || ! is_registered_sidebar( $args['sidebar'] ) ) {

			$args['sidebar'] = '';

		}

		switch ( $args['position'] ) {

			case 'start':
				self::render_start( $args, $content );
				break;
			case 'end':
				self::render_end( $args, $content );
				break;
		}

	}


	protected static function render_start( $args, $content ) {

		$classes = explode( ' ', $args['className'] );


		if ( ! empty( $args['sidebar'] ) ) {

			$classes[] = 'wsu-wrapper-content--layout-sidebar-right';

		}

		$args['className'] = implode( ' ', $classes );

		include __DIR__ . '/templates/start-default-version-3.php';

	}

	protected static function render_end( $args, $content ) {

		include __DIR__ . '/templates/end-default-version-3.php';

	}


}

Block_Layout::init();

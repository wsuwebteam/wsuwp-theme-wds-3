<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Widget_Area extends Block {

	protected static $block_slug    = 'widget-area';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock'      => true,
		'className'         => 'wsu-widget-area',
		'location'          => '',
		'locationPrefix'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected static function set_args( &$args ) {

		if ( ! empty( $args['locationPrefix'] ) ) {

			$args['location'] = $args['locationPrefix'] . '_' . $args['context'];

		}

		if ( empty( $args['location'] ) ) {

			$args['displayBlock'] = 'hide';

		} else {

			$args['className'] .= ' wsu-widget-area--' . str_replace( '_', '-', $args['location'] );

		}

	}

	protected static function set_content( &$content, $args ) {

		if ( empty( $content ) && 'hide' !== $args['displayBlock'] ) {

			if ( is_active_sidebar( $args['location'] ) ) {

				ob_start();

				dynamic_sidebar( $args['location'] );

				$content = ob_get_clean();

			}
		}

	}


}


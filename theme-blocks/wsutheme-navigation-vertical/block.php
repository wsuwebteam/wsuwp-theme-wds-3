<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Vertical extends Block {

	protected static $block_slug    = 'navigation-vertical';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'menuStyle'    => 'vertical',
		'menuDepth'    => '3',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected static function set_args( &$args, $content ) {

		if ( ! has_nav_menu( 'site' ) ) {

			$args['displayBlock'] = 'hide';

		}

		$args['menuDepth'] = intval( $args['menuDepth'] );

	}


	protected static function set_content( &$content, $args ) {

		if ( empty( $content ) && 'hide' !== $args['displayBlock'] ) {

			$menu_classes = array( 'wsu-menu-collapse' );

			$menu_classes[] = 'wsu-menu-collapse--style-' . $args['menuStyle'];

			ob_start();

			wp_nav_menu(
				array(
					'theme_location' => 'site',
					'menu_class'     => implode( ' ', $menu_classes ),
					'container'      => '',
					'walker'         => new Walker_Nav_Menu_Collapse( $args ),
					'menu_id'        => 'wsu-site-menu',
					'depth'          => $args['menuDepth'],
				)
			);

			$menu_html = ob_get_clean();

			$content = apply_filters( 'wsu_wds_menu_html', $menu_html, $args, self::$block_slug );

		}
	}


}


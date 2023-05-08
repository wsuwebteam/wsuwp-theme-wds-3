<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Vertical extends Block {

	protected static $block_slug    = 'navigation-vertical';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'menuStyle'    => 'vertical',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			$menu_html = self::get_menu( $args );

			include __DIR__ . '/template.php';

		}

	}

	protected static function get_menu( $args ) {

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
			)
		);

		$menu_html = ob_get_clean();

		return apply_filters( 'wsu_wds_menu_html', $menu_html, $args, self::$block_slug );

	}


}


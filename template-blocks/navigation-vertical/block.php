<?php namespace WSUWP\Theme\WDS; 


class Block_Navigation_Vertical extends Theme_Block {

	protected static $block_slug    = 'navigation-vertical';
	protected static $option_group  = 'navigation_vertical';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
		'menuStyle'      => 'vertical',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			$menu_html = self::get_menu( $args );

			include __DIR__ . '/templates/default-version-3.php';

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

Block_Navigation_Vertical::init();
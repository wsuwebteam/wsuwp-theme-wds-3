<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Horizontal extends Block {

	protected static $block_slug    = 'navigation-horizontal';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'style'        => 'wds',
		'colorScheme'  => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args, $content ) ) {

			include __DIR__ . '/template.php';

		}

	}

	protected static function set_args( &$args ) {

		$args['className']   = self::merge_string( $args['className'], 'wsu-nav-site-horiz' );
		$args['className']   = self::merge_string( $args['className'], 'wsu-nav-site-horiz--style-' . $args['style']  );
		$args['colorScheme'] = Theme::get_wsu_option( 'horizontal_nav', 'colorScheme', $args['colorScheme'] );

		if ( ! empty( $args['colorScheme'] ) ) {

			$args['className'] = self::merge_string( $args['className'], 'wsu-color-scheme--' . $args['colorScheme'] );

		}

	}


	protected static function set_content( &$content, $args ) {


		if ( empty( $content ) && 'hide' !== $args['displayBlock'] && has_nav_menu( 'site_horizontal' ) ) {

			ob_start();

			wp_nav_menu(
				array(
					'theme_location' => 'site_horizontal',
					'menu_class'     => 'wsu-nav-site-horiz__menu',
					'container'      => '',
					'walker'         => new Walker_Nav_Menu_Category( $args ),
					'menu_id'        => 'wsu-site-menu',
					'depth'          => 3,
					'action_prefix'  => 'wsu-menu-action',
				)
			);

			$menu_html = ob_get_clean();

			$content = apply_filters( 'wsu_wds_menu_html', $menu_html, $args, self::$block_slug );

		}
	}


}


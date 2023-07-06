<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Navigation_Mobile extends Block {

	protected static $block_slug    = 'navigation-mobile';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'menu'         => '',
		'alt_menu'     => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}

	protected static function set_args( &$args, $content ) {

		if ( empty( $args['menu'] ) ) {

			if ( has_nav_menu( 'site_horizontal' ) ) {

				$args['menu'] = 'site_horizontal';

			} else {

				$args['menu'] = 'site';

			}

		}

	}

	protected static function set_content( &$content, $args ) {

		if ( empty( $content ) ) {

			ob_start();

			if ( has_nav_menu( $args['menu'] ) ) {

				wp_nav_menu(
					array(
						'theme_location' => $args['menu'],
						'menu_class'     => 'wsu-menu-collapse wsu-menu-collapse--style-mobile',
						'container'      => '',
						'walker'         => new Walker_Nav_Menu_Collapse(),
						'menu_id'        => 'wsu-site-menu-mobile',
					)
				);

			}


			if ( ! empty( $args['alt_menu'] ) && has_nav_menu( $args['alt_menu'] ) ) {

				wp_nav_menu(
					array(
						'theme_location' => $args['alt_menu'],
						'menu_class'     => 'wsu-menu-collapse wsu-menu-collapse--style-mobile',
						'container'      => '',
						'walker'         => new Walker_Nav_Menu_Collapse(),
						'menu_id'        => 'wsu-site-menu-mobile',
					)
				);

			}

			$content = ob_get_clean();

		}

	}


}

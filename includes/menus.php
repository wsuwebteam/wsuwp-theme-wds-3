<?php namespace WSUWP\Theme\WDS;


class Menus {

	public static function init() {

        $theme_dir = Theme::get( 'dir' );

		require_once $theme_dir . '/classes/class-walker-nav-menu-collapse.php';

		add_action( 'after_setup_theme', array( __CLASS__, 'register_menus' ), 0 );

		add_filter( 'body_class', array( __CLASS__, 'add_menu_body_classes' ) );

	}

	public static function register_menus() {

		register_nav_menus(
			array(
				'site'            => 'Site Navigation',
				'site_horizontal' => 'Horizontal Site Navigation',
				'audience'        => 'Audience',
				'footer'          => 'Footer Menu',
				'offsite'         => 'Offsite Menu',
				'quicklinks'      => 'Quicklinks Menu',
			)
		);

	}

	public static function get( $format = false ) {

		$nav_menus = wp_get_nav_menus();

		if ( 'select' === $format ) {

			$select = array();

			foreach ( $nav_menus as $nav_menu ) {

				$select[ $nav_menu->slug ] = $nav_menu->name;

			}

			$nav_menus = $select;

		}

		return $nav_menus;

	}

	public static function add_menu_body_classes( $classes ) {

		if ( 'horizontal' === get_theme_mod('wsu_wds_site_navigation_style', false ) ) {

			return array_merge( $classes, array( 'wsu-has-navigation--horizontal' ) );

		}

		return $classes;

	}

}

Menus::init();

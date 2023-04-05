<?php namespace WSUWP\Theme\WDS;


class Body_Classes {

	public static function init() {

		add_filter( 'body_class', array( __CLASS__, 'add_menu_body_classes' ) );

	}


	public static function add_menu_body_classes( $classes ) {

		if ( has_nav_menu( 'horizontal' ) || has_nav_menu( 'site' ) ) {

			$classes[] = 'wsu-has--mobile-nav';

		}

		return $classes;

	}

}

Body_Classes::init();

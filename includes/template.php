<?php namespace WSUWP\Theme\WDS;


class Template {


	protected static $context = '';


	public static function init() {

	}


	public static function get_wsu_block_template( $slug, $name = '', $args = array() ) {

		do_action( "get_template_part_{$slug}", $slug, $name, $args );

		$templates = array();
		$name      = (string) $name;

		if ( '' !== $name ) {

			$templates[] = "{$slug}-{$name}.php";

		}

		$templates[] = "{$slug}.php";

		$template_path = locate_template( $templates, false, false, $args );

		if ( $template_path ) {

			ob_start();

			include $template_path;

			echo do_blocks( ob_get_clean() );

		} else {

			return false;
		}

	}


	public static function get_context() {

		if ( empty( self::$context ) ) {

			if ( is_front_page() ) {

				self::$context = 'front-page';
	
			} elseif ( is_home() ) {
	
				self::$context = 'home';
	
			} elseif ( is_singular() ) {
	
				self::$context = get_post_type();
	
			} elseif ( is_category() ) {
	
				self::$context = 'category';
	
			} elseif ( is_tag() ) {
	
				self::$context = 'tag';
	
			} elseif ( is_tax() ) {

				$term = get_queried_object();

				self::$context = $term->taxonomy;

			} elseif ( is_post_type_archive() ) {

				$post_type = get_queried_object();

				self::$context = 'archive-' . $post_type->name;

			}
		}

		return self::$context;

	}


}

Template::init();

<?php namespace WSUWP\Theme\WDS;


class Template_Options {

	protected static $default_options = array(
		'template_post_single' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_post_archive' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_page' => array(
			'sidebar' => '',
		),
		'template_category' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_tag' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_taxonomy' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_author' => array(
			'sidebar' => 'sidebar_post',
		),
		'template_attachment' => array(
			'sidebar' => '',
		),
		'template_single_posttype' => array(
			'sidebar' => '',
		),
		'template_404' => array(
			'sidebar' => '',
		),
		'template_search' => array(
			'sidebar' => '',
		),
	);


	public static function get( $template, $option, $default = false, $fallback_template = 'post-archive' ) {

		$template = 'template_' . $template;

		$option_template = ( ! empty( self::$default_options[ $template ] ) ) ? $template : $fallback_template;

		$option_value = ( ! empty( self::$default_options[ $option_template ] ) && isset( self::$default_options[ $option_template ][ $option ] ) ) ? self::$default_options[ $option_template ][ $option ] : $default;

		return Theme_Options::get_wsu_option( $template, $option, $option_value );

	}

	public static function get_context() {

		/*$post_types = array( 'post', 'page', 'attachment' )

		if ( is_singular() ) {

			$post_type = 'page';

			foreach ( $post_types as $type ) {

				if ( is_singular( $post_type ) ) {
					$post_type = $type;
				}
			}

			return $post_type;

		} elseif ( is_post_type_archive() ) {

		} elseif ( is_category() )
		
		is_category()
		is_tag()
		is_tax()



		if ( is_page() ) {

			return 'page';

		} elseif ( is_singular('post') ) {

			return 'post';

		} elseif ( is_category() ) {

			return 'category';

		} elseif ( is_tag() ) {

			return 'tag';

		} elseif () {

		} elseif ( is_singular('attachment') ) {

			return 'attachment';

		}*/

	}

}

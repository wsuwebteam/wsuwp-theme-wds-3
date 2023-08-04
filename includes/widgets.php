<?php namespace WSUWP\Theme\WDS;


class Widgets {

	public static function init() {

		add_action( 'init', array( __CLASS__, 'register_widget_areas' ), 99 );

		add_action( 'init', array( __CLASS__, 'wsu_register_sidebars' ), 99 );

	}

	public static function get_sidebars( $format = 'select' ) {

		global $wp_registered_sidebars;

		$sidebars = array();

		if ( 'select' === $format ) {

			foreach ( $wp_registered_sidebars as $id => $sidebar ) {

				$sidebars[ $id ] = $sidebar['name'];
			}

			return $sidebars;

		}

	}


	public static function wsu_register_sidebars() {

		$post_types = get_post_types( array( 'public' => true ), 'objects' );

		$wsu_options = apply_filters( 'wsu_theme_options', array() );

		$exclude_post_types = array( 'post', 'page' );

		foreach ( $post_types as $post_type ) {

			$template_name = 'template_' . $post_type->name;

			if ( ! in_array( $post_type->name, $exclude_post_types, true ) && array_key_exists( $template_name, $wsu_options ) ) {

				if ( ! empty( $wsu_options[ $template_name ]['addSidebar'] ) ) {

					register_sidebar(
						array(
							'name'          => "$post_type->label | Sidebar",
							'id'            => "sidebar_{$post_type->name}",
							'description'   => '',
							'before_widget' => '<div class="wsu-widget wsu-widget--sidebar">',
							'after_widget'  => '</div>',
							'before_title'  => '<h2>',
							'after_title'   => '</h2>',
						)
					);

				}
			}
		}

	}


	public static function register_widget_areas() {


		$widget_areas = array( 
			'post'         => 'Post',
			'page'         => 'Page',
			'post_archive' => 'Blog/Post Archive',
			'category'     => 'Category Archive',
			'tag'          => 'Tag Archive',
		);

		foreach ( $widget_areas as $slug => $label ) {

			if ( Theme::get_wsu_option( 'template_' . $slug, 'addSidebar', false ) || 'post' === $slug ) {

				register_sidebar(
					array(
						'name'          => "{$label} | Sidebar",
						'id'            => "sidebar_{$slug}",
						'description'   => '',
						'before_widget' => '<div class="wsu-widget wsu-widget--sidebar">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>',
					)
				);

			}


			if ( Theme::get_wsu_option( 'template_' . $slug, 'widgetsBefore', false ) ) {

				register_sidebar(
					array(
						'name'          => "{$label} | Before Content",
						'id'            => "{$slug}_before",
						'description'   => '',
						'before_widget' => '<div class="wsu-widget">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>',
					)
				);

			}

			if ( Theme::get_wsu_option( 'template_' . $slug, 'widgetsAfter', false ) ) {

				register_sidebar(
					array(
						'name'          => "{$label} | After Content",
						'id'            => "{$slug}_after",
						'description'   => '',
						'before_widget' => '<div class="wsu-widget">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>',
					)
				);

			}


		}

		register_sidebar(
			array(
				'name'          => 'Before Footer',
				'id'            => 'before_footer',
				'description'   => 'Widgets in this area will be shown in the site footer.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'name'          => 'Footer',
				'id'            => 'footer_widgets',
				'description'   => 'Widgets in this area will be shown in the site footer.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);


		register_sidebar(
			array(
				'name'          => 'Footer | Top',
				'id'            => 'footer_top_widgets',
				'description'   => 'Widgets in this area will be shown at the top of the site footer.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'name'          => 'Quicklinks',
				'id'            => 'wsu_wds_quicklinks',
				'description'   => 'Widgets in this area will be shown in quicklinks bar.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'name'          => 'Quicklinks | Footer',
				'id'            => 'wsu_wds_quicklinks_footer',
				'description'   => 'Widgets in this area will be shown in quicklinks bar.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'name'          => 'Site Header',
				'id'            => 'header_banner',
				'description'   => 'Widgets in this area will be shown in quicklinks bar.',
				'before_widget' => '<div class="wsu-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);


	}


}

Widgets::init();

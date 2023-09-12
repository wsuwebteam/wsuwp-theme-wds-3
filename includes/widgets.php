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

		$context_array = array(
			'post_archive' => 'Blog/Post Archive',
			'category'     => 'Category Archive',
			'tag'          => 'Tag Archive',
		);

		foreach ( $post_types as $post_type ) {

			if ( ! in_array( $post_type->name, $exclude_post_types, true ) ) {

				$context_array[ $post_type->name ] = $post_type->label;

				$context_array[ 'archive_' . $post_type->name ] = $post_type->label . ' Archive';

			}
		}

		
		foreach ( $context_array as $name => $label ) {

			$template_name = 'template_' . $name;

			if ( is_array( $wsu_options ) && array_key_exists( $template_name, $wsu_options ) ) {

				if ( ! empty( $wsu_options[ $template_name ]['addSidebar'] ) ) {

					register_sidebar(
						array(
							'name'          => "$label | Sidebar",
							'id'            => "sidebar_{$name}",
							'description'   => '',
							'before_widget' => '<div class="wsu-widget wsu-widget--sidebar">',
							'after_widget'  => '</div>',
							'before_title'  => '<h2>',
							'after_title'   => '</h2>',
						)
					);

				}

				if ( ! empty( $wsu_options[ $template_name ]['widgetsBefore'] ) && 'hide' !== $wsu_options[ $template_name ]['widgetsBefore'] ) {

					register_sidebar(
						array(
							'name'          => "$label | Before Content",
							'id'            => "before_content_{$name}",
							'description'   => '',
							'before_widget' => '<div class="wsu-widget wsu-widget--before-content">',
							'after_widget'  => '</div>',
							'before_title'  => '<h2>',
							'after_title'   => '</h2>',
						)
					);

				}

				if ( ! empty( $wsu_options[ $template_name ]['widgetsAfter'] ) && 'hide' !== $wsu_options[ $template_name ]['widgetsAfter'] ) {

					register_sidebar(
						array(
							'name'          => "$label | After Content",
							'id'            => "after_content_{$name}",
							'description'   => '',
							'before_widget' => '<div class="wsu-widget wsu-widget--after-content">',
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

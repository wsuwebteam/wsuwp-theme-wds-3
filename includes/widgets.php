<?php namespace WSUWP\Theme\WDS;


class Widgets {

	public static function init() {

		add_action( 'widgets_init', array( __CLASS__, 'register_widget_areas' ) );

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


	public static function register_widget_areas() {

		register_sidebar(
			array(
				'name'          => 'Post | Sidebar',
				'id'            => 'sidebar_post',
				'description'   => '',
				'before_widget' => '<div class="wsu-widget wsu-widget--sidebar">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		$widget_areas = array( 
			'post'         => 'Post',
			'page'         => 'Page',
			'post_archive' => 'Blog/Post Archive',
			'category'     => 'Category Archive',
			'tag'          => 'Tag Archive',
		);

		foreach ( $widget_areas as $slug => $label ) {

			if ( 'post' !== $slug ) {

				if ( Theme::get_wsu_option( 'template_' . $slug, 'addSidebar', false ) ) {

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

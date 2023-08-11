<?php namespace WSUWP\Theme\WDS;

class Customizer {

	protected static $theme_supports = array(
		'site_header' => array(
			'siteHeader' => array(
				'default' => 'unit',
				'options' => array(
					'unit' => 'Unit',
				),
				'restrictedOptions' => array(
					'unit'   => 'Unit',
					'campus' => 'Campus (Restricted)',
					'system' => 'System (Restricted)',
				),
			),
			'colorScheme' => array(
				'default' => 'light',
				'options' => array(
					'dark'  => 'On',
					'light' => 'Off',
				),
			),
			'displayQuicklinks' => array(
				'default' => 'show',
				'options' => array(
					'show' => 'On',
					'hide' => 'Off',
				),
			),
			'mobileMenu' => array(
				'default' => 'show',
				'options' => array(
					'show' => 'On',
					'hide' => 'Off',
				),
			),
			'searchOptions' => array(
				'default' => 'show',
				'options' => array(
					'show' => 'On',
					'hide' => 'Off',
				),
			),
			'searchContext' => array(
				'default' => 'site',
				'options' => array(
					'site' => 'Site',
					'wsu'  => 'All WSU',
				),
			),
			'primaryActionText' => array(
				'default' => 'Give',
			),
			'primaryActionLink' => array(
				'default' => 'https://foundation.wsu.edu/give/',
			),
		),
		'horizontal_nav' => array(
			'colorScheme' => array(
				'default' => 'light',
				'options' => array(
					'dark'  => 'On',
					'light' => 'Off',
				),
			),
		),
		'vertical_nav' => array(
			'colorScheme' => array(
				'default' => 'light',
				'options' => array(
					'dark'  => 'On',
					'light' => 'Off',
				),
			),
		),
		'audience_nav' => array(
			'colorScheme' => array(
				'default' => 'light',
				'options' => array(
					'dark'  => 'On',
					'light' => 'Off',
				),
			),
		),
	);

	protected static $template_supports = array(
		'frontpage' => array(
			'option_group'       => 'template_front_page',
			'displayName'        => 'Homepage',
			'supports'           => array(
				'displayPageTitle'   => 'show',
				'displayBreadcrumbs' => 'hide',
				'displayPublishDateBefore' => 'hide',
				'displayBylineBefore'      => 'hide',
				'displayShareBefore'       => 'hide',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'hide',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'hide',
				'displayTags'             => 'hide',
				'widgetsBefore'           => 'hide',
				'widgetsAfter'            => 'hide',
			), 
		),
		'page'      => array(
			'option_group'       => 'template_page',
			'displayName'        => 'Page',
			'supports'           => array(
				'displayPageTitle'   => 'show',
				'displayBreadcrumbs' => 'show',
				'displayPublishDateBefore' => 'hide',
				'displayBylineBefore'      => 'hide',
				'displayShareBefore'       => 'hide',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'hide',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'hide',
				'displayTags'             => 'hide',
				'widgetsBefore'           => 'hide',
				'widgetsAfter'            => 'hide',
			), 
		),
		'post'      => array(
			'option_group'       => 'template_post',
			'displayName'        => 'Single Post',
			'supports'           => array(
				'sidebar'            => 'post',
				'displayBreadcrumbs'   => 'show',
				'displayFeaturedImage' => 'show',
				'displayBylineBefore'  => 'hide',
				'displayShareBefore'       => 'show',
				'displayPublishDateBefore' => 'show',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'show',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'show',
				'displayTags'             => 'show',
				'widgetsBefore'           => 'show',
				'widgetsAfter'            => 'show',
			), 
		),
		'home'      => array(
			'option_group'       => 'template_home',
			'displayName'        => 'Post Archive/Blog',
			'supports'           => array(
				'sidebar'            => 'post',
				'displayBreadcrumbs'   => 'show',
				'displayBylineBefore'  => 'hide',
				'displayShareBefore'       => 'hide',
				'displayPublishDateBefore' => 'show',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'show',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'show',
				'displayTags'             => 'show',
				'widgetsBefore'           => 'show',
				'widgetsAfter'            => 'show',
			), 
		),
		'category'  => array(
			'option_group'       => 'template_category',
			'displayName'        => 'Category Archive',
			'supports'           => array(
				'sidebar'            => 'post',
				'displayBreadcrumbs'   => 'show',
				'displayBylineBefore'  => 'hide',
				'displayShareBefore'       => 'hide',
				'displayPublishDateBefore' => 'show',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'show',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'show',
				'displayTags'             => 'show',
				'widgetsBefore'           => 'show',
				'widgetsAfter'            => 'show',
			), 
		),
		'tag'       => array(
			'option_group'       => 'template_tag',
			'displayName'        => 'Tag Archive',
			'supports'           => array(
				'sidebar'            => 'post',
				'displayBreadcrumbs'   => 'show',
				'displayBylineBefore'  => 'hide',
				'displayShareBefore'       => 'hide',
				'displayPublishDateBefore' => 'show',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'show',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'show',
				'displayTags'             => 'show',
				'widgetsBefore'           => 'show',
				'widgetsAfter'            => 'show',
			), 
		),
		'post_type' => array(
			'option_group'       => '',
			'displayName'        => '',
			'supports'           => array(
				'sidebar'              => 'hide',
				'addSidebar'           => false,
				'displayPageTitle'         => 'show',
				'displayBreadcrumbs'       => 'show',
				'displayPublishDateBefore' => 'hide',
				'displayBylineBefore'      => 'hide',
				'displayShareBefore'       => 'hide',
				'displayFeaturedImage'     => 'hide',
				'displayBylineAfter'      => 'hide',
				'displayShareAfter'       => 'hide',
				'displayPublishDateAfter' => 'hide',
				'displayCategories'       => 'hide',
				'displayTags'             => 'hide',
				'widgetsBefore'           => 'hide',
				'widgetsAfter'            => 'hide',
			), 
		),
	);

	public static function init() {

		add_filter( 'wsu_theme_customizer_options', array( __CLASS__, 'add_theme_supports' ) );

		add_filter( 'wsu_template_options', array( __CLASS__, 'add_template_supports' ) );

	}


	public static function add_theme_supports( $supports ) {

		return array_merge( $supports, self::$theme_supports );

	}

	public static function add_template_supports( $supports ) {

		return array_merge( $supports, self::$template_supports );

	}
	

}

Customizer::init();
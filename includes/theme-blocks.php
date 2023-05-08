<?php namespace WSUWP\Theme\WDS;


class Theme_Blocks {

	protected static $theme_blocks = array(
		'wsutheme/article'               => 'Theme_Block_Article',
		'wsutheme/breadcrumbs'           => 'Theme_Block_Breadcrumbs',
		'wsutheme/byline'                => 'Theme_Block_Byline',
		'wsutheme/featured-image'        => 'Theme_Block_Featured_Image',
		'wsutheme/global-footer'         => 'Theme_Block_Global_Footer',
		'wsutheme/global-header'         => 'Theme_Block_Global_Header',
		'wsutheme/navigation-audience'   => 'Theme_Block_Navigation_Audience',
		'wsutheme/navigation-horizontal' => 'Theme_Block_Navigation_Horizontal',
		'wsutheme/navigation-mobile'     => 'Theme_Block_Navigation_Mobile',
		'wsutheme/navigation-vertical'   => 'Theme_Block_Navigation_Vertical',
		'wsutheme/post-content'          => 'Theme_Block_Post_Content',
		'wsutheme/post-excerpt'          => 'Theme_Block_Post_Excerpt',
		'wsutheme/post-header'           => 'Theme_Block_Post_Header',
		'wsutheme/post-footer'           => 'Theme_Block_Post_Footer',
		'wsutheme/post-share'            => 'Theme_Block_Post_Share',
		'wsutheme/posts'          		 => 'Theme_Block_Posts',
		'wsutheme/posts-pagination'      => 'Theme_Block_Posts_Pagination',
		'wsutheme/publish-date'          => 'Theme_Block_Publish_Date',
		'wsutheme/quicklinks'            => 'Theme_Block_Quicklinks',
		'wsutheme/site-contact'          => 'Theme_Block_Site_Contact',
		'wsutheme/site-footer'           => 'Theme_Block_Site_Footer',
		'wsutheme/site-header'           => 'Theme_Block_Site_Header',
		'wsutheme/site-search'           => 'Theme_Block_Site_Search',
		'wsutheme/site-social'           => 'Theme_Block_Site_Social',
		'wsutheme/taxonomy-list'         => 'Theme_Block_Taxonomy_List',
		'wsutheme/title'                 => 'Theme_Block_Title',
		'wsutheme/widget-area'           => 'Theme_Block_Widget_Area',
		'wsutheme/wrapper-content'       => 'Theme_Block_Wrapper_Content',
		'wsutheme/wrapper-main'          => 'Theme_Block_Wrapper_Main',
		'wsutheme/wrapper-site'          => 'Theme_Block_Wrapper_Site',
	);

	public static function init() {

		add_action( 'init', array( __CLASS__, 'register' ) );
		add_filter( 'allowed_block_types', array( __CLASS__, 'add_blocks' ), 11 );

		$theme_dir = Theme::get( 'dir' );

		require_once $theme_dir . '/classes/class-block.php';

	}

	public static function register() {

		// Get blocks to register
		$blocks = self::$theme_blocks;

		// Get the block directory
		$block_dir = Theme::get( 'dir' ) . '/theme-blocks/';

		foreach ( $blocks as $block => $class ) {

			// folder name should be the block name with the / replaced with - (i.e. wsuwp/name -> wsupw-name)
			$block_folder = str_replace( '/', '-', $block );

			$block_class = __NAMESPACE__ . '\\' . $class;

			require_once $block_dir . $block_folder . '/block.php';

			register_block_type(
				$block,
				array(
					'api_version'     => 2,
					'render_callback' => array( $block_class, 'render_block' ),
					'editor_script'   => false,
				)
			);

		}

	}

	public static function add_blocks( $allowed_blocks ) {

		$theme_blocks = array_keys( self::$theme_blocks );

		return array_merge( $allowed_blocks, $theme_blocks );

	}


}

Theme_Blocks::init();

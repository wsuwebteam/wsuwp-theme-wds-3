<?php namespace WSUWP\Theme\WDS;


class Theme_Blocks {

	protected static $theme_blocks = array(
		'wsutheme/article'               => 'Theme_Block_Article',
		'wsutheme/breadcrumbs'           => 'Theme_Block_Breadcrumbs',
		'wsutheme/byline'                => 'Theme_Block_Byline',
		'wsutheme/comments'              => 'Theme_Block_Comments',
		'wsutheme/featured-image'        => 'Theme_Block_Featured_Image',
		'wsutheme/global-footer'         => 'Theme_Block_Global_Footer',
		'wsutheme/global-header'         => 'Theme_Block_Global_Header',
		'wsutheme/navigation-audience'   => 'Theme_Block_Navigation_Audience',
		'wsutheme/navigation-horizontal' => 'Theme_Block_Navigation_Horizontal',
		'wsutheme/navigation-mobile'     => 'Theme_Block_Navigation_Mobile',
		'wsutheme/navigation-vertical'   => 'Theme_Block_Navigation_Vertical',
		'wsutheme/page-title'            => 'Theme_Block_Page_Title',
		'wsutheme/post-content'          => 'Theme_Block_Post_Content',
		'wsutheme/post-excerpt'          => 'Theme_Block_Post_Excerpt',
		'wsutheme/post-header'           => 'Theme_Block_Post_Header',
		'wsutheme/post-footer'           => 'Theme_Block_Post_Footer',
		'wsutheme/post-share'            => 'Theme_Block_Post_Share',
		'wsutheme/post-title'            => 'Theme_Block_Post_Title',
		'wsutheme/posts'          		 => 'Theme_Block_Posts',
		'wsutheme/posts-pagination'      => 'Theme_Block_Posts_Pagination',
		'wsutheme/publish-date'          => 'Theme_Block_Publish_Date',
		'wsutheme/quicklinks'            => 'Theme_Block_Quicklinks',
		'wsutheme/search-bar'            => 'Theme_Block_Search_Bar',
		'wsutheme/site-contact'          => 'Theme_Block_Site_Contact',
		'wsutheme/site-footer'           => 'Theme_Block_Site_Footer',
		'wsutheme/site-header'           => 'Theme_Block_Site_Header',
		'wsutheme/site-search'           => 'Theme_Block_Site_Search',
		'wsutheme/site-social'           => 'Theme_Block_Site_Social',
		'wsutheme/taxonomy-list'         => 'Theme_Block_Taxonomy_List',
		'wsutheme/term-description'      => 'Theme_Block_Term_Description',
		'wsutheme/widget-area'           => 'Theme_Block_Widget_Area',
		'wsutheme/wrapper-content'       => 'Theme_Block_Wrapper_Content',
		'wsutheme/wrapper-main'          => 'Theme_Block_Wrapper_Main',
		'wsutheme/wrapper-site'          => 'Theme_Block_Wrapper_Site',
		'wsutheme/gallery'               => 'Theme_Block_Gallery',
	);

	public static function init() {

		add_action( 'init', array( __CLASS__, 'register' ) );
		add_filter( 'allowed_block_types_all', array( __CLASS__, 'add_blocks' ), 11 );

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

		return $allowed_blocks;

	}


}

Theme_Blocks::init();

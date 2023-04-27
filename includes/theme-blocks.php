<?php namespace WSUWP\Theme\WDS;


class Theme_Blocks {

	public static function init() {

		$theme_dir = Theme::get( 'dir' );

		require_once $theme_dir . '/classes/class-theme-block.php';

		require_once $theme_dir . '/template-blocks/article/block.php';
		require_once $theme_dir . '/template-blocks/article-banner/block.php';
		require_once $theme_dir . '/template-blocks/article-byline/block.php';
		require_once $theme_dir . '/template-blocks/article-content/block.php';
		require_once $theme_dir . '/template-blocks/article-footer/block.php';
		require_once $theme_dir . '/template-blocks/article-header/block.php';
		require_once $theme_dir . '/template-blocks/article-image/block.php';
		require_once $theme_dir . '/template-blocks/article-publish-date/block.php';
		require_once $theme_dir . '/template-blocks/article-share/block.php';
		require_once $theme_dir . '/template-blocks/article-taxonomy/block.php';
		require_once $theme_dir . '/template-blocks/breadcrumbs/block.php';
		require_once $theme_dir . '/template-blocks/contact-site/block.php';
		require_once $theme_dir . '/template-blocks/footer-global/block.php';
		require_once $theme_dir . '/template-blocks/footer-site/block.php';
		require_once $theme_dir . '/template-blocks/header-global/block.php';
		require_once $theme_dir . '/template-blocks/header-site/block.php';
		require_once $theme_dir . '/template-blocks/layout/block.php';
		require_once $theme_dir . '/template-blocks/navigation-audience/block.php';
		require_once $theme_dir . '/template-blocks/navigation-mobile/block.php';
		require_once $theme_dir . '/template-blocks/navigation-vertical/block.php';
		require_once $theme_dir . '/template-blocks/quicklinks/block.php';
		require_once $theme_dir . '/template-blocks/site-search/block.php';
		require_once $theme_dir . '/template-blocks/social-site/block.php';
		require_once $theme_dir . '/template-blocks/widget-area/block.php';

	}

	public static function render( $block, $args = array() ) {

		switch ( $block ) {
			case 'article':
				Block_Article::render_block( $args );
				break;
			case 'article-banner':
				Block_Article_Banner::render_block( $args );
				break;
			case 'article-byline':
				Block_Article_Byline::render_block( $args );
				break;
			case 'article-content':
				Block_Article_Content::render_block( $args );
				break;
			case 'article-footer':
				Block_Article_Footer::render_block( $args );
				break;
			case 'article-header':
				Block_Article_Header::render_block( $args );
				break;
			case 'article-image':
				Block_Article_Image::render_block( $args );
				break;
			case 'article-publish-date':
				Block_Article_Publish_Date::render_block( $args );
				break;
			case 'article-share':
				Block_Article_Share::render_block( $args );
				break;
			case 'article-taxonomy':
				Block_Article_Taxonomy::render_block( $args );
				break;
			case 'breadcrumbs':
				Block_Breadcrumbs::render_block( $args );
				break;
			case 'contact-site':
				Block_Contact_Site::render_block( $args );
				break;
			case 'footer-global':
				Block_Footer_Global::render_block( $args );
				break;
			case 'footer-site':
				Block_Footer_Site::render_block( $args );
				break;
			case 'header-global':
				Block_Header_Global::render_block( $args );
				break;
			case 'header-site':
				Block_Header_Site::render_block( $args );
				break;
			case 'layout':
				Block_Layout::render_block( $args );
				break;
			case 'navigation-audience':
				Block_Navigation_Audience::render_block( $args );
				break;
			case 'navigation-mobile':
				Block_Navigation_Mobile::render_block( $args );
				break;
			case 'navigation-vertical':
				Block_Navigation_Vertical::render_block( $args );
				break;
			case 'quicklinks':
				Block_Quicklinks::render_block( $args );
				break;
			case 'site-search':
				Block_Site_Search::render_block( $args );
				break;
			case 'social-site':
				Block_Social_Site::render_block( $args );
				break;
			case 'widget-area':
				Block_Widget_Area::render_block( $args );
				break;
			default:
				break;
		}

	}

}

Theme_Blocks::init();

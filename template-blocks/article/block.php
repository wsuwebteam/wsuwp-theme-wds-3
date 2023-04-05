<?php namespace WSUWP\Theme\WDS; 


class Block_Article extends Theme_Block {

	protected static $block_slug   = 'article';
	protected static $option_group = 'article';
	protected static $default_args = array(
		'context'                  => 'post',
		'displayBlock'             => '',
		'className'                => '',
		'format'                   => 'article',
		'title'                    => '',
		'displayBylineBefore'      => '',
		'displayBylineAfter'       => '',
		'displayPublishDateBefore' => '',
		'displayPublishDateAfter'  => '',
		'displayShareBefore'       => '',
		'displayShareAfter'        => '',
		'displayCategories'        => '',
		'displayTags'              => '',
		'headingTag'               => 'h1',
		'linkHeading'              => '',
 	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			$template = 'template_' . $args['context'];

			switch ( $args['format'] ) {

				case 'page':
					include __DIR__ . '/templates/page-v3.php';
					break;
				case 'cards':
					include __DIR__ . '/templates/cards-v3.php';
					break;
				case 'index':
					include __DIR__ . '/templates/index-v3.php';
					break;
				case 'search':
					include __DIR__ . '/templates/search-v3.php';
					break;
				default:
					include __DIR__ . '/templates/article-v3.php';
					break;
			}
		}

	}


}

Block_Article::init();

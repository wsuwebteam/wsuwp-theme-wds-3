<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Footer extends Theme_Block {

	protected static $block_slug    = 'article-footer';
	protected static $option_group  = 'article-footer';
	protected static $default_args = array(
		'displayBlock'       => '',
		'className'          => '',
		'displayByline'      => '',
		'displayPublishDate' => '',
		'displayShare'       => '',
		'displayCategories'  => '',
		'displayTags'        => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


}

Block_Article_Footer::init();
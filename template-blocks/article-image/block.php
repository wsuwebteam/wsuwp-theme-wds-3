<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Image extends Theme_Block {

	protected static $block_slug    = 'article-image';
	protected static $option_group  = 'article_image';
	protected static $default_args = array(
		'displayBlock'           => '',
		'className'      => '',
		'image_html'     => '',
		'image_id'       => '',
		'image_caption'  => '',
		'size'           => 'large',
 	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		self::set_image( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-v3.php';

		}

	}


	protected static function should_hide( $args ) {

		return ( empty( $args['image_html'] ) ) ? true : parent::should_hide( $args );
	
	}


	protected static function set_image( &$args ) {


		if ( empty( $args['image_html'] ) ) {

			if ( empty( $args['image_id'] ) && in_the_loop() && has_post_thumbnail() ) {

				$args['image_id'] = get_post_thumbnail_id();

			}

			if ( ! empty( $args['image_id'] ) ) {

				$args['image_caption'] = wp_get_attachment_caption( $args['image_id'] );

				$args['image_html'] = wp_get_attachment_image( $args['image_id'], $args['size'] );

			}
		}

	}


}

Block_Article_Image::init();

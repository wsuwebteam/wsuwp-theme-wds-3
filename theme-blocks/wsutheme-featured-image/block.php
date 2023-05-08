<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Featured_Image extends Block {

	protected static $block_slug    = 'featured-image';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock'   => true,
		'displayCaption' => true,
		'className'      => 'wsu-article__hero',
		'image_id'       => '',
		'image_caption'  => '',
		'size'           => 'large',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args, $content ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}
	}

	protected static function set_args( &$args, $content ) {

		if ( empty( $content ) ) {

			if ( empty( $args['image_id'] ) && in_the_loop() && has_post_thumbnail() ) {

				$args['image_id'] = get_post_thumbnail_id();

				$args['image_caption'] = ( 'hide' !== $args['displayCaption'] ) ? wp_get_attachment_caption( $args['image_id'] ) : '';

			}
		}

	}

	protected static function set_content( &$content, $args ) {


		if ( empty( $content ) && ! empty( $args['image_id'] ) ) {

			$content = wp_get_attachment_image( $args['image_id'], $args['size'] );
		
		}
	}


}

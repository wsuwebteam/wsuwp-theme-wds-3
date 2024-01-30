<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Gallery extends Block {

	protected static $block_slug    = 'gallery';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'style'        => 'page',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			$gallery_items = self::get_gallery_items( $args );

			$template_path = static::get_template_path( 'templates/template' );

			if ( $template_path ) {

				ob_start();

				include $template_path;

				echo do_blocks( ob_get_clean() );
				
			}
		}

		wp_reset_postdata();
	}


	protected static function get_gallery_items( $args ) {

		$gallery_items = array();

		$supported_mimes = array( 'image/jpeg', 'image/gif', 'image/png', 'image/bmp', 'image/tiff', 'image/x-icon' );
		
		$all_mimes = get_allowed_mime_types();

		$accepted_mimes = array_diff( $supported_mimes, $all_mimes );

		$query = array(
			'post_type'      => 'attachment', 
			'post_status'    => 'inherit',
			'orderby'        => 'date', 
			'order'          => 'DESC',
			'posts_per_page' => 50,
			'post_mime_type' => array( 'image/jpeg', 'image/gif', 'image/png', 'image/webp' ),
		);

		if ( isset( $_REQUEST['category'] ) ) {

			$query['category_name'] = sanitize_text_field( $_REQUEST['category'] );
		}

		$attachments = new \WP_Query( $query );

		while( $attachments->have_posts() ) {

			$attachments->the_post();

			$img_array = wp_get_attachment_image_src( get_the_ID(), 'large' );

			$gallery_item = array(
				'id' => get_the_ID(),
				'src' => $img_array[0],
				'srcset' => wp_get_attachment_image_srcset( get_the_ID(), 'large' ),
				'width' => $img_array[1],
				'height' => $img_array[2],
				'alt' => get_post_meta( get_the_ID(), '_wp_attachment_image_alt', true ),
				'sizes' => wp_get_attachment_image_sizes( get_the_ID(), 'large' ),
				'caption' => wp_get_attachment_caption( get_the_ID() ),
			);

			$gallery_items[] = $gallery_item;


		}

		return $gallery_items;

	}

}

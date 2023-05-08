<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Posts extends Block {

	protected static $block_slug    = 'posts';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'style'        => 'page',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					Theme::get_wsu_block_template( 'block-templates/article', $args['style'] );

				}
			}
		}

	}

}

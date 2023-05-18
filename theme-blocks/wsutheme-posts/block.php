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

			$template_path = static::get_template_path( 'templates/template', $args['style'] );

			if ( $template_path ) {

				if ( have_posts() ) {

					while ( have_posts() ) {

						the_post();

						ob_start();

						include $template_path;

						echo do_blocks( ob_get_clean() );

					}
				}
			}
		}
	}

}

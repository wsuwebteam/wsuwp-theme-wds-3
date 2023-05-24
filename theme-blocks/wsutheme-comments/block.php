<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Comments extends Block {

	protected static $block_slug    = 'comments';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'title'        => 'Comments',
		'headingTag'   => 'H2',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {
	
			comments_template( '/theme-blocks/wsutheme-comments/template.php' );

		}
	}


	protected static function set_args( &$args ) {

		$allow_comments = Theme::get_wsu_option( 'site_options', 'allowComments', false );

		if ( ! $allow_comments || ! comments_open() || post_password_required() ) {

			$args['displayBlock'] = 'hide';

		}

	}




}

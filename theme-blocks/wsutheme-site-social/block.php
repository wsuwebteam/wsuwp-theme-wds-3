<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Social extends Block {

	protected static $block_slug    = 'site-social';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
		'twitter'      => '',
		'facebook'     => '',
		'youtube'      => '',
		'instagram'    => '',
		'linkedin'     => '',
 	);


	protected static function render( $args, $content = '' ) {

		self::set_args( $args );

		$social_accounts = array(
			'twitter'   => $args['twitter'],
			'facebook'  => $args['facebook'],
			'youtube'   => $args['youtube'],
			'instagram' => $args['instagram'],
			'linkedin'  => $args['linkedin'],
		);

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}

	}


	protected static function set_args( &$args ) {

		$args['twitter']   = ( ! empty( $args['twitter'] ) ) ? $args['twitter'] : Theme::get_wsu_option( 'social_accounts', 'twitter' );
		$args['facebook']  = ( ! empty( $args['facebook'] ) ) ? $args['facebook'] : Theme::get_wsu_option( 'social_accounts', 'facebook' );
		$args['youtube']   = ( ! empty( $args['youtube'] ) ) ? $args['youtube'] : Theme::get_wsu_option( 'social_accounts', 'youtube' );
		$args['instagram'] = ( ! empty( $args['instagram'] ) ) ? $args['instagram'] : Theme::get_wsu_option( 'social_accounts', 'instagram' );
		$args['linkedin']  = ( ! empty( $args['linkedin'] ) ) ? $args['linkedin'] : Theme::get_wsu_option( 'social_accounts', 'linkedin' );
	}


}

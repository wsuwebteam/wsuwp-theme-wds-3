<?php namespace WSUWP\Theme\WDS; 


class Block_Social_Site extends Theme_Block {

	protected static $block_slug    = 'social-site';
	protected static $option_group  = 'social-site';
	protected static $default_args = array(
		'displayBlock'   => '',
		'className'      => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		$social_accounts = array(
			'twitter'   => Theme::get_wsu_option( 'social_accounts', 'twitter' ),
			'facebook'  => Theme::get_wsu_option( 'social_accounts', 'facebook' ),
			'youtube'   => Theme::get_wsu_option( 'social_accounts', 'youtube' ),
			'instagram' => Theme::get_wsu_option( 'social_accounts', 'instagram' ),
			'linkedin'  => Theme::get_wsu_option( 'social_accounts', 'linkedin' ),
		);

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}

}

Block_Social_Site::init();

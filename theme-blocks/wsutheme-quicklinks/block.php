<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Quicklinks extends Block {

	protected static $block_slug    = 'quicklinks';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock'      => true,
		'className'         => '',
		'primaryActionText' => 'Give',
		'primaryActionLink' => 'https://foundation.wsu.edu/give/',
		'showSearchOptions' => 'show',
		'searchContext'     => 'site',
		'placeholder'       => 'Search',
		'siteLabel'         => 'default',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected static function set_args( &$args ) {

		$args['primaryActionText'] = Theme::get_wsu_option( 'site_options', 'primaryActionText', $args['primaryActionText'] );
		$args['primaryActionLink'] = Theme::get_wsu_option( 'site_options', 'primaryActionLink', $args['primaryActionLink'] );

		if ( 'default' === $args['siteLabel'] ) {

			$urlparts = parse_url( home_url() );

			$args['siteLabel'] = $urlparts['host'];

		}

	}


}

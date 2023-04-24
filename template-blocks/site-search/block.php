<?php namespace WSUWP\Theme\WDS; 


class Block_Site_Search extends Theme_Block {

	protected static $block_slug    = 'site-search';
	protected static $option_group  = 'search';
	protected static $default_args = array(
		'displayBlock' => 'default',
		'style'        => '',
		'showOptions'  => 'show',
		'context'      => 'site',
		'placeholder'  => 'Search',
		'siteLabel'    => 'default',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		self::parse_site_label( $args );

		if ( ! static::should_hide( $args ) ) {

			switch ( $args['style'] ) {

				case 'underline':
					include __DIR__ . '/templates/underline.php';
					break;

			}
		}

	}


	protected static function parse_site_label( &$args ) {

		if ( 'default' === $args['siteLabel'] ) {

			$urlparts = parse_url( home_url() );

			$args['siteLabel'] = $urlparts['host'];

		} else {

			$args['siteLabel'] = $args['siteLabel'];

		}

	} 

}

Block_Site_Search::init();
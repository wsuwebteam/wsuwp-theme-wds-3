<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Header extends Block {

	protected static $block_slug    = 'site-header';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'menuDepth'    => 3,
		'type'         => 'unit',
		'siteTitle'    => '',
		'siteSubtitle' => '',
		'siteLink'     => '',
 	);


	protected static function render( $args, $content = '' ) {

		if ( ! static::should_hide( $args ) ) {

			switch ( $args['type'] ) {

				case 'campus':
					include __DIR__ . '/templates/campus.php';
					break;
				default:
					include __DIR__ . '/templates/template.php';

			}
		}

	}


	protected static function set_args( &$args ) {

		$args['displayBlock'] = Theme::get_wsu_option( 'theme', 'displaySiteHeader', $args['displayBlock'] );
		$args['type']         = Theme::get_wsu_option( 'theme', 'siteHeader', $args['type'] );

		

		if ( 'campus' === $args['type'] ) {

			$campus = Theme::get_wsu_option( 'site_options', 'campus', 'pullman' );

			switch ( $campus ) {

				case 'pullman':
					$args['siteTitle'] = 'Pullman';
					$args['siteLink']  = 'https://pullman.wsu.edu';
					break;
				case 'spokane':
					$args['siteTitle'] = 'Spokane';
					$args['siteLink']  = 'https://spokane.wsu.edu';
					break;
				case 'tri-cities':
					$args['siteTitle'] = 'Tri-Cities';
					$args['siteLink']  = 'https://tricities.wsu.edu';
					break;
				case 'vancouver':
					$args['siteTitle'] = 'Vancouver';
					$args['siteLink']  = 'https://vancouver.wsu.edu';
					break;
				case 'everett':
					$args['siteTitle'] = 'Everett';
					$args['siteLink']  = 'https://everett.wsu.edu';
					break;
				case 'global':
					$args['siteTitle'] = 'Global Campus';
					$args['siteLink']  = 'https://online.wsu.edu';
					break;

			}
		} else {

			$args['siteTitle']    = get_bloginfo( 'name' );
			$args['siteSubtitle'] = get_bloginfo( 'description' );
			$args['siteLink']     = get_home_url();

		}
	}


}

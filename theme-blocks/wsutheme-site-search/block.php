<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Search extends Block {

	protected static $block_slug    = 'site-search';
	protected static $option_group  = '';
	protected static $default_args = array(
		'displayBlock' => true,
		'className'    => '',
 	);


	protected static function render( $args, $content = '' ) {

		self::set_args( $args );

		if ( ! static::should_hide( $args ) ) {

			$search_bar = static::get_template_path( 'templates/search-bar' );

			if ( isset( $_REQUEST['cat'] ) ) {

				$search_results = static::get_template_path( 'templates/wordpress-results' );

			} else {

				$search_results = static::get_template_path( 'templates/google-results' );

			}

			if ( $search_bar && $search_results ) {

				ob_start();
	
				include $search_bar;

				include $search_results;

				echo do_blocks( ob_get_clean() );
	
			}
		}

	}


	protected static function set_args( &$args ) {

		
	}


}

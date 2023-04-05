<?php namespace WSUWP\Theme\WDS; 


class Block_Article_Header extends Theme_Block {

	protected static $block_slug    = 'article-header';
	protected static $option_group  = 'article-header';
	protected static $default_args = array(
		'displayBlock'       => '',
		'className'          => '',
        'displayBreadcrumbs' => '',
		'title'              => '',
		'displayByline'      => '',
		'displayPublishDate' => '',
		'displayShare'       => '',
		'headingTag'         => 'h1',
		'linkHeading'        => '',
		'link'               => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		self::set_args( $args );

		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}


	protected static function set_args( &$args ) {

		if ( empty( $args['title'] ) ) {

			if ( in_the_loop() ) {

				ob_start();
	
				the_title();
	
				$args['title'] = ob_get_clean();
	
			} elseif ( is_archive() ) {
	
				$args['title'] = get_the_archive_title();
	
			} 

		} 

		if ( empty( $args['link'] ) && ! empty( $args['linkHeading'] ) ) {

			if ( in_the_loop() ) {
	
				$args['link'] = get_the_permalink();
	
			} 
		} 

	}


	protected static function should_hide( $args ) {

		if ( is_singular() && in_the_loop() ) {

			$post_content = get_the_content();

			$has_title = array(
				'<h1',
				'tag":"h1"',
				'wsuwp/pagetitle',
				'Tag":"h1"',
			);

			foreach ( $has_title as $search_string ) {

				if ( false !== strpos( $post_content, $search_string ) ) {

					return true;

				}
			}
		}

		return parent::should_hide( $args );

	}


}

Block_Article_Header::init();
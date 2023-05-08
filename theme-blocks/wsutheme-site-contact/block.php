<?php namespace WSUWP\Theme\WDS; 


class Theme_Block_Site_Contact extends Block {

	protected static $block_slug    = 'site-contact';
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

		

		if ( ! static::should_hide( $args ) ) {

			$template_path = static::get_template_path( 'template' );

			if ( $template_path ) {
	
				include $template_path;
	
			}
		}

	}


	protected static function set_args( &$args ) {

		$args['organization'] = ( ! empty( $args['organization'] ) ) ? $args['organization'] : Theme::get_wsu_option( 'contact', 'organization' );
		$args['address']      = ( ! empty( $args['address'] ) ) ? $args['address'] : Theme::get_wsu_option( 'contact', 'address' );
		$args['city']         = ( ! empty( $args['city'] ) ) ? $args['city'] : Theme::get_wsu_option( 'contact', 'city' );
		$args['state']        = ( ! empty( $args['state'] ) ) ? $args['state'] : Theme::get_wsu_option( 'contact', 'state' );
		$args['zip']          = ( ! empty( $args['zip'] ) ) ? $args['zip'] : Theme::get_wsu_option( 'contact', 'zip' );
		$args['phone']        = ( ! empty( $args['phone'] ) ) ? $args['phone'] : Theme::get_wsu_option( 'contact', 'phone' );
		$args['email']        = ( ! empty( $args['email'] ) ) ? $args['email'] : Theme::get_wsu_option( 'contact', 'email' );

		$args['phone'] = ( ! empty( $args['phone'] ) ) ? '<a href="tel:' . esc_attr( $args['phone'] ) . '">' . wp_kses_post( $args['phone'] ) . '</a>' : '';
		$args['email'] = ( ! empty( $args['email'] ) ) ? '<a href="mailto:' . esc_url( $args['email'] ) . '">' . wp_kses_post( $args['email'] ) . '</a>' : '';

	}

	protected static function set_content( &$content, $args ) {

		if ( empty( $content ) ) {

			$contact_actions = implode( '&nbsp;&nbsp; ', array_filter( array( $args['phone'], $args['email'] ) ) );

			$contact_groups = array(
				$args['organization'],
				$args['address'],
				$args['city'],
				$args['state'],
				$args['zip'],
				$contact_actions,
			);

			$content = implode( ',&nbsp;  ', array_filter( $contact_groups ) );
		}
	}


}

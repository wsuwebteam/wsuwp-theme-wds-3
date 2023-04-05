<?php namespace WSUWP\Theme\WDS; 


class Block_Contact_Site extends Theme_Block {

	protected static $block_slug    = 'contact-site';
	protected static $option_group  = 'contact-site';
	protected static $default_args = array(
		'displayBlock'           => false,
		'className'      => '',
	);


	public static function init() {

	}

	// Call render_block( $args ) in parent class
	protected static function render( $args ) {

		$organization = Theme::get_wsu_option( 'contact', 'organization' );
		$address      = Theme::get_wsu_option( 'contact', 'address' );
		$city         = Theme::get_wsu_option( 'contact', 'city' );
		$state        = Theme::get_wsu_option( 'contact', 'state' );
		$zip          = Theme::get_wsu_option( 'contact', 'zip' );
		$phone        = Theme::get_wsu_option( 'contact', 'phone' );
		$email        = Theme::get_wsu_option( 'contact', 'email' );

		$phone = ( ! empty( $phone ) ) ? '<a href="tel:' . wp_kses_post( $phone ) . '">' . wp_kses_post( $phone ) . '</a>' : '';
		$email = ( ! empty( $email ) ) ? '<a href="mailto:' . esc_url( $email ) . '">' . wp_kses_post( $email ) . '</a>' : '';

		$contact_actions = implode( '&nbsp;&nbsp; ', array_filter( array( $phone, $email ) ) );

		$contact_groups = array(
			$organization,
			$address,
			$city,
			$state,
			$zip,
			$contact_actions,
		);


		if ( ! static::should_hide( $args ) ) {

			include __DIR__ . '/templates/default-version-3.php';

		}

	}

}

Block_Contact_Site::init();

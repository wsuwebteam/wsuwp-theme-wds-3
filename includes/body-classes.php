<?php namespace WSUWP\Theme\WDS;


class Body_Classes {

	public static function init() {

		add_filter( 'body_class', array( __CLASS__, 'add_menu_body_classes' ) );

		add_filter( 'body_class', array( __CLASS__, 'add_template_body_classes' ) );

	}


	public static function add_menu_body_classes( $classes ) {

		if ( has_nav_menu( 'horizontal' ) || has_nav_menu( 'site' ) ) {

			$classes[] = 'wsu-has--mobile-nav';

		}

		if ( is_tax( 'product_cat' ) ) {

			$term = get_queried_object();

			$classes[] = 'wsu-product-cat--' . $term->slug;

		}

		if ( is_singular( 'product' ) ) {

			$taxonomy_terms = get_the_terms( get_the_ID(), 'product_cat' );

			if ( $taxonomy_terms ) {

				foreach ( $taxonomy_terms as $taxonomy_term ) {

					$classes[] = 'product-cat-' . $taxonomy_term->slug;

				}
			}
		}

		$classes[] = 'wsu-template--' . Theme::get_context();

		return $classes;

	}

	public static function add_template_body_classes( $classes ) {

		$context = Theme::get_context();

		$template = 'template_' . str_replace( '-', '_', $context );

		$body_classes = apply_filters( 'wsu_theme_options', '', $template, 'bodyClass' );

		if ( ! empty( $body_classes ) ) {

			$classes[] = $body_classes;

		}

		return $classes;

	}

}

Body_Classes::init();

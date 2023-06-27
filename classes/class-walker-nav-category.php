<?php namespace WSUWP\Theme\WDS;

class Walker_Nav_Menu_Category extends \Walker_Nav_Menu {


	protected function parse_wds_menu_args( &$args ) {

		$menu_defaults = array(
			'depth'         => 3,
			'action_prefix' => 'wsu-menu-action',
		);

		$args = array_merge( $menu_defaults, $args );

	}

	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.

		$menu_item = $data_object;

		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		$classes[] = 'menu-item-' . $menu_item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );
		$item_attrs = $this->get_list_item_attrs( $menu_item, $classes, $args, $depth );

		$output .= '<li ';

		$output .= $this->stringify_attrs( $this->get_list_item_attrs( $menu_item, $classes, $args, $depth ) );

		$output .= ' >';

		$output .= ( in_array( 'menu-item-has-children', $classes ) ) ? $this->get_button_item_html( $menu_item, $classes, $args, $depth ) : $this->get_link_item_html( $menu_item, $classes, $args, $depth );

	}


	public function end_lvl( &$output, $depth = 0, $args = null ) {

		if ( 0 === $depth ) {

			$output .= '<li><button class="wsu-menu-action--close-menu">Close Menu</button></li>';

		}
		
		$output .= '</ul>';

	}



	protected function get_link_item_html( $menu_item, $classes, $args, $depth ) {

		$output = '<a ';

		$output .= $this->stringify_attrs( $this->get_link_item_attrs( $menu_item, $classes, $args, $depth ) );

		$output .= ' >';

		$output .= $menu_item->title;

		$output .= '</a>';

		return $output;

	}

	protected function get_button_item_html( $menu_item, $classes, $args, $depth ) {

		$output = '<button class="wsu-menu-action--toggle" aria-label="open submenu">';

		$output .= $menu_item->title;

		$output .= '</button>';

		return $output;

	}

	protected function get_list_item_attrs( $menu_item, $classes, $args, $depth ) {

		$attrs = array();

		if ( in_array( 'menu-item-has-children', $classes ) ) {

			$attrs['aria-expanded'] = ( $this->is_expanded( $classes ) ) ? 'true' : 'false';
			$attrs['aria-haspopup'] = 'true';
		}

		$list_classes = array();

		$list_classes[] = ( in_array( 'current-menu-item', $classes, true ) ) ? 'wsu-menu--current-item' : '';

		foreach ( $classes as $class ) {

			if ( false !== strpos( $class, 'current-' ) ) {

				$list_classes[] = 'wsu-menu--curent-item-ancestor';

			}
		}

		$attrs['class'] = implode( ' ', $list_classes );

		return $attrs;

	}

	protected function get_link_item_attrs( $menu_item, $classes, $args, $depth ) {

		$attrs = array();

		$attrs['aria-current'] = $menu_item->current ? 'page' : '';

		$attrs['href'] = esc_url( $menu_item->url );

		return $attrs;

	}

	protected function stringify_attrs( $attrs ) {

		$string_array = array();

		foreach ( $attrs as $key => $value ) {

			if ( '' !== $value ) {

				$string_array[] = "{$key}={$value}";

			}
		}

		return implode( ' ', $string_array );

	}


	protected function is_expanded( $classes ) {

		$expand_classes = array(
			'current_page_item',
			'current_page_parent',
			'current_page_ancestor',
		);

		return ( ! empty( array_intersect( $classes, $expand_classes ) ) ) ? true : false;

	}

}

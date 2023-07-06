<?php namespace WSUWP\Theme\WDS;


class Taxonomies {

	public static function init() {

		add_filter( 'init', array( __CLASS__, 'add_taxonimies_post_types' ) );

	}


	function add_taxonimies_post_types() {
		// Add tag metabox to page
		register_taxonomy_for_object_type( 'post_tag', 'page' );

		// Add category metabox to page
		register_taxonomy_for_object_type( 'category', 'page' );

	}

}

Taxonomies::init();

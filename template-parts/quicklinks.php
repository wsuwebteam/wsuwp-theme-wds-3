<?php WSUWP\Theme\WDS\Theme::render_block( 
	'quicklinks',
	array(
		'showSearchOptions' => WSUWP\Theme\WDS\Theme::get_wsu_option( 'search', 'showOptions', 'show' ),
		'searchContext'     => WSUWP\Theme\WDS\Theme::get_wsu_option( 'search', 'context', 'site' ),
		'primaryActionLink' => WSUWP\Theme\WDS\Theme::get_wsu_option( 'site_options', 'primaryActionLink', 'https://foundation.wsu.edu/give/' ),
		'primaryActionText' => WSUWP\Theme\WDS\Theme::get_wsu_option( 'site_options', 'primaryActionText', 'Give' ),
	)
); ?>

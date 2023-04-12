<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'end', 
		'context'  => WSUWP\Theme\WDS\Theme::get_template( $args ), 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'sidebar', 'sidebar_' . WSUWP\Theme\WDS\Theme::get_template( $args ) ),
	) 
); ?>
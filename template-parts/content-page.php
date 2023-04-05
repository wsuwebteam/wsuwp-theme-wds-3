<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'start', 
		'context'  => 'page', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_page', 'sidebar', 'default', 'sidebar_page' ),
	) 
); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article',
			array(
				'format' => 'page',
				'context' => 'page',
				)
			); ?>
	<?php endwhile; endif; ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'end', 
		'context'  => 'page', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_page', 'sidebar', 'default', 'sidebar_page' ),
	) 
); ?>

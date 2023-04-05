<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'start', 
		'context'  => 'post', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_post', 'sidebar', 'default', 'sidebar_post' ),
	) 
); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article',
			array(
				'format'  => 'index',
				'context' => 'index',
                'displayBylineBefore' => 'hide',
                'displayBylineAfter'  => 'hide', 
                'displayShareAfter'   => 'hide',
                'displayShareBefore'  => 'hide',
                'linkTitle'           => true,
				)
			); ?>
	<?php endwhile; endif; ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'end', 
		'context'  => 'post', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_post', 'sidebar', 'default', 'sidebar_post' ),
	) 
); ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'start', 
		'context'  => 'archive', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_archive', 'sidebar', 'default', 'sidebar_post' ),
	) 
); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-header',
		array(
			'displayByline'      => 'hide',
			'displayPublishDate' => 'hide',
			'displayShare'       => 'hide',
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'before-archive' ) ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article',
			array(
				'format'     => 'index',
				'context'    => 'archive',
				'displayBylineBefore'      => 'hide',
				'displayPublishDateBefore' => 'hide',
				'displayShareBefore'       => 'hide',
				'displayBylineAfter'       => 'hide',
				'displayPublishDateAfter'  => 'hide',
				'displayShareAfter'        => 'hide',
				)
			); ?>
	<?php endwhile; endif; ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'after-archive' ) ); ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'end', 
		'context'  => 'archive', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_archive', 'sidebar', 'default', 'sidebar_post' ),
	) 
); ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'start', 
		'context'  => 'tag', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_tag', 'sidebar', 'default', 'sidebar_post' ),
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
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'before-tag' ) ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article',
			array(
				'format'     => 'index',
				'context'    => 'tag',
				)
			); ?>
	<?php endwhile; endif; ?>
    <?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'after-tag' ) ); ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 
	'layout', 
	array( 
		'position' => 'end', 
		'context'  => 'tag', 
		'sidebar'  => WSUWP\Theme\WDS\Theme::get_template_option( 'template_tag', 'sidebar', 'default', 'sidebar_post' ),
	) 
); ?>
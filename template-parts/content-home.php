<?php WSUWP\Theme\WDS\Theme::render_block(
	'layout',
	array(
		'position' => 'start',
		'context'  => 'post',
		'sidebar'  => 'sidebar_post',
	)
); ?>
<?php WSUWP\Theme\WDS\Theme::render_block(
	'article-header',
	array(
		'hideByline'      => true,
		'hidePublishDate' => true,
		'hideShare'       => true,
		'context'         => 'post_archive',
		'is_archive'      => true,
	)
); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article',
			array(
				'format'          => 'index-image',
				'context'         => 'post_archive',
				'tag'             => 'h2',
				)
			); ?>
	<?php endwhile; endif; ?>
<?php WSUWP\Theme\WDS\Theme::render_block(
	'layout', array(
		'position' => 'end',
		'context'  => 'post_archive',
		'sidebar'  => 'sidebar_post',
	)
); ?>
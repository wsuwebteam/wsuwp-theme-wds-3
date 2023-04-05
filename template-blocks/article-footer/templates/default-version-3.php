<footer class="wsu-article-footer">
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-share',
		array(
			'displayBlock' => $args['displayShare'],
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-byline',
		array(
			'displayBlock' => $args['displayByline'],
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-publish-date',
		array(
			'displayBlock' => $args['displayPublishDate'],
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-taxonomy',
		array(
			'taxonomy'     => 'tags',
			'displayBlock' => $args['displayTags'],
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-taxonomy',
		array(
			'taxonomy'     => 'categories',
			'displayBlock' => $args['displayCategories'],
		)
	); ?>
</footer>
<header class="wsu-article-header">
	<?php WSUWP\Theme\WDS\Theme::render_block( 
		'breadcrumbs',
		array(
			'displayBlock' => $args['displayBreadcrumbs'],
		)
	); ?>
	<<?php echo esc_attr( $args['headingTag'] ); ?>>
		<?php if ( ! empty( $args['linkHeading'] ) && ! empty( $args['link'] ) ) : ?><a href="<?php echo esc_url( $args['link'] ); ?>"><?php endif; ?>
		<?php echo wp_kses_post( $args['title'] ); ?>
		<?php if ( ! empty( $args['linkHeading'] ) && ! empty( $args['link'] ) ) : ?></a><?php endif; ?>
	</<?php echo esc_attr( $args['headingTag'] ); ?>>
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
		'article-share',
		array(
			'displayBlock' => $args['displayShare'],
		)
	); ?>
</header>
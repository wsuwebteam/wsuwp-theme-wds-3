<article class="wsu-article">
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-header',
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineBefore', $args['displayBylineBefore'], 'show' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateBefore', $args['displayPublishDateBefore'], 'show' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareBefore', $args['displayShareBefore'], 'show' ),
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'before-post' ) ); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-banner',
		array(
			'displayBlock' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBanner', $args['displayBanner'], 'show' ),
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'article-content' ); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-footer',
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineAfter', $args['displayBylineAfter'], 'show' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateAfter', $args['displayPublishDateAfter'], 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareAfter', $args['displayShareAfter'], 'show' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayCategories', $args['displayCategories'], 'show' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayTags', $args['displaytags'], 'show' ),
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'after-post' ) ); ?>
</article>
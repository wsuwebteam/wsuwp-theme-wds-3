<article class="wsu-article">
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-header',
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineBefore', $args['displayBylineBefore'], 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateBefore', $args['displayPublishDateBefore'], 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareBefore', $args['displayShareBefore'], 'hide' ),
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'before-page' ) ); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'article-content' ); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block(
		'article-footer',
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineAfter', $args['displayBylineAfter'], 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateAfter', $args['displayPublishDateAfter'], 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareAfter', $args['displayShareAfter'], 'hide' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayCategories', $args['displayCategories'], 'hide' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayTags', $args['displaytags'], 'hide' ),
		)
	); ?>
	<?php WSUWP\Theme\WDS\Theme::render_block( 'widget-area', array( 'area' => 'after-page' ) ); ?>
</article>

<article class="wsu-article wsu-article--format-page wsu-article--context-<?php echo esc_attr( WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>">
	<?php get_template_part(
		'template-parts/article-header',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineBefore', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateBefore', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareBefore', 'hide' ),
		)
	); ?>
	<?php get_template_part(
		'template-parts/article-banner',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayBlock' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBanner', 'hide' ),
		)
	); ?>
	<?php get_template_part( 'template-parts/article-content', WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>
	<?php get_template_part(
		'template-parts/article-footer',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineAfter', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateAfter', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareAfter', 'hide' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayCategories', 'hide' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayTags', 'hide' ),
		)
	); ?>
</article>
<article class="wsu-article wsu-article--format-article wsu-article--context-<?php echo esc_attr( WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>">
	<?php get_template_part(
		'template-parts/article-header',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineBefore', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateBefore', 'show' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareBefore', 'show' ),
		)
	); ?>
	<?php get_template_part(
		'template-parts/article-banner',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayBlock' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBanner', 'show' ),
		)
	); ?>
	<?php get_template_part( 'template-parts/article-content', WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>
	<?php get_template_part(
		'template-parts/article-footer',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineAfter', 'show' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateAfter', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareAfter', 'show' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayCategories', 'show' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayTags', 'show' ),
		)
	); ?>
</article>
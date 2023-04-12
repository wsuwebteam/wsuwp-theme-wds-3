<article class="wsu-article wsu-article--context-<?php echo esc_attr( WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>">
	<?php get_template_part(
		'template-parts/article-header',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBylineBefore', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayPublishDateBefore', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayShareBefore', 'hide' ),
		)
	); ?>
	<?php get_template_part(
		'template-parts/article-banner',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayBlock' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBanner', 'hide' ),
		)
	); ?>
	<?php get_template_part( 'template-parts/content', WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>
	<?php get_template_part(
		'template-parts/article-footer',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBylineAfter', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayPublishDateAfter', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayShareAfter', 'hide' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayCategories', 'hide' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayTags', 'hide' ),
		)
	); ?>
</article>


<article class="wsu-article">
	<?php get_template_part(
		'template-parts/article-header',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBylineBefore', 'show' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayPublishDateBefore', 'show' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayShareBefore', 'show' ),
		)
	); ?>
	<?php get_template_part(
		'template-parts/article-banner',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayBlock' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBanner', 'show' ),
		)
	); ?>
	<?php get_template_part( 'template-parts/content', WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>
	<?php get_template_part(
		'template-parts/article-footer',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayBylineAfter', 'show' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayPublishDateAfter', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayShareAfter', 'show' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayCategories', 'show' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_option( WSUWP\Theme\WDS\Theme::get_template( $args ), 'displayTags', 'show' ),
		)
	); ?>
</article>


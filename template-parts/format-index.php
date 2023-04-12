<article class="wsu-article wsu-style--index wsu-article--context-<?php echo esc_attr( WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>">
<div class="wsu-article__inner-wrapper">
	<?php get_template_part(
		'template-parts/article-header',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineBefore', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateBefore', 'hide' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareBefore', 'hide' ),
            'headingTag'         => 'h2',
            'linkHeading'        => true,
            'displayBreadcrumbs' => 'hide',
		)
	); ?>
	<?php get_template_part( 'template-parts/article-excerpt', WSUWP\Theme\WDS\Theme::get_template( $args ) ); ?>
	<?php get_template_part(
		'template-parts/article-footer',
		WSUWP\Theme\WDS\Theme::get_template( $args ),
		array(
			'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayBylineAfter', 'hide' ),
			'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayPublishDateAfter', 'show' ),
			'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayShareAfter', 'hide' ),
			'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayCategories', 'show' ),
			'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_setting( $args, 'displayTags', 'show' ),
		)
	); ?>
    </div>
    <?php if ( has_post_thumbnail() )  : ?>
    <div class="wsu-article__thumbnail">
		<?php WSUWP\Theme\WDS\Theme::render_block( 'article-image', array() ); ?>
	</div>
    <?php endif; ?>
</article>
